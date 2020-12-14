@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display">
                    
    <h1><em>Images - Create</em></h1>
    <p>
        You can add New Images here.    
    </p>  
    <h2><a href="/admin/images" class="btn btn-primary">Back</a></h2>                  
</div>

<div class="create_form_display">
    <form class="create_form form" action="/admin/images/create" method="post" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="form-group">
            <label for="laptop_id">Select Laptop</label>
            <select class="form-control" name="laptop_id" id="laptop_id">
                <option value="0">Select a Laptop</option>
                <?php foreach($images as $image) : ?>
                    <option value="{{$image->laptop_id}}">{{ $image->laptop->laptop_name }}</option>
                <?php endforeach; ?>
            </select>
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