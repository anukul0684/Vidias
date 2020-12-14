@extends('layouts/vidia')

@section('content')

<div id="head_display" class="about_bg">
        
    <h1><em>ViDiA</em></h1>
    <h4>
        Items in your cart   
    </h4>                  
</div>    
@include('/partials/flash')
<div id="cart_display" class="row">
    
    <table id = "cart" class="col table-dark table-striped py-4 my-4 w-auto">
        <tr id="head_row" class="col-lg-12">
            <th class="justify-content-center" style="width:50%; font-size: 1.3em;">Your Products</th>
            <th class="justify-content-center" style="width:10%">Price</th>
            <th class="justify-content-center" style="width:10%">Quantity</th>
            <th class="justify-content-center" style="width:10%">Subtotal</th>
        </tr>
        <?php $total = 0;
                $counter = 1; ?>
            @if(session('cart'))                
                @foreach(session('cart') as $id => $details)
                <?php //dd($id); ?>
                <?php $total += $details['price'] * $details['quantity']?>
                
                <tr id="first_row">
                    <td data-th="Product" class="py-3">
                        <div id="image_laptop">
                            <div id="image_display" class="mr-3">                                    
                                <img src="/storage/images/{{ $details['photo'] }}" alt="Laptop"/>
                            </div>
                            <div id="laptop_display" class="justify-content-center">
                                <h4>                                         
                                    <a class="showhide_details" 
                                        href="/laptops/<?=($details['brand'])?>/{{$details['id']}}" >
                                        {{ $details['name'] }}
                                    </a>
                                </h4>
                                <p>{{ $details['processor_name'] }}</p>
                                <p>{{ $details['graphicscard_name'] }}</p>
                                <p>{{ $details['ram_size'] }}</p>
                            
                                <div class="update_delete_btn">
                                    <form class="form form-inline" 
                                        action="update-cart/{{ $details['id'] }}"
                                        method="post" novalidate>
                                        @csrf
                                        @method('PATCH') 
                                        <input type="hidden" id="get_qty{{'_'.$counter}}" name="get_qty" 
                                                value="{{old('quantity',$details['quantity'])}}">  
                                        <input type="hidden" id="cart_id" name="cart_id" 
                                                value="{{$id}}">                         
                                        <button class ="btn btn-info btn-sm update-cart"
                                                data-id="{{ $details['id'] }}">
                                            <i class="fa fa-refresh"><span>Update order</span></i>
                                        </button>   
                                    </form>    
                                    <form class="form form-inline"
                                            action="remove-from-cart/{{ $details['id'] }}" 
                                            method="post" novalidate>
                                        @csrf
                                        @method('DELETE')        
                                        <input type="hidden" id="cartid" name="cartid" 
                                                value="{{$id}}">               
                                        <button class="btn btn-danger btn-sm remove-from-cart" 
                                                data-id="{{ $details['id'] }}">
                                            <i class="fa fa-trash-o"><span>Delete order</span></i>
                                        </button>    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price" class="py-3">&#36;{{ $details['price'] }}</td>
                    <td data-th="Quantity" class="py-3">
                        <input type="number" value="{{ $details['quantity'] }}" 
                                id="quant{{'_'.$counter}}" class="form-control quantity" 
                                onchange="return updatedQuantity();" />

                    </td>                        
                    <td data-th="Subtotal" class="py-3">                            
                        &#36;{{ $details['price'] * $details['quantity'] }}
                    </td>                

                </tr>                
                <?php $counter++; ?>
                @endforeach
            @else
                <h2 class="col-md-12 text-white">Your cart is empty. Please visit our <a style="color: #f5cb5c;" href="/laptops">Laptops</a> section for placing an order.</h2>   
            @endif
            <tr class="visible-xs">
                <td colspan="3" class="hidden-xs"></td>
                <td class="text-left pb-2"><strong>Total&#58; &#36;{{ $total }}</strong></td>
            </tr>
            <tr>
                <td class="py-2">
                    <a href="{{ url('/laptops') }}" class="btn btn-warning">
                    <i class="fa fa-angle-left"></i> Continue Shopping</a>
                </td>
                <td colspan="2" class="hidden-xs py-2"></td>
                <td class="hidden-xs text-left py-2">
                    <!-- <strong>Total ${{ $total }}</strong> -->
                    <a href="{{ url('/checkout') }}" class="btn btn-info">
                    Checkout Cart<i class="fa fa-angle-right"></i> </a>
                </td>
            </tr>
    </table>
    
</div>
<script>   
    
    var get_count = document.querySelectorAll('a.showhide_details');
    function updatedQuantity()
    {
        for(var i=1;i<(get_count.length + 1);i++)
        {
            var get_quant='quant' + "_" + i;
            quantity = document.getElementById(get_quant).value;
            var set_quant='get_qty' + "_" + i;

            document.getElementById(set_quant).value = quantity;               
        }
    }        
</script>
@stop()