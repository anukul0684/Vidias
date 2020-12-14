@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display">
                    
    <h1><em>Images - Edit</em></h1>
    <p>
        You can Edit existing Images here and select laptop name that you would like to associate with the image.    
    </p>  
    <h2><a href="/admin/images" class="btn btn-primary">Back</a></h2>                  
</div>

<div class="create_form_display">
    <form class="create_form form" action="/admin/images/edit/{{$image->id}}" method="post" enctype="multipart/form-data" novalidate>
        @csrf

        @method('PUT')
        <div class="form-group">
            <input type="hidden" name="id" value="{{ $image->id }}">

            <label for="laptop_id">Laptop Name</label>
            <!-- Hidden field to match laptop id in table -->
            <input class="form-control" type="text" name="laptop_id" id="laptop_id" value="{{ $image->laptop_id }}" hidden>

            <input class="form-control" type="text" name="laptop_name" id="laptop_name" value="{{ $image->laptop->laptop_name }}" disabled>

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
            <div id="edit_admin_image">
                <img width="300" height="200" src="/storage/images/{{$image->image_name}}" alt="{{$image->image_name}}" />
                <span>{{$image->image_name}}</span>
            </div>
        </div>

        <div class="form-group">
          <div>
            <label class="image_upload" for="image_name">Upload Image</label>
            <input type="file" name="image_name"  id="image_name">
          </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@stop()