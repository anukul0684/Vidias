<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::where('active','=','yes')->get(); 
        return view('admin/orders/index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::where('id',$id)->with('user')->first();
        return view('admin/orders/edit',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $valid = $request->validate([
            'email'=>'bail|required|email',
            'mobile_number'=>'bail|required|numeric',
            'total' => 'bail|required|numeric',
            'card_number' => 'bail|required|numeric',
            'payment_status' => 'bail|required|string',
            'transaction_id' => 'bail|required|integer',
            'active' => 'bail|required|string',
            'shipped' => 'bail|required|string'
        ]);

        if($order->update($valid)){
            session()->flash('success','order updated successfully!');
        }else{
            session()->flash('error','Error while updating order');
        }

        return redirect('/admin/orders/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::find($id)->delete();
        return redirect('/admin/orders/');
    }
}
