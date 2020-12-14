@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display" class="admin_background">
    <h1 class="admin_h1"><em>Order Detail</em></h1>
    <h2><a href="/admin/orders/orderdetails/{{$orderdetail->order_id}}" class="btn btn-primary">Order Details</a></h2>                  
</div>


<!-- Necesssary div with the container class that implements bootstrap -->
<div class="container" style="margin-bottom:50px;">

  <div class="row">
      <div class="col border" style="color:#fff; font-size:16px;"> 
          <!-- Main form for project editing -->
          <form name="laptop_edit" 
                id="laptop_edit" 
                action="/admin/orders/orderdetails/edit/{{$orderdetail->id}}"
                method="post"
                role="form"
                autocomplete="on"
                novalidate >
            @csrf    
                
            @method('PUT')
            <!-- all of the required fiels to edit project -->
            <div class="form-group">   
              <label for="orderdetail_id">Order Detail ID</label>
              <input type="text" class="form-control" name="orderdetail_id" id="orderdetail_id" readonly
              value="{{$orderdetail->id}}">
            </div>

            <div class="form-group">   
              <label for="order_id">Order ID</label>
              <input type="number" class="form-control" name="order_id" id="order_id" readonly
              value="{{$orderdetail->order_id}}">
            </div>


            <!-- all of the required fiels to edit project -->
            <div class="form-group">   
              <label for="laptop_id">Lpatop ID</label>
              <input type="number" class="form-control" name="laptop_id" id="laptop_id" readonly
              value="{{$orderdetail->laptop_id}}">
            </div>

            <div class="form-group">   
              <label for="unit_price">Unit Price($)</label>
              <input type="text" class="form-control" name="unit_price" id="unit_price" 
              value="{{old('unit_price',$orderdetail->unit_price)}}">
              @error('unit_price')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>

            <div class="form-group">   
              <label for="quantity">Quantity</label>
              <input type="number" class="form-control" name="quantity" id="quantity"
              value="{{old('qunatity',$orderdetail->quantity)}}">
              @error('quantity')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>

            <div class="form-group">   
              <label for="line_price">Line Price($)</label>
              <input type="text" class="form-control" name="line_price" id="line_price" 
              value="{{old('line_price',$orderdetail->line_price)}}">
              @error('line_price')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>

            <fieldset class="form-group">
              <legend style = "font-size: 16px;" >Active (Soft Delete)</legend>
              <?php $orderdetail_active = $orderdetail->active; ?>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="active" id="active1" value="yes" 
                   {{old('active',$orderdetail_active)=='yes'?'checked':''}} > 
                 Yes
                </label>
              </div>
              <div class="form-check">
              <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="active" id="active2" value="no"
                    {{old('active',$orderdetail_active)=='no'?'checked':''}}>       
                  No
                </label>
              </div>
            </fieldset>
          
            <button type="submit" class="btn btn-secondary mb-2" style="margin-top:20px;">Update Record</button>
          </form>
      </div>
  </div>
</div>  

@stop()


