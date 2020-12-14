@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display">
                    
    <h1><em>Brands - Edit</em></h1>
    <h2><a href="/admin/brands" class="btn btn-primary">Back</a></h2>                  
</div>

<div class="container" style="margin-bottom:50px;">

  <div class="row">
      <div class="col border" style="color:#fff; font-size:16px;"> 

	<form action="/admin/brands/edit/{{$brand->id}}" method="post" enctype="multipart/form-data" novalidate>
        @csrf

        @method('PUT')
        <div class="form-group">

            <input type="hidden" name="id" value="{{$brand->id}}">

            <label for="brand_name">Brand Name</label>
            <input id="brand_name" class="form-control" type="text" name="brand_name" value="{{ old('brand_name') ?? $brand->brand_name }}" />
            @error('brand_name')
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
            <button type="submit" class="btn btn-secondary">Update Record</button>
            <a href="/admin/brands" id="cancel" name="cancel" class="btn btn-danger">Cancel</a>
        </div>

      </form>

        </div>
    </div>
</div>

@stop()