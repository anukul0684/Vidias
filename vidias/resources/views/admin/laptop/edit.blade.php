@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display" class="admin_background">
    <h1 class="admin_h1"><em>Update Laptop {{$laptop->laptop_name}}</em></h1>
    <h2><a href="/admin/laptops/" class="btn btn-primary">Laptops</a></h2>                  
</div>


<!-- Necesssary div with the container class that implements bootstrap -->
<div class="container" style="margin-bottom:50px;">

  <div class="row">
      <div class="col border" style="color:#fff; font-size:16px;"> 
          <!-- Main form for project editing -->
          <form name="laptop_edit" 
                id="laptop_edit" 
                action="/admin/laptops/edit/{{$laptop->id}}"
                method="post"
                role="form"
                autocomplete="on"
                novalidate >
            @csrf    
                
            @method('PUT')
            <!-- all of the required fiels to edit project -->
            <div class="form-group">
              <?php $laptop_name = $laptop->laptop_name; ?>
              <label for="laptop_name">Laptop Name</label>
              <input type="text" class="form-control" name="laptop_name" id="laptop_name" placeholder="Laptop Name"
              value="{{ old('laptop_name',$laptop_name) ?? '' }}">
              @error('laptop_name')
              <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <?php $laptop_description = $laptop->laptop_description; ?>
              <label for="laptop_description">Laptop Description</label> 
              <textarea class="form-control" 
              name="laptop_description" id="laptop_description" rows="3" >{{old('laptop_description',$laptop_description)??''}}</textarea>
              @error('laptop_description')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="brand_id">Brand Name</label>
              <select class="form-control" name="brand_id" id="brand_id">
                <option value="">Choose Brand</option>
                <?php foreach($brands as $brand) : ?>
                  <?php $brand_id = $brand->id; $laptop_brand_id = $laptop->brand_id; ?>
                  <option value="{{$brand->id}}"
                          {{(old('brand_id',$laptop_brand_id) == $brand_id)?'selected':''}}>{{$brand->brand_name}}</option>
                <?php endforeach; ?>
              </select>
              @error('brand_id')
                <div class="alert alert-danger">Please Choose a correct option for brand</div>
              @enderror
            </div>

            <div class="form-group">

              <label for="processor_id">Processor Name</label>
              
              <select class="form-control" name="processor_id" id="processor_id">
                <option value="">Choose Processor</option>
                <?php foreach($processors as $processor) : ?>
                  <?php $processor_id = $processor->id; 
                        $laptop_processor_id=$laptop->processor_id; ?>
                  <option value="{{$processor->id}}" 
                    {{ (old('processor_id',$laptop_processor_id)==$processor_id) ? 'selected' : ''}}>{{$processor->processor_name}}</option>
                <?php endforeach; ?>
              </select>
              @error('processor_id')
                <div class="alert alert-danger">Please Choose a correct option for processor</div>
              @enderror()
            </div>

            <div class="form-group">
              <label for="graphicscard_id">Graphicscard Name</label>
              <select class="form-control" name="graphicscard_id" id="graphicscard_id">
                <option value="">Choose Graphicscard</option>
                <?php foreach($graphicscards as $graphicscard) : ?>
                  <?php $graphicscard_id = $graphicscard->id;
                        $laptop_graphicscard_id = $laptop->graphicscard_id; ?>
                  <option value="{{$graphicscard->id}}" 
                    {{(old('graphicscard_id',$laptop_graphicscard_id)==$graphicscard_id) ? 'selected' :''}}>{{$graphicscard->graphicscard_name}}</option>
                <?php endforeach; ?>
              </select>
              @error('graphicscard_id')
                <div class="alert alert-danger">Please Choose a correct option for graphicscard</div>
              @enderror()
            </div>

            <div class="form-group">
              <label for="ram_id">RAM Size</label>
              <select class="form-control" name="ram_id" id="ram_id">
                <option>Choose RAM</option>
                <?php foreach($rams as $ram) : ?>
                  <?php $ram_id = $ram->id;
                        $laptop_ram_id = $laptop->ram_id; ?>
                  <option value="{{$ram->id}}" {{ (old('ram_id',$laptop_ram_id)==$ram_id) ? 'selected' :''}}>
                  {{$ram->ram_size}}</option>
                <?php endforeach; ?>
              </select>
              @error('ram_id')
                <div class="alert alert-danger">Please Choose a correct option for RAM</div>
              @enderror()
            </div>   

            <fieldset class="form-group">
              <legend style = "font-size: 16px;" >Touch Screen</legend>
              <?php $laptop_touch_screen = $laptop->touch_screen;?>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="touch_screen" value="yes" 
                   {{old('touch_screen',$laptop_touch_screen)=='yes'?'checked':''}}> 
                 Yes
                </label>
              </div>
              <div class="form-check">
              <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="touch_screen" value="no"
                    {{old('touch_screen',$laptop_touch_screen) == 'no'?'checked':''}}
                     >       
                  No
                </label>
              </div>
            </fieldset>

            
            <div class="form-group">
              <label for="screen_resolution">Screen Resolution</label>
              
              <select class="form-control" name="screen_resolution" id="screen_resolution">
                <option value="">Choose Screen Resolution</option>
                <?php foreach($screenresolutions as $scr) : ?>
                  <?php $laptop_scr = $laptop->screen_resolution; ?>
                  <option value="{{$scr}}" 
                    {{ (old('screen_resolution',$laptop_scr) == $scr) ? 'selected' : ''}}>{{$scr}}</option>
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
                  <?php $laptop_scrsize = $laptop->screen_size;?>
                  <option value="{{$scrsize}}" 
                    {{ (old('screen_size',$laptop_scrsize)==$scrsize) ? 'selected' : ''}}>{{$scrsize}}</option>
                <?php endforeach; ?>
              </select>

              @error('screen_size')
                <div class="alert alert-danger">Please choose a correct option for Screen Size</div>
              @enderror()
            </div>

            <div class="form-group">
              <label for="usb_type">USB Type</label>
              
              <select class="form-control" name="usb_type" id="usb_type">
                <option value="">Choose Screen Size</option>
                <?php foreach($usbtypes as $usbtype) : ?>
                  <?php $laptop_usbtype = $laptop->usb_type; ?>
                  <option value="{{$usbtype}}" 
                    {{ (old('usb_type',$laptop_usbtype)==$usbtype)? 'selected' : ''}}>{{$usbtype}}</option>
                <?php endforeach; ?>
              </select>

              @error('usb_type')
                <div class="alert alert-danger">Please choose a correct option for USB Type</div>
              @enderror()
            </div>

            <fieldset class="form-group">
              <legend style = "font-size: 16px;" >Active (Soft Delete)</legend>
              <?php $laptop_active = $laptop->active; ?>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="active" value="yes" 
                   {{old('active',$laptop_active)=='yes'?'checked':''}} > 
                 Yes
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="active" value="no"
                    {{old('active',$laptop_active)=='no'?'checked':''}}>       
                  No
                </label>
              </div>
            </fieldset>

            <div class="form-group" style="margin-top:10px;">
              <label for="price">Price</label>
              <input type="text" class="form-control" name="price" id="price" placeholder="12000" value="{{old('price',$laptop->price) ?? ''}}">
              @error('price')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>

            <button type="submit" class="btn btn-secondary mb-2" style="margin-top:20px;">Update Record</button>
          </form>
      </div>
  </div>
</div>  

@stop()


