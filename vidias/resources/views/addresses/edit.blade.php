@extends('layouts/vidia')

@section('content')

<div id="head_display">
                    
    <h1><em>Edit this Address</em></h1>
    <h2><a href="/address" class="btn btn-primary">Back</a></h2>                  
</div>

<div class="container" style="margin-bottom:50px;">

    <div class="row">
        <div class="col border" style="color:#fff; font-size:16px;"> 
        	<form action="/address/edit/{{$address->id}}" method="post" enctype="multipart/form-data" novalidate>
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ old('id', $address->id) }}" />
                <input type="hidden" name="user_id" value="{{\Auth::user()->id}}"/>
                <div class="form-group">

                    <label for="street_name">Street</label>
                    <input class="form-control" type="text" name="street_name" value="{{ old('street_name') ?? $address->street_name }}" id="street_name"/>
                    @error('street_name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                
                <div class="form-group">

                    <label for="city">City</label>
                    <input class="form-control" type="text" name="city" value="{{ old('city') ?? $address->city }}" id="city"/>
                    @error('city')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                
                <input class="form-check-input" type="radio" name="choose" id="choose1" onclick="showAddresses();">
                <label class="form-check-label" for="choose1">
                    In Canada   
                </label> 
                
                <input class="form-check-input" type="radio" name="choose" id="choose2" onclick="showAddAddress();">
                <label class="form-check-label" for="choose2">
                    Outside of Canada  
                </label>

                <input type="hidden" name="country" id="country_in" value="Canada">
                <input type="hidden" name="province_name" id="province_name_in" value="{{$address->province->province_name}}">
                <div class="form-group" id="province_id_in_div">
                    <label for="province_id_in">Province</label>                        
                    <select class="form-control" name="province_id" id="province_id_in">
                        <option>Choose Province</option>
                        <?php foreach($provinces as $province) : ?>                                        
                            <option value="{{$province->id}}" {{ $address->province_id == "$province->id" ? 'selected' : '' }}>
                                {{$province->province_name}}
                            </option>
                        <?php endforeach; ?>
                    </select>
                    @error('province_id')
                        <div class="alert alert-danger">
                            {{ "Please choose one of these provinces" }}
                        </div>
                    @enderror
                </div>

                <input type="hidden" name="province_id" id="province_id_out" value="{{$address->province_id}}">
                <div class="form-group" id="province_name_out_div">
                    <label for="province_name_out">Province</label>
                    <input class="form-control" type="text" name="province_name" 

                    @if(old('province_name')) 
                        value="{{ old('province_name')}}"
                    @elseif(($address->province->province_name)&& ($out_side==1) )
                        value=" {{$address->province->province_name}}"
                    <?php else: ?>
                        value=""
                    @endif

                    id="province_name_out"/>
                    @error('province_name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-group" id="country_out_div">
                    <label for="country_out">Country</label>
                    <input class="form-control" type="text" name="country" 
                    @if((null!==old('country'))&& old('country')!="Canada") 
                        value="{{ old('country')}}"
                    @elseif(($address->country)!=="Canada")
                        value="{{ $address->country}}"
                    @endif 
                    
                    id="country_out"/>
                    @error('country')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                   
                </div>
                
                <div class="form-group">
                    <label for="postal_code">Postal Code</label>
                    <input class="form-control" type="text" name="postal_code" value="{{ old('postal_code') ?? $address->postal_code }}" id="postal_code"/>
                    @error('postal_code')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
            </form>

        </div>
    </div>
</div>
<script>
    
    window.onload = function(){
        if(<?=$out_side ?> == 1){
            document.getElementById("choose2").checked = true;
            document.getElementById("choose1").checked = false;
            showAddAddress();
        }
        else{
            showAddresses();
            document.getElementById("choose1").checked = true;
            document.getElementById("choose2").checked = false;
        }
    };

    function showAddresses()
    {
        if(document.getElementById("province_id_in_div").style.display == "none" ) {
            document.getElementById("province_id_in_div").style.display = "block"; 
        }
       
        document.getElementById("province_name_out_div").style.display = "none";
        document.getElementById("country_out_div").style.display = "none";

        document.getElementById("country_out").disabled = "disabled";
        document.getElementById("province_name_out").disabled = "disabled";
        document.getElementById("province_id_out").disabled = "disabled";

        document.getElementById("country_in").disabled = false;
        document.getElementById("province_name_in").disabled = false;
        document.getElementById("province_id_in").disabled = false;
    }

    function showAddAddress()
    {   
        document.getElementById("province_id_in_div").style.display = "none"; 
        
        //document.getElementsByName('order_shipping_address').checked = false;
        var ele = document.getElementsByName("province_id");
        for(var i=0;i<ele.length;i++)
        {    
            ele[i].checked = false;
        }
        
        if(document.getElementById("province_name_out_div").style.display == "none" ||document.getElementById("country_out_div").style.display == "none" ) {
            document.getElementById("province_name_out_div").style.display = "block";
            document.getElementById("country_out_div").style.display = "block";

            document.getElementById("country_out").disabled = false;
            document.getElementById("province_name_out").disabled = false;
            document.getElementById("province_id_out").disabled = false;

            document.getElementById("country_in").disabled = "disabled";
            document.getElementById("province_name_in").disabled = "disabled";
            document.getElementById("province_id_in").disabled = "disabled";
        }
    }
</script>
@stop()