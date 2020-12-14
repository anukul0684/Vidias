@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display" class="admin_background">
                    
    <h1 class="admin_h1"><em>RAM Edit</em></h1>

    <h2><a href="/admin/rams" class="btn btn-primary">Back</a></h2> 

</div>

<div class="container" style="margin-bottom:50px;">
    <div class="row justify-content-center">
        <div class="col border" style="color:#fff; font-size:16px;">

            <form class="form" 
                  action="/admin/rams/edit/{{$ram->id}}" 
                  method="post" 
                  enctype="multipart/form-data" 
                  novalidate>
                
                @csrf

                @method('PUT')
                <!-- Fields to edit a product -->
                <div class="form-group">

                    <label for="ram_size">RAM Size (add GB)</label>
                    <input class="form-control" type="text" name="ram_size" 
                            value="{{ old('ram_size') ?? $ram->ram_size}}" id="ram_size"/>
                    @error('ram_size')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="ram_price">RAM Price</label>
                    <input class="form-control" type="number" name="ram_price" 
                            value="{{ old('ram_price') ?? $ram->ram_price}}" id="ram_price"/>
                    @error('ram_price')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <fieldset class="form-group">
                    <legend style = "font-size: 16px;" >Active (Soft Delete)</legend>
                    <?php $active = $ram->active; ?>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="active" value="yes" 
                        {{old('active',$active)=='yes'?'checked':''}} > 
                        Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="active" value="no"
                            {{old('active',$active)=='no'?'checked':''}}>       
                        No
                        </label>
                    </div>
                </fieldset>

                <div class="form-group">
                    <button type="submit" class="btn btn-secondary">Update Record</button>
                    <a href="/admin/rams" id="cancel" name="cancel" class="btn btn-danger">Cancel</a>
                </div>

            </form>

                
            
        </div>
    </div>
</div>

@stop()