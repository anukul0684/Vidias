@extends('layouts/vidia')

@section('content')

<div id="head_display">
                    
    <h1><em>Add a New Address</em></h1>
    <h2><a href="/address" class="btn btn-primary">Back</a></h2>                  
</div>

<div class="container" style="margin-bottom:50px;">

    <div class="row">
        <div class="col border" style="color:#fff; font-size:16px;"> 
        	<form action="/address/create" method="post" enctype="multipart/form-data" novalidate>
                @csrf
                <input type="hidden" name="country" id="country_in" value="Please enter country">
                <input type="hidden" name="province_name" id="province_name_in" value="Please enter province">
                <input type="hidden" name="province_id" id="province_id_out" value="0">
                <input type="hidden" name="user_id" value="{{\Auth::user()->id}}"/>
                <div class="form-group">

                    <label for="street_name">Street</label>
                    <input class="form-control" type="text" name="street_name" value="{{ old('street_name') }}" id="street_name"/>
                    @error('street_name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                
                <div class="form-group">

                    <label for="city">City</label>
                    <input class="form-control" type="text" name="city" value="{{ old('city') }}" id="city"/>
                    @error('city')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <input class="form-check-input" type="radio" name="choose" id="choose1" onclick="showAddresses();" checked>
                <label class="form-check-label" for="choose1">
                    In Canada   
                </label>

                <input class="form-check-input" type="radio" name="choose" id="choose2" onclick="showAddAddress();" 
                @if((old('province_name')||old('country'))&& (old('province_name')!="Please enter province")) 
                    checked="true"
                @elseif(old('province->id'))
                    checked="false"
                @endif 
                >
                <label class="form-check-label" for="choose2">
                    Outside of Canada  
                </label>
            
                <div class="form-group" id="province_id_in_div"
                @if(old('province_id')) 
                    style="display:block;"
                @elseif((old('province_name')||old('country'))&& (old('province_name')!="Please enter province")) 
                    style="display:none;"
                @endif 
                >
                    <label for="province_id_in">Province</label>                        
                    <select class="form-control" name="province_id" id="province_id_in">
                        <option>Choose Province</option>
                        <?php foreach($provinces as $province) : ?>                                        
                            <option value="{{$province->id}}" {{ old('province_id') == "$province->id" ? 'selected' : '' }}>
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

                <div class="form-group" id="province_name_out_div"
                @if(old('province_id')) 
                    style="display:none;"
                @elseif((old('province_name')||old('country'))&& (old('province_name')!="Please enter province")) 
                    style="display:block;"
                @<?php else: ?>
                    style="display:none;"
                @endif
                >
                    <label for="province_name_out">Province</label>
                    <input class="form-control" type="text" name="province_name" value="{{ old('province_name') }}" id="province_name_out" disabled="disabled" />
                    @error('province_name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group" id="country_out_div"
                @if(old('province_id')) 
                    style="display:none;"
                @elseif((old('province_name')||old('country'))&& (old('province_name')!="Please enter province")) 
                    style="display:block;"
                @<?php else: ?>
                    style="display:none;"
                @endif
                >
                    <label for="country_out">Country</label>
                    <input class="form-control" type="text" name="country" value="{{ old('country') }}" id="country_out" disabled="disabled"/>
                    @error('country')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="postal_code">Postal Code</label>
                    <input class="form-control" type="text" name="postal_code" value="{{ old('postal_code') }}" id="postal_code"/>
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
        
        if(document.getElementById("province_name_out_div").style.display == "none" ||document.getElementById("country_out_div").style.display == "none"  ) {

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