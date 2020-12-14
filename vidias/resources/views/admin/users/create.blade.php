@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display">
                    
    <h1><em>User - Create</em></h1>
    <h2><a href="/admin/users" class="btn btn-primary">Back</a></h2>                  
</div>

<div class="create_form_display">

	<form class="create_form form" action="/admin/users/create" method="post" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="form-group">

            <label for="first_name">First Name</label>
            <input class="form-control" type="text" name="first_name" value="{{ old('first_name') }}" id="first_name"/>
            @error('first_name')
                <div class="alert alert-danger">
                        {{ $message }}
                </div>
            @enderror

        </div>

        <div class="form-group">

            <label for="last_name">Last Name</label>
            <input class="form-control" type="text" name="last_name" value="{{ old('last_name') }}" id="last_name"/>
            @error('last_name')
                <div class="alert alert-danger">
                        {{ $message }}
                </div>
            @enderror

        </div>

        <div class="form-group">

            <label for="user_image">Image</label>
            <input class="form-control" type="text" name="user_image" value="{{ old('user_image') }}" id="user_image"/>
            @error('user_image')
                <div class="alert alert-danger">
                        {{ $message }}
                </div>
            @enderror

        </div>

        <div class="form-group">

            <label for="mobile_number">Mobile Number</label>
            <input class="form-control" type="text" name="mobile_number" value="{{ old('mobile_number') }}" id="mobile_number"/>
            @error('mobile_number')
                <div class="alert alert-danger">
                        {{ $message }}
                </div>
            @enderror

        </div>

        <div class="form-group">

            <label for="email">Email</label>
            <input class="form-control" type="text" name="email" value="{{ old('email') }}" id="email"/>
            @error('email')
                <div class="alert alert-danger">
                        {{ $message }}
                </div>
            @enderror

        </div>

        <div class="form-group">

            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" value="{{ old('password') }}" id="password"/>
            @error('password')
                <div class="alert alert-danger">
                        {{ $message }}
                </div>
            @enderror

        </div>

        <div class="form-group">

            <label for="is_admin">Admin</label>
            <select class="form-control" name="is_admin" id="is_admin">
              <option value="1">Yes</option>
              <option value="0">No</option>
            </select>
            @error('is_admin')
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

@stop()