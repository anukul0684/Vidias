@extends('layouts/vidia')

@section('content')

    <div id="head_display">
        
        <h1><em>Congratulations!!!</em></h1>
        <h4>
            Your order is now placed successfully.
        </h4>

        <h4>
            Details of order &#35;
        </h4>

    </div>
    
    @include('/partials/flash')
    <div class="container invoice_display text-white">
        @if(session('userShippingDetails')) 
        <?php $userShippingDetails =  session()->get('userShippingDetails'); ?> 

        <h2 class="col">Please 
                        <a href="javascript:;" onclick="window.print()" class="btn btn-info">Print</a> the details or visit 
                        <a href="/orders" style="color: #f5cb5c;" title="click to see all orders">Your Orders</a> 
                        to see all orders placed.</h2> 
        <div class="row self-align-center d-flex">    
            <div class="col-md-6">      
                <h3 class="col" style="color: #f5cb5c;">ViDiA Laptops</h3>
                
                <div class="col-md-10">
                    <h3 class="text-white"><strong>Address&#58;</strong></h3> 
                    <p>7 Plus One SteveTops Avenue</p>
                    <p>Winnipeg</p>
                    <p>Manitoba</p>
                    <p>R4G T3H</p>
                    <p><strong>Email</strong>&#58; sevenplusone@stevetops.com </p>
                    <p><strong>Mobile Number</strong>&#58; +1 (204) 599 8236  </p>
                        
                </div>
            </div>
            <div class="col-md-6">      
                <h3 class="col" style="color: #f5cb5c;">Order &#35; &#45; {{$order->id}}</h3>
                <h3 class="col" style="color: #f5cb5c;">Authorization Code &#35; &#45; {{$ref_number->auth_code}}</h3>
                <div class="col-md-10">
                    <h3 class="text-white"><strong>Order details&#58;</strong></h3>                                       
                    <?php //dd($userShippingDetails)?>                
                    <p><strong>Name</strong>&#58; {{ $userShippingDetails['name'] }} </p>
                    <p><strong>Email</strong>&#58; {{ $userShippingDetails['email'] }} </p>
                    <p><strong>Mobile Number</strong>&#58; {{ $userShippingDetails['mobile_number'] }} </p>
                    <p><strong>Shipping Address</strong>&#58; {{ $userShippingDetails['street_name'] }},                    
                        {{ $userShippingDetails['city']}},{{ $userShippingDetails['province_name'] }}, 
                        {{ $userShippingDetails['country'] }}, 
                        {{ $userShippingDetails['postal_code'] }} 
                    </p>
                    <p> <strong>Shipping Date</strong>&#58; {{$order->shipped_date}} </p>  
                    <p> <strong>Card No.</strong>&#58; xxxx-xxxx-xxxx -{{$order->card_number}} </p>    
                    <?php session()->forget('userShippingDetails'); ?>           
                </div>
            </div>
        </div>
        
        <h3 class="purchased_items text-white"><strong>Purchased items:</strong></h3>
        <table class="table col text-white">
            <tbody>
                <tr>
                    <th class="justify-content-center" style="width:40%; font-size:1.3em;">Product</th>
                    <th class="justify-content-center" style="width:10%">Price</th>
                    <th class="justify-content-center" style="width:10%">Quantity</th>
                    <th class="justify-content-center" style="width:20%">Subtotal</th>
                </tr>
                @foreach($currentOrderDetails as $currentOrderDetail)
                <tr>
                    <td data-th="Product">
                        <div class="d-flex">                                
                            <div class="align-self-center">
                                <h4>{{ $currentOrderDetail->laptop->laptop_name }}</h4>
                                <p>{{ $currentOrderDetail->configuration }}</p>                                    
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">&#36;{{ $currentOrderDetail->unit_price }}</td>
                    <td data-th="Quantity">{{ $currentOrderDetail->quantity }}</td>
                    <td data-th="Subtotal">&#36;{{ $currentOrderDetail->line_price }}</td>                       
                </tr>
                @endforeach
                <tr>
                    <td>
                        
                    </td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-left">
                        <strong>Total (Before taxes)&#58; &#36;{{ $order->subtotal }}</strong>                            
                    </td>
                </tr>
                @if($order->gst != "0")  
                <tr>
                    <td> </td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-left">
                        <strong>GST&#58; &#36;{{ $order->gst }}</strong>                            
                    </td>
                </tr>
                @endif
                @if($order->hst != "0")
                <tr>
                    <td></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-left">
                        <strong>HST&#58; &#36;{{ $order->hst }}</strong>                            
                    </td>
                </tr>
                @endif
                @if($order->qst != "0")
                <tr>
                    <td></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-left">
                        <strong>QST&#58; &#36;{{ $order->qst }}</strong>                            
                    </td>
                </tr>  
                @endif
                @if($order->pst != "0")
                <tr>
                    <td></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-left">
                        <strong>PST&#58; &#36;{{ $order->pst }}</strong>                            
                    </td>
                </tr>     
                @endif                
                <tr>
                    <td>
                        
                    </td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-left">
                        <strong>Total (After Taxes)&#58; &#36;{{ $order->total }}</strong>                            
                    </td>
                </tr>
            </tbody>
        </table>
        
        <a href="/" class="btn btn-success">Go to Home</a>     
        @else
            <h2 class="col">
                Nothing is placed yet. 
                Please visit our <a href="/laptops">Laptops</a> 
                section for placing an order.
            </h2>
        @endif
    </div>

@stop()