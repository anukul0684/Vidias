@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display">
                    
    <h1><em>Comments - Create</em></h1> 
    <h2><a href="/admin/comments" class="btn btn-primary">Back</a></h2>                  
</div>

<div class="container" style="margin-bottom:50px;">

  <div class="row">
      <div class="col border" style="color:#fff; font-size:16px;"> 



	<form action="/admin/comments/create" method="post" enctype="multipart/form-data" novalidate>
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

            <label for="laptop_id">Choose Laptop</label>
            <select class="form-control" name="laptop_id" id="laptop_id">
              @foreach($laptops as $laptop)
              <option value="{{$laptop->id}}">{{$laptop->laptop_name}}</option>
              @endforeach
            </select>
            @error('laptop_id')
                <div class="alert alert-danger">
                        {{ $message }}
                </div>
            @enderror

        </div>

        <div class="form-group">

            <label for="comment_text">Comment</label>
            <textarea class="form-control" name="comment_text" id="comment_text"> </textarea>
            @error('user_id')
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