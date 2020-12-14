@extends('layouts/vidia')

@section('content')

    <div id="head_display">
        
        <h1>Hello <em>{{$userDetails->name}} </em></h1>
        <h4>
            Your Profile Details
        </h4>

        <h4>
            Please complete your profile details...
        </h4>

    </div>
    
    @include('/partials/flash')
    
    <div id="profile_display">

        <h1><em>Your Profile</em></h1>
        
        
        <div id="profile_content">

            <form class="create_form form" action="/profile" 
                method="post" 
                enctype="multipart/form-data" novalidate>
                @csrf

                @method('PUT')
                <div class="form-group">

                    <input type="hidden" name="id" value="{{$userDetails->id}}">
                    @if($userDetails->user_image)
                        <img width="150" height="150" src="/storage/images/{{$userDetails->user_image}}" 
                                alt="No Profile Image uploaded Yet" />
                    @endif
                </div>
                <div class="form-group">
                    <label for="user_image">Profile Image</label>
                    <input type="file" name="user_image" id="user_image"/>
                    @error('user_image')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" 
                            name="name" id="name"
                            value="{{ old('name') ?? $userDetails->name }}" />
                    @error('name')
                        <div class="alert alert-danger">
                                {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">

                        <label for="first_name">First Name</label>
                        <input class="form-control" type="text" 
                                name="first_name" id="first_name"
                                value="{{ old('first_name') ?? $userDetails->first_name }}" />
                        @error('first_name')
                            <div class="alert alert-danger">
                                    {{ $message }}
                            </div>
                        @enderror

                    </div>                    

                    <div class="form-group col-md-6">

                        <label for="last_name">Last Name</label>
                        <input class="form-control" type="text" 
                                name="last_name" id="last_name"
                                value="{{ old('last_name') ?? $userDetails->last_name }}" />
                        @error('last_name')
                            <div class="alert alert-danger">
                                    {{ $message }}
                            </div>
                        @enderror

                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-6">

                        <label for="email">Email</label>
                        <input class="form-control" type="text" 
                                name="email" id="email"
                                value="{{ old('email') ?? $userDetails->email }}" />
                        @error('email')
                            <div class="alert alert-danger">
                                    {{ $message }}
                            </div>
                        @enderror
                    </div>                    

                    <div class="form-group col-md-6">
                        <label for="mobile_number">Mobile Number</label>
                        <input class="form-control" type="text" 
                                name="mobile_number" id="mobile_number"
                                value="{{ old('mobile_number') ?? $userDetails->mobile_number }}" />
                        @error('mobile_number')
                            <div class="alert alert-danger">
                                    {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn">Save</button>
                    <a href="/" id="cancel" name="cancel" class="btn">Cancel</a>
                </div>

            </form>

            <div class="row justify-content-center my-4 py-4">
                
                <div class="order_visit col-md-3">  
                    <a href="/address" class="btn btn-block address_btn">
                        <div class="add_pic">
                            <img src="/storage/images/address.png" alt="Your address">
                        </div>
                        Address(es)
                        <p>Edit addresses for orders</p>
                    </a>
                </div>
                <div class="order_visit col-md-3">
                    <a href="/orders" class="btn btn-block order_btn">
                        <div class="ord_pic">
                            <img src="/storage/images/orders5.png" alt="Your orders">
                        </div>
                        Order(s)
                        <p>Track your orders</p>
                    </a>

                </div>
            </div>
        </div>

    </div>

@stop()