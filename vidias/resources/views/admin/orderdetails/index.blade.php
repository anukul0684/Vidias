@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display" class="admin_background">
    <h1 class="admin_h1"><em>Order Details</em></h1>
    <!-- <h2><a href="/admin/orders/" class="btn btn-primary">All Orders</a></h2>  -->                 
</div>

<div id="list_display" style="padding-left:3px;padding-right:3px;padding-bottom:20px;">

    <table id="brand_crud" style="color: #fff;">
        <tr id="table_header">
            <th>Order Detail Id</th>
            <th>Order Id</th>
            <th>Laptop Id</th>
            <th>Unit Price($)</th>
            <th>Line Price($)</th>
            <th>Active</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    
    @foreach($order_details as $order_detail)
        
        <tr>
            <td>{{$order_detail->id}}</td>
            <td>{{$order_detail->order_id}}</td>
            <td>{{$order_detail->laptop_id}}</td>
            <td>{{$order_detail->unit_price}}</td>
            <td>{{$order_detail->line_price}}</td>
            <td>{{$order_detail->active}}</td>
            <td>{{$order_detail->created_at}}</td>
            <td>
                <a href="/admin/orders/orderdetails/edit/{{$order_detail->id}}" class="btn btn-secondary" style="margin-left:7px; margin-right:22px; margin-top:3px;">Edit</a>

                <form action="/admin/orders/order_details/delete/{{$order_detail->id}}" method="post" enctype="multipart/form-data" novalidate> 
                    @csrf 
                    @method('PATCH') 
                    <input type="hidden" name="id" value="{{$order_detail->id}}" />
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>

</div>

@stop()