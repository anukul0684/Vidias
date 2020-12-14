@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display" class="admin_background">
    <h1 class="admin_h1"><em>Orders</em></h1>
    <!-- <h2><a href="/admin/orders/" class="btn btn-primary">All Orders</a></h2>  -->                 
</div>

<div id="list_display" style="padding-left:3px;padding-right:3px; padding-top:10px;padding-bottom:20px;">

    <table id="brand_crud" style="color: #fff;">
        <tr id="table_header">
            <th>Id</th>
            <th>User Id</th>
            <th>Shipped Date</th>
            <th>Billing Address</th>
            <th>Shipping Address</th>
            <th>email</th>
            <th>Mobile Number</th>
            <th>Total(Including Taxes)</th>
            <th>Shipped</th>
            <th>Payment Status</th>
            <th>Transaction Id</th>
            <!-- <th>Active</th> -->
            <th>Order Time</th>
            <th>Actions</th>
        </tr>
    
    @foreach($orders as $order)
        
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->user_id}}</td>
            <td>{{$order->shipped_date}}</td>
            <td>{{$order->order_billing_address}}</td>
            <td>{{$order->order_shipping_address}}</td>
            <td>{{$order->email}}</td>
            <td>{{$order->mobile_number}}</td>
            <td>{{$order->total}}</td>
            <td>{{$order->shipped}}</td>
            <td>{{$order->payment_status}}</td>
            <td>{{$order->transaction_id}}</td>
            <!-- <td>{{$order->active}}</td> -->
            <td>{{$order->created_at}}</td>
            <td><a href="/admin/orders/orderdetails/{{$order->id}}" class="btn btn-info" style="margin-left:7px; margin-right:22px; color:#fff">Order Details</a>

                <a href="/admin/orders/edit/{{$order->id}}" class="btn btn-secondary" style="margin-left:7px; margin-right:22px; margin-top:3px;">Edit</a>
                <form class="form-inline" action="/admin/orders/delete/{{$order->id}}" 
                        method="post" enctype="multipart/form-data" novalidate> 
                    @csrf 
                    @method('PATCH') 
                    <input type="hidden" name="id" value="{{$order->id}}" />
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>

</div>

@stop()