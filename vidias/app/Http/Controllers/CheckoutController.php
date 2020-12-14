<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

use Pagerange\Bx\_5bx;
use App\Models\User;
use App\Models\Address;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Province;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    
    public function index()
    {
        if(!session()->has('cart')) {
            
            session()->flash('error','Please add items to cart for checkout.');

            return redirect('/cart');
        }

        if(\Auth::user()) {           
                

            $userDetails=User::where('id','=',\Auth::user()->id)
                                ->where('active','=','yes')
                                ->first();

            if($userDetails->email && $userDetails->mobile_number 
                && $userDetails->first_name && $userDetails->last_name) { 
            
                $addresses=Address::where('user_id','=',\Auth::user()->id)
                                    ->where('active','=','yes')
                                    ->orderBy('id')
                                    ->with('province')
                                    ->with('user')
                                    ->get();

                $provinces = Province::orderBy('id')
                                ->where('active','=','yes')
                                ->take(13)
                                ->get();

                $title = "Checkout";

                return view('checkout',compact('title','userDetails','addresses','provinces'));
            }

            session()->flash('error','Please complete your Profile before you proceed.');
            return redirect()->back();
        }

        session()->put('checkout',true);

        session()->flash('error','Please login to checkout the cart.');
        return redirect('/login');

    }

    public function addAddress(Request $request)
    {
        if(!session()->has('cart')) {
        
            session()->flash('error','Please add items to cart for checkout.');

            return redirect('/cart');
        }

        if(\Auth::user()) {          
                
            if($request->newprovince){
                $valid = $request->validate([
                    'street_name' => 'bail|required|string',
                    'city' => 'bail|required|string',
                    'newprovince' => 'bail|required|string',
                    'postal_code' => 'bail|required|string',
                    'country' => 'bail|required|string',                                      
                ]); 

                $getProvinceId = 0;
                $existingProvince = Province::where('province_name','=',trim($valid['newprovince']))
                                                ->first();
                if($existingProvince) {

                    $getProvinceId = $existingProvince->id;

                } else {

                    $newProvince = [];

                    $newProvince['province_name'] = $valid['newprovince'];
                    $newProvince['province_gst'] = 0;
                    $newProvince['province_hst'] = 0;
                    $newProvince['province_qst'] = 0;
                    $newProvince['province_pst'] = 0;
                    $newProvince['active'] = 'yes';

                    $new_province = Province::create($newProvince);

                    if($new_province){                    
                        $getProvinceId = $new_province->id;
                    }
                }

                if($getProvinceId != 0){

                    $newAddress = [];
                    $newAddress['street_name'] = $valid['street_name'];
                    $newAddress['city'] = $valid['city'];
                    $newAddress['province_id'] = $getProvinceId;
                    $newAddress['postal_code'] = $valid['postal_code'];
                    $newAddress['country'] = $valid['country'];
                    $newAddress['user_id'] = \Auth::user()->id;

                    $address = Address::create($newAddress);
                } else {

                    session()->flash('error','Error adding new address. Please try again.');

                    return redirect('/checkout');
                }

            } else {
                $valid = $request->validate([
                    'street_name' => 'bail|required|string',
                    'city' => 'bail|required|string',
                    'province_id' => 'bail|required|gt:0',
                    'postal_code' => 'bail|required|string',
                    //'country' => 'bail|required|string',
                    'user_id' => 'bail|required|integer',                    
                ]); 

                $valid['country'] = 'Canada';
                $address = Address::create($valid);
            }            
            
            $userDetail=User::where('id','=',\Auth::user()->id)
                            ->where('active','=','yes')
                            ->first(); 
            $valid['active'] = 'yes';
            

            if($address) {
                $userShippingDetails = [];
            
                $userShippingDetails['user_id'] = $userDetail->id;
                $userShippingDetails['name'] = $userDetail->name;
                $userShippingDetails['email'] = $userDetail->email;
                $userShippingDetails['mobile_number'] = $userDetail->mobile_number;
                $userShippingDetails['street_name'] = $address->street_name;
                $userShippingDetails['city'] = $address->city;
                $userShippingDetails['province_name'] = $address->province->province_name;
                $userShippingDetails['postal_code'] = $address->postal_code;
                $userShippingDetails['country'] = $address->country;
                $userShippingDetails['gst'] = $address->province->province_gst;
                $userShippingDetails['hst'] = $address->province->province_hst;
                $userShippingDetails['pst'] = $address->province->province_pst;
                $userShippingDetails['qst'] = $address->province->province_qst;
                session()->put('userShippingDetails', $userShippingDetails);

                session()->flash('success', 'New address added');
                $title = "Payment";
                return redirect('/payment');     

            } else {
            session()->flash('error','Please select or fill in your address details to proceed.');

            return redirect('/checkout');
            }           
            
        }

        session()->put('checkout',true);

        session()->flash('error','Please login to checkout the cart.');
        return redirect('/login');
    }

    public function selectAddress(Request $request)
    {
        if(!session()->has('cart')) {
        
            session()->flash('error','Please add items to cart for checkout.');

            return redirect('/cart');
        }

        if(\Auth::user()) { 
            $valid = $request->validate([
                'order_shipping_address' => 'bail|required|integer',   
            ]);
            
            $address=Address::where('id','=',$valid['order_shipping_address'])
                            ->with('province') 
                            ->with('user')                             
                            ->first();
            $userDetail=User::where('id','=',\Auth::user()->id)
                            ->where('active','=','yes')
                            ->first();              
        
            $title = "Payment";
            //$cart = session()->get('cart');
            
            $userShippingDetails = [];
            
            $userShippingDetails['user_id'] = $userDetail->id;
            $userShippingDetails['name'] = $userDetail->name;
            $userShippingDetails['email'] = $userDetail->email;
            $userShippingDetails['mobile_number'] = $userDetail->mobile_number;
            $userShippingDetails['street_name'] = $address->street_name;
            $userShippingDetails['city'] = $address->city;
            $userShippingDetails['province_name'] = $address->province->province_name;
            $userShippingDetails['postal_code'] = $address->postal_code;
            $userShippingDetails['country'] = $address->country;
            $userShippingDetails['gst'] = $address->province->province_gst;
            $userShippingDetails['hst'] = $address->province->province_hst;
            $userShippingDetails['pst'] = $address->province->province_pst;
            $userShippingDetails['qst'] = $address->province->province_qst;
            session()->put('userShippingDetails', $userShippingDetails);

            return redirect('/payment'); 
        }

        session()->put('payment',true);

        session()->flash('error','Please login to proceed do the payment.');
        return redirect('/login');
    }
}
