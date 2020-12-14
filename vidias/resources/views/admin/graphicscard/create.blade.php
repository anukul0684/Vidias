@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display" class="admin_background">
    <h1 class="admin_h1"><em>Create Graphicscard</em></h1>
    <h2><a href="/admin/graphicscards/" class="btn btn-primary">Graphicscards</a></h2>                  
</div>


<!-- Necesssary div with the container class that implements bootstrap -->
<div class="container" style="margin-bottom:50px;">

  <div class="row">
      <div class="col border" style="color:#fff; font-size:16px;"> 
          <!-- Main form for project editing -->
          <form name="laptop_add" 
                id="laptop_add" 
                action="/admin/graphicscards/create"
                method="post"
                role="form"
                autocomplete="on"
                novalidate >
            @csrf    
                
            <!-- all of the required fiels to edit project -->
            <div class="form-group">
              <label for="graphicscard_name">Graphicscard Name</label>
              <input type="text" class="form-control" name="graphicscard_name" id="graphicscard_name" placeholder="Graphicscard Name"
              value="{{ old('graphicscard_name') ?? '' }}">
              @error('graphicscard_name')
              <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>

            <!-- all of the required fiels to edit project -->
            <div class="form-group">
              <label for="graphicscard_price">Graphicscard Price($)</label>
              <input type="text" class="form-control" name="graphicscard_price" id="graphicscard_price" placeholder="300"
              value="{{ old('graphicscard_price') ?? '' }}">
              @error('graphicscard_price')
              <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>

            
            <fieldset class="form-group">
              <legend style = "font-size: 16px;" >Active (Soft Delete)</legend>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="active" value="yes" 
                   {{old('active')=='yes'?'checked':''}} checked> 
                 Yes
                </label>
              </div>
              <div class="form-check">
              <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="active" value="no"
                  {{old('active')=='no'?'checked':''}}>       
                  No
                </label>
              </div>
            </fieldset>

           
            <button type="submit" class="btn btn-secondary mb-2" style="margin-top:20px;">Create Record</button>
          </form>
      </div>
  </div>
</div>  

@stop()


