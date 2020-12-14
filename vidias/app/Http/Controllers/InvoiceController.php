<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Transaction;
use Response;

class InvoiceController extends Controller
{
    //

    public function index()
    {
        if(\Auth::user()) {
            $newOrder = session()->get('invoice_order');
            if(!$newOrder) {
                session()->flash('error', 'Error processing request.');
                return redirect()->back();
            } 

            $order = Order::where('id','=',$newOrder)->first();
            $currentOrderDetails = Order_detail::where('order_id','=',$newOrder)->get();
            $transactionDetails = Transaction::where('order_id','=',$newOrder)->first();
            $ref_number = json_decode($transactionDetails->response);
            //dd($ref_number->auth_code);
            $title = 'Invoice';
            session()->forget('invoice_order'); 
            return view('/invoice',compact('title','order','currentOrderDetails','ref_number'));
        }
        session()->flash('error', 'Please login and proceed again.');
        return redirect('/login');
    }
    
}
