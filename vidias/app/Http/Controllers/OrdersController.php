<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Laptop;
use App\Models\Order_detail;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    //
    public function index()
    {
        if(\Auth::user()) {
            $orders=Order::where('user_id','=',\Auth::user()->id)
                            ->orderBy('id','DESC')
                            ->with('transaction')
                            ->with('user')
                            ->with('order_details')                                                                                
                            ->get();
            // $orders=DB::table('orders')
            //                 ->join('transactions', 'orders.id', '=', 'transactions.order_id')
            //                 ->join('users', 'orders.user_id', '=', 'users.id')
            //                 ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            //                 ->join('laptops', 'order_details.laptop_id', '=', 'laptops.id')
            //                 ->select('orders.*', 'users.*', 'order_details.*', 'laptops.*', 'transactions.*')
            //                 ->get();
            //dd($orders); 
                       
            $title = 'Orders';
            return view('orders/index',compact('title','orders'));
        }
        session()->flash('error', 'Please login and proceed again.');
        return redirect('/login');
    }

    public function show(Request $request,$id)
    {
        if(\Auth::user()) {

            $order=Order::where('id','=',$id)
                        ->where('user_id','=',\Auth::user()->id)                            
                        ->with('transaction')
                        ->with('user')
                        ->with('order_details')                                                                                
                        ->first();
            
            $order_details = Order_detail::where('order_id','=', $order->id)
                                            ->with('laptop')
                                            ->get();
            //dd($order_details);
            $title = 'Order Details';
            return view('orders/show',compact('title','order','order_details'));
        }
        session()->flash('error', 'Please login and proceed again.');
        return redirect('/login');
    }

}
