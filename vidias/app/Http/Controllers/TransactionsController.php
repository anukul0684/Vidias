<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Pagerange\Bx\_5bx;
use App\Models\User;
use App\Models\Address;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Province;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Carbon\Carbon;
use DateTime;

class TransactionsController extends Controller
{

    public function index()
    {
        if(\Auth::user()) {
        
            $userDetail=User::where('id','=',\Auth::user()->id)
                            ->where('active','=','yes')
                            ->first();              
        
            $title = "Payment";
            
            return view('payment',compact('title','userDetail')); 

        }        

        session()->flash('error','Please login to visit this page.');
        return redirect('/login');
    }


    public function processPayment(Request $request)
    {           
        
        $valid = $request->validate([
                //'card_type' => 'bail|required|regex:/^[A-Za-z]$/',
                'card_number' => 'bail|required|regex:/^\d{15,16}$/', 
                'card_expiry_month' => 'bail|required|gt:0',
                'card_expiry_year' => 'bail|required|gt:0',
                'card_cvv' => 'bail|required|regex:/^\d{3}$/', 
        ]);
        //dd($request);
        if(session('cart')) {       
            //begin transaction...
            DB::beginTransaction();

            //assign the session user details to a variable
            $userShippingDetails = session()->get('userShippingDetails');

            //assign the shipping date adding 7 days to current date
            $shipping_date = Carbon::createFromFormat('Y-m-d H:i:s',now())->addDays(7);
            
            //assign the shipping address by merging the address details
            $shipping_address = $userShippingDetails['street_name'] . ', ' .
                                $userShippingDetails['city'] . ', ' .
                                $userShippingDetails['province_name'] . ', ' . 
                                $userShippingDetails['country'] . ', ' .
                                $userShippingDetails['postal_code'];

            //calculate the subtotal from cart items
            $subtotal = 0;                                
            foreach(session('cart') as $id => $details) {                       
                $subtotal += $details['price'] * $details['quantity'];
            }
            
            //calculate the GST HST PST QST if any for the address selected
            $gst=0;
            $pst=0;
            $hst=0;
            $qst=0;

            if($userShippingDetails['gst']!=0) {
                $gst = round((($userShippingDetails['gst'] * $subtotal)/100),2);
            }

            if($userShippingDetails['hst']!=0) {
                $hst = round((($userShippingDetails['hst'] * $subtotal)/100),2);
            }

            if($userShippingDetails['pst']!=0) {
                $pst = round((($userShippingDetails['pst'] * $subtotal)/100),2);
            }

            if($userShippingDetails['qst']!=0) {
                $qst = round((($userShippingDetails['qst'] * $subtotal)/100),2);
            }
            //dd($gst,$hst,$pst,$qst);
            //add to the subtotal and get the total after taxes
            $total = $subtotal 
                        + $gst
                        + $hst
                        + $pst
                        + $qst;

            //create the order for the cart items
            $order = new Order;
            $order->user_id = $userShippingDetails['user_id'];
            $order->shipped_date = $shipping_date;
            $order->order_billing_address = $shipping_address;
            $order->order_shipping_address = $shipping_address;
            $order->email = $userShippingDetails['email'];
            $order->mobile_number = $userShippingDetails['mobile_number'];
            $order->subtotal = $subtotal;

            if($userShippingDetails['gst']!=0) {
                $order->gst = $gst . " (" . $userShippingDetails['gst'] . "%)"; 
            } else {
                $order->gst = "0";
            }          

            if($userShippingDetails['hst']!=0) {
                $order->hst = $hst . " (" . $userShippingDetails['hst'] . "%)";
            } else {
                $order->hst = "0";
            }   

            if($userShippingDetails['pst']!=0) {
                $order->pst = $pst . " (" . $userShippingDetails['pst'] . "%)";
            } else {
                $order->pst = "0";
            }   

            if($userShippingDetails['qst']!=0) {
                $order->qst = $qst . " (" . $userShippingDetails['qst'] . "%)";
            } else {
                $order->qst = "0";
            }   

            $order->total = $total;
            $order->card_number = substr($request->card_number,-4);
            $order->created_at = Carbon::now()->format('Y-m-d H:i:s');
            $order->save();

            //create the order details for the order added
            $orderDetails = [];

            if($order){
                $cart =  session()->get('cart');
                
                foreach($cart as $id => $details)
                {
                    //dd($details);
                    $configuration = "Brand: " . $details['brand'] . 
                                    ", Processor: " . $details['processor_name'] .
                                    ", Graphics card: " . $details['graphicscard_name'] .
                                    ", RAM: " . $details['ram_size'] .
                                    ", Touch Screen: " . $details['touch_screen'] .
                                    ", Screen Resolution: " . $details['screen_resolution'] .
                                    " ppi, Screen Size: " . $details['screen_size'] .
                                    "\", USB Type: " . $details['usb_type'];

                    $orderDetails['laptop_id'] = $details['id'];
                    $orderDetails['configuration'] = $configuration;
                    $orderDetails['unit_price'] = $details['price'];
                    $orderDetails['quantity'] = $details['quantity'];
                    $orderDetails['line_price'] = $details['price'] * $details['quantity'];
                    $orderDetails['active'] = 'yes';
                    $orderDetails['order_id'] = $order->id;
                    $orderDetails['created_at'] = Carbon::now()->format('Y-m-d H:i:s');
                    
                    Order_detail::create($orderDetails);
                }
                
            }
            
            //Payment Gateway processing
            $transaction = new _5bx(env('_5BX_LOGIN_ID'), env('_5BX_API_KEY'));
            $transaction->amount(strval($order->total));
            $transaction->card_num(strval($request->card_number));
            $transaction->exp_date (strval($request->card_expiry_month . $request->card_expiry_year));
            $transaction->cvv(strval($request->card_cvv));
            $transaction->ref_num(strval($order->id));
            $transaction->card_type(strval($request->card_type));
            //dd($transaction);
            $response = $transaction->authorize_and_capture();
            
            //Check for response received if 1 then complete order and commit else rollback and inform user 
            //with errors in entering card details received from Payment Gateway
            if($response->transaction_response->response_code == '1') {
                //dd(json_encode($response->transaction_response));
                $transaction_id = $response->transaction_response->trans_id;
                $save_transaction = new Transaction();
                $save_transaction->order_id = $order->id;
                $save_transaction->status = $response->transaction_response->response_code;
                $save_transaction->response = json_encode($response->transaction_response);
                $save_transaction->created_at = Carbon::now()->format('Y-m-d H:i:s');
                $save_transaction->save();

                session()->flash('success','Your Order is placed successfully!!');
                session()->forget('cart');

                DB::statement("UPDATE orders SET active = 'yes', 
                                        payment_status = 'complete', 
                                        transaction_id = $save_transaction->id
                                        where id = $order->id");

                DB::commit();

                session()->put('invoice_order',$order->id);                
                
                return redirect('/invoice');

            } else {
                DB::rollBack();                  
                $errors = '';
                //dd($response->transaction_response->errors);
                foreach($response->transaction_response->errors as $key => $error)
                {
                    $errors .= "  ***" . $error;
                }
                session()->flash('error', strval($errors));                   
                
                return redirect('/payment');
            }  
        } else {
            session()->flash('error','Please add items to cart.');
            return redirect('/cart');
        }
        
    } 
    
}
