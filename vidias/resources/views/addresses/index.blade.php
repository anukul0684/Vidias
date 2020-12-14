@extends('layouts/vidia')

@section('content')

<div id="head_display">
                    
    <h1><em>{{$title}}</em></h1>                 
</div>

<div id="address2">
    <div class="address_box">
        <a href="/address/create">Add Address</a>
    </div>
    @foreach($addresses as $address)
        <div class="address_box">
            <p>{{$address->street_name}}</p>
            <p>{{$address->city}}, {{$address->province->province_name}}, {{$address->postal_code}}</p>
            <p>{{$address->country}}</p>
            <p>Phone number: {{$address->user->mobile_number}}</p>
            <div>
                <a href="/address/edit/{{ $address->id }}">Edit</a>&nbsp;&nbsp;&nbsp;|
                <form action="/address/delete/{{ $address->id }}" method="post" enctype="multipart/form-data" novalidate> 
                    @csrf 
                    @method('PATCH') 
                    <input type="hidden" name="id" value="{{ $address->id }}" />
                    <button type="submit">Delete</button>
                </form>
            </div>
        </div>
    @endforeach

</div>

@stop()