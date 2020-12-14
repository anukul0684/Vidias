@extends('layouts/vidia')

@section('content')

    <div id="head_display">
        
        <h1><em>Your Order Details</em></h1>
        <h4>
            Your Cart Items
        </h4>

        <h4>
            Please complete your payment details...
        </h4>

    </div>
    
    @include('/partials/flash')
    @if(session('userShippingDetails')) 
    <?php $userShippingDetails =  session()->get('userShippingDetails'); ?>   
    <div id="payment_display" class="container">
        @if(session('cart'))  
        <h1><em>Your Cart Details</em></h1>       
        
        <div id="payment_content" class="row">
            
            <table class="col table-dark table-striped">
                <tr>
                    <th class="justify-content-center" style="width:40%; font-size:1.3em;">Product</th>
                    <th class="justify-content-center" style="width:10%">Price</th>
                    <th class="justify-content-center" style="width:10%">Quantity</th>
                    <th class="justify-content-center" style="width:20%">Subtotal</th>                    
                </tr>
                <?php $total = 0;
                        $gst=0;
                        $pst=0;
                        $hst=0;
                        $qst=0;?>
                                      
                    @foreach(session('cart') as $id => $details)                        
                    <?php $total += $details['price'] * $details['quantity']?>                        
                    <tr>
                        <td data-th="Product">
                            <div id="image_laptop" class="d-flex">
                                <div id="image_display" class="mr-3">                                    
                                    <img src="/storage/images/{{ $details['photo'] }}" 
                                    alt="Laptop" 
                                    style="width:auto; height:133.5px;"/>
                                </div>
                                <div id="laptop_display" class="align-self-center">
                                    <h4>                                         
                                        <a class="showhide_details" 
                                            href="/laptops/<?=($details['brand'])?>/{{$details['id']}}" >
                                            {{ $details['name'] }}
                                        </a>
                                    </h4>
                                    <p>{{ $details['processor_name'] }}</p>
                                    <p>{{ $details['graphicscard_name'] }}</p>
                                    <p>{{ $details['ram_size'] }}</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">&#36;{{ $details['price'] }}</td>
                        <td data-th="Quantity">{{ $details['quantity'] }}</td>
                        <td data-th="Subtotal">&#36;{{ $details['price'] * $details['quantity'] }}</td>                            
                    </tr>                       
                    @endforeach
                <tr>
                    <td>
                        
                    </td>
                    <td colspan="2" class="hidden-xs"></td>                   
                    <td class="hidden-xs text-left">
                        <strong>Total (Before taxes)&#58; &#36;{{ $total }}</strong>                            
                    </td>
                </tr>
                @if($userShippingDetails['gst']!=0)   
                <?php $gst = round((($userShippingDetails['gst'] * $total)/100),2) ?>        
                <tr>
                    <td> </td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-left">
                        <strong>GST ({{ $userShippingDetails['gst']  }}&#37;)&#58; &#36;{{$gst}}</strong>                            
                    </td>
                </tr>
                @endif
                @if($userShippingDetails['hst']!=0) 
                <?php $hst = round((($userShippingDetails['hst'] * $total)/100),2) ?>
                <tr>
                    <td></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-left">
                        <strong>HST ({{ $userShippingDetails['hst']  }}&#37;)&#58; &#36;{{$hst}}</strong>                            
                    </td>
                </tr>
                @endif
                @if($userShippingDetails['qst']!=0) 
                <?php $qst = round((($userShippingDetails['qst'] * $total)/100),2) ?>
                <tr>
                    <td></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-left">
                        <strong>QST ({{ $userShippingDetails['qst']  }}&#37;)&#58; &#36;{{$qst}}</strong>                            
                    </td>
                </tr>  
                @endif
                @if($userShippingDetails['pst']!=0) 
                <?php $pst = round((($userShippingDetails['pst'] * $total)/100),2) ?>
                <tr>
                    <td></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-left">
                        <strong>PST ({{ $userShippingDetails['pst']  }}&#37;)&#58; &#36;{{$pst}}</strong>                            
                    </td>
                </tr>  
                @endif                   
                <tr>
                    <td>
                        
                    </td>
                    <td colspan="2" class="hidden-xs"></td>                   
                    <td class="hidden-xs text-left">
                        <strong>Total (After Taxes)&#58; &#36;{{ $total
                                                        + $gst  
                                                        + $hst 
                                                        + $qst 
                                                        + $pst   }}</strong>                            
                    </td>
                </tr>
            </table>
        </div>
        
        <div class="row payment_address mt-4 pt-3">        
            <div class="col-md-6 text-white">
                  
                                     
                    <?php //dd($userShippingDetails)?>
                    <h3 class="text-white">Your Details: -</h3>
                    <p><strong>Name</strong>: {{ $userShippingDetails['name'] }} </p>
                    <p><strong>Email</strong>: {{ $userShippingDetails['email'] }} </p>
                    <p><strong>Mobile Number</strong>: {{ $userShippingDetails['mobile_number'] }} </p>
                    <p><strong>Shipping Address</strong>: <br />
                        {{ $userShippingDetails['street_name'] }},<br /> 
                        {{ $userShippingDetails['city']}},<br />
                        {{ $userShippingDetails['province_name'] }}, <br />
                        {{ $userShippingDetails['country'] }}, <br />
                        {{ $userShippingDetails['postal_code'] }} <br />
                    </p>
                    <p> <strong>Shipping Date</strong>: <?php echo date('l jS F (Y-m-d)', strtotime('+7 days'));?> </p>
                    
                
            </div>
            <div class="col-md-6 text-white">
                <form action="/payment" method="post" class="col">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="card_type">Card Type</label>
                        <select class="form-control" name="card_type" id="card_type">
                            <option value="0">Choose Card Type</option>                                
                            <option value="visa">VISA</option>    
                            <option value="mastercard">Master Card</option>  
                            <option value="amex">American Express</option>                            
                        </select>
                        @error('card_type')
                            <div class="alert alert-danger">
                                Please select Card Type
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="card_number">Card Number</label>
                        <input class="form-control" type="text" 
                                name="card_number" id="card_number"
                                placeholder="Please enter your card number"/>
                        @error('card_number')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="card_expiry_month" style="padding: 0;">Card Expiry Month</label>
                            <select class="form-control" name="card_expiry_month" id="card_expiry_month">
                                <option value="0">SELECT</option>
                                <option value="01">Jan</option>                                
                                <option value="02">Feb</option> 
                                <option value="03">Mar</option> 
                                <option value="04">Apr</option> 
                                <option value="05">May</option> 
                                <option value="06">Jun</option> 
                                <option value="07">Jul</option>
                                <option value="08">Aug</option> 
                                <option value="09">Sep</option> 
                                <option value="10">Oct</option> 
                                <option value="11">Nov</option> 
                                <option value="12">Dec</option>                                                            
                            </select>
                            @error('card_expiry_month')
                                <div class="alert alert-danger">
                                    Please select Month
                                </div>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="card_expiry_year" style="padding: 0;">Card Expiry Year</label>            
                            <select class="form-control" name="card_expiry_year" id="card_expiry_year">
                                <option value="0">SELECT</option>
                                <option value="20">2020</option>                                
                                <option value="21">2021</option> 
                                <option value="22">2022</option> 
                                <option value="23">2023</option> 
                                <option value="24">2024</option> 
                                <option value="25">2025</option> 
                                <option value="26">2026</option>
                                <option value="27">2027</option> 
                                <option value="28">2028</option> 
                                <option value="29">2029</option> 
                                <option value="30">2030</option> 
                                <option value="31">2031</option>                                                            
                            </select>
                            @error('card_expiry_year')
                                <div class="alert alert-danger">
                                    Please select Year
                                </div>
                            @enderror
                        </div>
                    
                    </div>

                    <div class="form-group">
                        <label for="card_cvv">Card CVV</label>
                        <input class="form-control" type="text" 
                                name="card_cvv" id="card_cvv"
                                placeholder="Please enter CVV Number here"/>
                        @error('card_cvv')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <a href="{{ url('/checkout') }}" class="btn btn-warning">
                        <i class="fa fa-angle-left"></i> 
                        <i class="fa fa-angle-left"></i>&nbsp; Back to addresses</a>    
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="/" id="cancel" name="cancel" class="btn btn-info">Cancel</a>
                    </div>                                         
                </form>
            </div>
        </div>
        @else
            <h2 class="col text-white">
                Nothing is added to cart. Please visit our 
                <a href="/laptops">Laptops</a> section for placing an order.
            </h2>                
        @endif
    </div>
    @else
            <h2 class="col text-white">
                Nothing to Process. Please visit our <a href="/laptops">Laptops</a> section to proceed.
            </h2>                
    @endif
@stop()