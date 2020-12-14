@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display">
                    
    <h1><em>Addresses - Create</em></h1> 
    <h2><a href="/admin/addresses" class="btn btn-primary">Back</a></h2>                  
</div>

<div class="container" style="margin-bottom:50px;">

  <div class="row">
      <div class="col border" style="color:#fff; font-size:16px;"> 



	<form action="/admin/addresses/create" method="post" enctype="multipart/form-data" novalidate>
        @csrf
        

        <div class="form-group">

            <label for="user_id">Choose User</label>
            <select class="form-control" name="user_id" id="user_id">
              @foreach($users as $user)
              <option value="{{$user->id}}">{{$user->first_name}} {{$user->last_name}}</option>
              @endforeach
            </select>
            @error('user_id')
                <div class="alert alert-danger">
                        {{ $message }}
                </div>
            @enderror

        </div>

        <div class="form-group">

            <label for="street_name">Street</label>
            <textarea class="form-control" name="street_name" id="street_name"> </textarea>
            @error('street_name')
                <div class="alert alert-danger">
                        {{ $message }}
                </div>
            @enderror

        </div>

        <div class="form-group">

            <label for="city">City</label>
            <textarea class="form-control" name="city" id="city"> </textarea>
            @error('city')
                <div class="alert alert-danger">
                        {{ $message }}
                </div>
            @enderror

        </div>

        <div class="form-group">

            <label for="province_id">Choose Province</label>
            <select class="form-control" name="province_id" id="province_id">
              @foreach($provinces as $province)
              <option value="{{$province->id}}">{{$province->province_name}}</option>
              @endforeach
            </select>
            @error('province_id')
                <div class="alert alert-danger">
                        {{ $message }}
                </div>
            @enderror

        </div>

        <div class="form-group">

            <label for="country">Country</label>
            <textarea class="form-control" name="country" id="country"> </textarea>
            @error('country')
                <div class="alert alert-danger">
                        {{ $message }}
                </div>
            @enderror

        </div>

        <div class="form-group">

            <label for="postal_code">Postal Code</label>
            <textarea class="form-control" name="postal_code" id="postal_code"> </textarea>
            @error('postal_code')
                <div class="alert alert-danger">
                        {{ $message }}
                </div>
            @enderror

        </div>

        <div class="form-group">

            <label for="active">Active</label>
            <select class="form-control" name="active" id="active">
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select>
            @error('active')
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

@stop()