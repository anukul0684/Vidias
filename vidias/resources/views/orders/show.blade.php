@extends('layouts/vidia')

@section('content')

    <div id="head_display">
        
        <h1><em>ViDiA</em></h1>
        <h4>
            Your Orders Details...
        </h4>      

    </div>
    
    @include('/partials/flash')
    <div class="container text-white">
        <div class="row">
            @if(count($order_details) > 0 )            
            <table class="table col-md-12 text-white">
                <tbody>
                    <tr class="col-md-12">
                        <th class="justify-content-center" style="width:40%; font-size:1.3em;">Product</th>
                        <th class="justify-content-center" style="width:10%">Price</th>
                        <th class="justify-content-center" style="width:10%">Quantity</th>
                        <th class="justify-content-center" style="width:20%">Subtotal</th>
                    </tr>
                    @foreach($order_details as $order_detail)
                    <tr class="col-md-12">
                        <td data-th="Product">
                            <div class="d-flex">                                
                                <div class="align-self-center">
                                    <h4>{{ $order_detail->laptop->laptop_name }}</h4>
                                    <p>{{ $order_detail->configuration }}</p>                                    
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">&#36;{{ $order_detail->unit_price }}</td>
                        <td data-th="Quantity">{{ $order_detail->quantity }}</td>
                        <td data-th="Subtotal">&#36;{{ $order_detail->line_price }}</td>                       
                    </tr>
                    @endforeach
                    <tr class="col-md-12">
                        <td>
                            
                        </td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="hidden-xs text-left">
                            <strong>Total (Before taxes)&#58; &#36;{{ $order->subtotal }}</strong>                            
                        </td>
                    </tr>
                    @if($order->gst != "0")  
                    <tr class="col-md-12">
                        <td> </td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="hidden-xs text-left">
                            <strong>GST&#58; &#36;{{ $order->gst }}</strong>                            
                        </td>
                    </tr>
                    @endif
                    @if($order->hst != "0")
                    <tr class="col-md-12">
                        <td></td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="hidden-xs text-left">
                            <strong>HST&#58; &#36;{{ $order->hst }}</strong>                            
                        </td>
                    </tr>
                    @endif
                    @if($order->qst != "0")
                    <tr class="col-md-12">
                        <td></td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="hidden-xs text-left">
                            <strong>QST&#58; &#36;{{ $order->qst }}</strong>                            
                        </td>
                    </tr>  
                    @endif
                    @if($order->pst != "0")
                    <tr class="col-md-12">
                        <td></td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="hidden-xs text-left">
                            <strong>PST&#58; &#36;{{ $order->pst }}</strong>                            
                        </td>
                    </tr>     
                    @endif                
                    <tr class="col-md-12">
                        <td>
                            
                        </td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="hidden-xs text-left">
                            <strong>Total (After Taxes)&#58; &#36;{{ $order->total }}</strong>                            
                        </td>
                    </tr>
                </tbody>
            </table>    
            <p class="col d-flex justify-content-center">
                <a href="/orders" class="btn">Back to Orders</a>
            </p>     
            @else
                <h2 class="col text-white">
                    Order details unavailable. Please visit our <a href="/laptops">Laptops</a> section to proceed.
                </h2>   
            @endif
        </div>
    </div>


@stop()