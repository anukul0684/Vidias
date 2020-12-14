@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display" class="admin_background">
                    
    <h1 class="admin_h1"><em>Processor Edit</em></h1>

    <h2><a href="/admin/processors" class="btn btn-primary">Back</a></h2> 

</div>

<div class="container" style="margin-bottom:50px;">
    <div class="row justify-content-center">
        <div class="col border" style="color:#fff; font-size:16px;">

            <form class="form" 
                  action="/admin/processors/edit/{{$processor->id}}" 
                  method="post" 
                  enctype="multipart/form-data" 
                  novalidate>
                
                @csrf

                @method('PUT')
                <!-- Fields to edit a product -->
                <div class="form-group">

                    <label for="processor_name">Processor Name</label>
                    <input class="form-control" type="text" name="processor_name" 
                            value="{{ old('processor_name') ?? $processor->processor_name}}" id="processor_name"/>
                    @error('processor_name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="processor_price">Processor Price</label>
                    <input class="form-control" type="number" name="processor_price" 
                            value="{{ old('processor_price') ?? $processor->processor_price}}" id="processor_price"/>
                    @error('processor_price')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <fieldset class="form-group">
                    <legend style = "font-size: 16px;" >Active (Soft Delete)</legend>
                    <?php $active = $processor->active; ?>
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
                    <a href="/admin/processors" id="cancel" name="cancel" class="btn btn-danger">Cancel</a>
                </div>

            </form>              
            
        </div>
    </div>
</div>

@stop()