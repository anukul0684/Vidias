@extends('layouts/vidia')

@section('content')

    <div id="head_display">
        
        <h1><em>Your Order Details</em></h1>
        <h4>
            Your Cart Items
        </h4>

        <h4>
            Please complete your checkout details...
        </h4>

    </div>
    
    @include('/partials/flash')
    <?php //dump($errors);?>
    <div id="checkout_display" class="container">

        <h1><em>Your Cart Details</em></h1>
        
        
        <div id="checkout_content" class="row">
            
            <table class="col table-dark table-striped">
                <tr>
                    <th class="justify-content-center" style="width:50%; font-size:1.3em;">Your Products</th>
                    <th class="justify-content-center" style="width:10%">Price</th>
                    <th class="justify-content-center" style="width:10%">Quantity</th>
                    <th class="justify-content-center" style="width:10%">Subtotal</th>                    
                </tr>
                    <?php $total = 0;?>
                    @if(session('cart'))                        
                    @foreach(session('cart') as $id => $details)                        
                    <?php $total += $details['price'] * $details['quantity']?>                        
                    <tr>
                        <td data-th="Product">
                            <div id="image_laptop" class="d-flex">
                                <div id="image_display" class="mr-3">                                    
                                    <img src="/storage/images/{{ $details['photo'] }}" alt="Laptop" />
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
                @endif                    
                <tr>
                    <td>
                        
                    </td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-left">
                        <strong>Total&#58; &#36;{{ $total }}</strong>                            
                    </td>
                </tr>
            </table>
            <div class="container group mt-4 pt-3">               
                <div class="form-check row d-flex mb-4">
                    <div class="col-md-7">                                                                 
                        <input class="form-check-input" type="radio" 
                            name="choose" id="choose11" onclick="showAddresses();">
                        <label class="form-check-label pl-4" for="choose11">
                            Choose from Existing Addresses   
                        </label>             
                               
                        <div class="group row" id="multi_addresses" style="display:none; box-sizing:border-box;">  
                            <form action="/checkout/payment" method="post" class="col-md-12">
                            @csrf
                            @method('PATCH')   
                            <div class="col">                        
                                @foreach($addresses as $key => $address)                        
                                    <div class="form-check-inline col-sm-3" >                                            
                                        <input class="form-check-input col-sm-1" type="radio" 
                                            name="order_shipping_address" 
                                            id="order_shipping_address{{'_' . $address->id}}" 
                                            value="{{$address->id}}">
                                        <label class="form-check-label col-sm-11" 
                                            for="order_shipping_address{{'_' . $address->id}}">
                                            {{$address->street_name}},<br/> {{$address->city}},<br/>
                                            {{ $address->province->province_name }},{{$address->postal_code}}<br/>
                                            {{$address->country}}<br/>                                        
                                        </label>                                                                                          
                                    </div>
                                @endforeach  
                                                                   
                            </div>
                            <div class="form-group">                    
                                <input type="hidden" name="userid" value="{{$userDetails->id}}"/>   
                                <a href="{{ url('/cart') }}" class="btn btn-warning">
                                <i class="fa fa-angle-left"></i>
                                <i class="fa fa-angle-left"></i>&nbsp; Back to Cart</a>
                                <button class ="btn btn-info"
                                        data-id="{{ $userDetails->id }}">
                                    Proceed to Payment &nbsp;
                                    <i class="fa fa-angle-right"></i>
                                    <i class="fa fa-angle-right"></i>
                                </button> 
                            </div>
                            </form>
                        </div>  
                        @error('order_shipping_address')
                            <div class="alert alert-danger text-danger">
                                Please select an address to proceed
                            </div>
                        @enderror                      
                    </div>
                    <div class="col-md-5">                         
                        <input class="form-check-input" type="radio" 
                            name="choose" id="choose22" onclick="showAddAddress();">
                        <label class="form-check-label" for="choose22" style="padding-left:15px;">
                            Add New Address  
                        </label>                                                
                        <div class="row" id="single_address">
                            <form action="/checkout/payment" method="post" class="col-md-12">
                            @csrf
                            @method('POST') 
                                <div class="form-group">
                                    <label for="street_name">Street Name</label>
                                    <input class="form-control" type="text" 
                                            name="street_name" 
                                            placeholder="Street Name" id="street_name"/>
                                    @error('street_name')
                                        <div class="alert alert-danger">
                                                {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input class="form-control" type="text" 
                                            name="city" 
                                            placeholder="City" id="city"/>
                                    @error('city')
                                        <div class="alert alert-danger">
                                                {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-row text-secondary justify-content-center">
                                    <div class="form-group col-md-5">                                        
                                        <input class="form-check-input" type="radio" 
                                            name="chooseprovince" id="choose3" 
                                            onclick="chooseProvince();"
                                            checked>
                                        <label class="form-check-label" for="choose3">
                                            In Canada   
                                        </label> 
                                    </div>
                                    <div class="form-group col-md-5">
                                        <input class="form-check-input" type="radio" 
                                            name="chooseprovince" id="choose4" onclick="addProvince();">
                                        <label class="form-check-label" for="choose4">
                                            Outside Canada   
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group" id="selectProvince">
                                    <label for="province_id">Province</label>                        
                                    <select class="form-control" name="province_id" id="province_id">
                                        <option value="0">Choose Province</option>
                                        <?php foreach($provinces as $province) : ?>                                        
                                            <option value="{{$province->id}}">
                                                    {{$province->province_name}}
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    @error('province_id')
                                        <div class="alert alert-danger">
                                            Please select Province
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group" id="addProvince" style="display:none;">
                                    <label for="newprovince">Province/State</label>                        
                                    <input class="form-control" type="text" 
                                            name="newprovince" 
                                            placeholder="Province Name/State" id="newprovince"/>
                                    @error('newprovince')
                                        <div class="alert alert-danger">
                                            Please enter Province/State Name
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="postal_code">Postal Code</label>
                                    <input class="form-control" type="text" 
                                            name="postal_code" 
                                            placeholder="Postal Code" id="postal_code"/>
                                    @error('postal_code')
                                        <div class="alert alert-danger">
                                                {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input class="form-control" type="text" 
                                            name="country" id="country"
                                            placeholder="Country" value="Canada" disabled/>
                                    @error('country')
                                        <div class="alert alert-danger">
                                                {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">                    
                                    <input type="hidden" name="user_id" value="{{$userDetails->id}}"/>   
                                    <a href="{{ url('/cart') }}" class="btn btn-warning">
                                    <i class="fa fa-angle-left"></i>
                                    <i class="fa fa-angle-left"></i>&nbsp; Back to Cart</a>
                                    <button class ="btn btn-info"
                                            data-id="{{ $userDetails->id }}">
                                        Proceed to Payment &nbsp;<i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i>
                                    </button> 
                                </div>
                            </form>
                        </div>                        
                    </div>
                </div>               
            </div>                     
        </div>
    </div>
    <script>
        function showAddresses()
        {
            if(document.getElementById("multi_addresses").style.display == "none" ) {
                document.getElementById("multi_addresses").style.display = "block"; 
            }
           
            document.getElementById("single_address").style.display = "none"; 
            
        }

        function showAddAddress()
        {
            
            document.getElementById("multi_addresses").style.display = "none"; 

            //document.getElementsByName('order_shipping_address').checked = false;
            var ele = document.getElementsByName("order_shipping_address");
            for(var i=0;i<ele.length;i++)
            {    
                ele[i].checked = false;
            }
            
            if(document.getElementById("single_address").style.display == "none" ) {
                document.getElementById("single_address").style.display = "block"; 
            }
        }

        function chooseProvince()
        {
            if(document.getElementById('selectProvince').style.display == "none") {
                document.getElementById('selectProvince').style.display = "block";
            }

            document.getElementById('addProvince').style.display = "none";

            document.getElementById('country').value = "Canada";
            document.getElementById('country').disabled = true;
        }

        function addProvince()
        {
            if(document.getElementById('addProvince').style.display == "none") {
                document.getElementById('addProvince').style.display = "block";
            }

            document.getElementById('selectProvince').style.display = "none";

            document.getElementById('country').value = "";
            document.getElementById('country').disabled = false;
        }
    </script>
@stop()