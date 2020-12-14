@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display" class="admin_background">
    <h1 class="admin_h1"><em>Create Laptop</em></h1>
    <h2><a href="/admin/laptops/" class="btn btn-primary">Laptops</a></h2>                  
</div>


<!-- Necesssary div with the container class that implements bootstrap -->
<div class="container" style="margin-bottom:50px;">

  <div class="row">
      <div class="col border" style="color:#fff; font-size:16px;"> 
          <!-- Main form for project editing -->
          <form name="laptop_add" 
                id="laptop_add" 
                action="/admin/laptops/create"
                method="post"
                role="form"
                autocomplete="on"
                novalidate >
            @csrf    
                
            <!-- all of the required fiels to edit project -->
            <div class="form-group">
              <label for="laptop_name">Laptop Name</label>
              <input type="text" class="form-control" name="laptop_name" id="laptop_name" placeholder="Laptop Name"
              value="{{ old('laptop_name') ?? '' }}">
              @error('laptop_name')
              <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="laptop_description">Laptop Description</label> 
              <textarea class="form-control" 
              name="laptop_description" id="laptop_description" rows="3" >{{old('laptop_description')}}</textarea>
              @error('laptop_description')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="brand_id">Brand Name</label>
              <select class="form-control" name="brand_id" id="brand_id">
                <option>Choose Brand</option>
                <?php foreach($brands as $brand) : ?>
                  <?php $brand_id = $brand->id; ?>
                  <option value="{{$brand->id}}"
                          {{(old('brand_id')== $brand_id)?'selected':''}}>{{$brand->brand_name}}</option>
                <?php endforeach; ?>
              </select>
              @error('brand_id')
                <div class="alert alert-danger">Please Choose a correct option for Brand</div>
              @enderror
            </div>

            <div class="form-group">

              <label for="processor_id">Processor Name</label>
              
              <select class="form-control" name="processor_id" id="processor_id">
                <option>Choose Processor</option>
                <?php foreach($processors as $processor) : ?>
                  <?php $processor_id = $processor->id; ?>
                  <option value="{{$processor->id}}" 
                    {{ (old('processor_id')==$processor_id) ? 'selected' : ''}}>{{$processor->processor_name}}</option>
                <?php endforeach; ?>
              </select>
              @error('processor_id')
                <div class="alert alert-danger">Please Choose a correct option for Processor</div>
              @enderror()
            </div>

            <div class="form-group">
              <label for="graphicscard_id">Graphicscard Name</label>
              <select class="form-control" name="graphicscard_id" id="graphicscard_id">
                <option>Choose Graphicscard</option>
                <?php foreach($graphicscards as $graphicscard) : ?>
                  <?php $graphicscard_id = $graphicscard->id; ?>
                  <option value="{{$graphicscard->id}}" {{ (old('graphicscard_id')==$graphicscard_id) ? 'selected' : ''}}>{{$graphicscard->graphicscard_name}}</option>
                <?php endforeach; ?>
              </select>
              @error('graphicscard_id')
                <div class="alert alert-danger">Please Choose a correct option for Graphicscard</div>
              @enderror()
            </div>

            <!-- Still need to add ram here but its model is not ready -->


            <fieldset class="form-group">
              <legend style = "font-size: 16px;" >Touch Screen</legend>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="touch_screen" value="yes" 
                  {{old('touch_screen')=='yes' ? 'checked' : ''}} checked> 
                 Yes
                </label>
              </div>
              <div class="form-check">
              <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="touch_screen" value="no"
                  {{old('touch_screen')=='no' ? 'checked' : ''}}>       
                  No
                </label>
              </div>
            </fieldset>

            
            <div class="form-group">
              <label for="screen_resolution">Screen Resolution</label>
              
              <select class="form-control" name="screen_resolution" id="screen_resolution">
                <option value="">Choose Screen Resolution</option>
                <?php foreach($screenresolutions as $scr) : ?>
                  <option value="{{$scr}}" 
                    {{ (old('screen_resolution')==$scr) ? 'selected' : ''}}>{{$scr}}</option>
                <?php endforeach; ?>
              </select>


              @error('screen_resolution')
                
                <div class="alert alert-danger">Please Choose a correct option for Screen Resolution</div>
              @enderror()
            </div>

            <div class="form-group">
              <label for="screen_size">Screen Size</label>
              
              <select class="form-control" name="screen_size" id="screen_size">
                <option value="">Choose Screen Size</option>
                <?php foreach($screensizes as $scrsize) : ?>
                  <option value="{{$scrsize}}" 
                    {{ (old('screen_size')==$scrsize) ? 'selected' : ''}}>{{$scrsize}}</option>
                <?php endforeach; ?>
              </select>

              @error('screen_size')
                <div class="alert alert-danger">Please Choose a correct option for Screen Size</div>
              @enderror()
            </div>

            <div class="form-group">
              <label for="ram_id">RAM Size</label>
              <select class="form-control" name="ram_id" id="ram_id">
                <option>Choose RAM</option>
                <?php foreach($rams as $ram) : ?>
                  <?php $ram_id = $ram->id; ?>
                  <option value="{{$ram->id}}" {{ (old('ram_id')==$ram_id) ? 'selected' : ''}}>
                  {{$ram->ram_size}}</option>
                <?php endforeach; ?>
              </select>
              @error('ram_id')
                <div class="alert alert-danger">Please Choose a correct option for RAM</div>
              @enderror()
            </div>       
            
            <div class="form-group">
              <label for="usb_type">USB Type</label>
              
              <select class="form-control" name="usb_type" id="usb_type">
                <option value="">Choose USB type</option>
                <?php foreach($usbtypes as $usbtype) : ?>
                  <option value="{{$usbtype}}" 
                    {{ (old('usb_type')==$usbtype) ? 'selected' : ''}}>{{$usbtype}}</option>
                <?php endforeach; ?>
              </select>

              @error('usb_type')
                <div class="alert alert-danger">Please Choose a correct option for USB Type</div>
              @enderror()
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

            <div class="form-group" style="margin-top:10px;">
              <label for="price">Price</label>
              <input type="text" class="form-control" name="price" id="price" placeholder="Please enter amount" value="{{old('price') ?? ''}}">
              @error('price')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>

            <button type="submit" class="btn btn-secondary mb-2" style="margin-top:20px;">Create Record</button>
          </form>
      </div>
  </div>
</div>  

@stop()


