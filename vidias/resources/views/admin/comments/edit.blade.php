@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display">
                    
    <h1><em>Comments - Edit</em></h1>
    <h2><a href="/admin/comments" class="btn btn-primary">Back</a></h2>                  
</div>

<div class="container" style="margin-bottom:50px;">

  <div class="row">
      <div class="col border" style="color:#fff; font-size:16px;"> 

	<form action="/admin/comments/edit/{{$comment->id}}" method="post" enctype="multipart/form-data" novalidate>
        @csrf

        @method('PUT')
        <div class="form-group">

            <input type="hidden" name="id" value="{{$comment->id}}">

            <label for="user_name">User Name</label>
            <input class="form-control" type="text" name="user_id" value="{{ $comment->user->first_name}} {{ $comment->user->last_name}}" disabled id="user_name"/>

        </div>

        <div class="form-group">

            <label for="brand_name">Laptop Name</label>
            <input class="form-control" type="text" name="laptop_id" value="{{ $comment->laptop->laptop_name}}" disabled id="brand_name"/>

        </div>

        <!-- <input type="hidden" name="laptop_id" value="{{$comment->laptop_id}}"> -->

        <div class="form-group">

            <label for="comment_text">Comment</label>
            <textarea class="form-control" name="comment_text" id="comment_text">{{ old('comment_text') ?? $comment->comment_text }}</textarea>
            @error('comment_text')
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