<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order_detail;

class AdminOrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {   
        $order_details = Order_detail::where('order_id',$id)->where('active','=','yes')->get();
        return view('/admin/orderdetails/index',compact('order_details'));
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
        $orderdetail = Order_detail::find($id);
        return view('admin/orderdetails/edit',compact('orderdetail'));
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

        $orderdetail = Order_detail::find($id);
        $valid = $request->validate([
            'laptop_id' => 'bail|required|integer',
            'unit_price' => 'bail|required|numeric',
            'quantity' => 'bail|required|integer',
            'line_price' => 'bail|required|numeric',
            'active' => 'bail|required|string'
        ]);

        if($orderdetail->update($valid)){
            session()->flash('success','updated the order successfully!');
        }else{
            session()->flash('error','Error while updating the order');
        }

        return redirect("/admin/orders/orderdetails/{$id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $order_detail = Order_detail::find($id)->delete();
        return redirect('/admin/orders/');    
    }

}
