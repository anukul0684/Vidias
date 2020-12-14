@extends('layouts/vidia')

@section('content')

    <div id="head_display">
        
        <h1><em>ViDiA</em></h1>
        <h4>
            Your Orders.
        </h4>

        <h4>
            Please click on view to see the details.
        </h4>

    </div>
    
    @include('/partials/flash')
    <div class="container text-white">
        <div class="row">
            @if(count($orders) > 0 )
            @foreach($orders as $order)
                <div class="col-lg-12 d-flex border-bottom flex-wrap pt-3">
                    <div class="col-md-2">
                        <p>Order &#35;&#58; {{$order->id}}</p>
                        <?php $response = json_decode($order->transaction->response)->auth_code; ?>
                        <p>Authorization Code &#35;&#58; {{ $response }}</p> 
                        <p><strong>Payment Card Details</strong>&#58; xxxx-xxxx-xxxx -{{$order->card_number}} </p>                         
                    </div>
                    <div class="col-md-3">
                        <p>Shipping Date&#58; {{$order->shipped_date}} </p>
                        <p>Shipping Address&#58; {{$order->order_shipping_address}} </p>
                        <p>Shipped&#58; {{ucwords($order->shipped)}} </p>
                    </div>
                    <div class="col-md-3">
                        <p>Email&#58; {{ $order->email }} </p>                         
                    </div>
                    <div class="col-md-2">
                        <p>Mobile &#35;&#58; {{ $order->mobile_number }} </p>                         
                    </div>
                    <div class="col-md-2">
                        <p>Order Amount&#58; &#36;{{ $order->total }} </p> 
                        <p>
                            <a href="/orders/{{$order->id}}" class="btn">Order Details</a>
                        </p>
                    </div>
                </div>               
            @endforeach
            @else
                <h2 class="col text-white">
                    You have not placed any orders yet. Please visit our <a href="/laptops" style="color: #f5cb5c;">Laptops</a> section to proceed.
                </h2>   
            @endif
        </div>
    </div>


@stop()