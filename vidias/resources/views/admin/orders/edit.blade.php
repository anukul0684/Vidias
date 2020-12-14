@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display" class="admin_background">
    <h1 class="admin_h1"><em>Order From {{$order->user->name}}</em></h1>
    <h2><a href="/admin/orders/" class="btn btn-primary">Orders</a></h2>                  
</div>


<!-- Necesssary div with the container class that implements bootstrap -->
<div class="container" style="margin-bottom:50px;">

  <div class="row">
      <div class="col border" style="color:#fff; font-size:16px;"> 
          <!-- Main form for project editing -->
          <form name="laptop_edit" 
                id="laptop_edit" 
                action="/admin/orders/edit/{{$order->id}}"
                method="post"
                role="form"
                autocomplete="on"
                novalidate >
            @csrf    
                
            @method('PUT')
            <!-- all of the required fiels to edit project -->
            <div class="form-group">   
              <label for="user_id">User Id (User name)</label>
              <input type="text" class="form-control" name="user_id" id="user_id" readonly
              value="{{$order->user_id}}&nbsp;({{$order->user->name}})">
            </div>

            <div class="form-group">   
              <label for="shipped_date">Shipped Date</label>
              <input type="text" class="form-control" name="shipped_date" id="shipped_date" readonly
              value="{{$order->shipped_date}}">
            </div>

            <div class="form-group">   
              <label for="order_billing_address">Order Billing Address</label>
              <input type="text" class="form-control" name="order_billing_address" id="order_billing_address" readonly
              value="{{str_replace(' ', '',$order->order_billing_address)}}">
            </div>

            <div class="form-group">   
              <label for="order_shipping_address">Order Shipping Address</label>
              <input type="text" class="form-control" name="order_shipping_address" id="order_shipping_address" readonly
              value="{{str_replace(' ','',$order->order_shipping_address)}}">
            </div>

            <fieldset class="form-group">
              <legend style = "font-size: 16px;" >Shipped</legend>
              <?php $order_shipped = $order->shipped; ?>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="shipped" id="shipped1" value="yes" 
                   {{old('shipped',$order_shipped)=='yes'?'checked':''}} > 
                 Yes
                </label>
              </div>
              <div class="form-check">
              <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="shipped" id="shipped2" value="no"
                    {{old('shipped',$order_shipped)=='no'?'checked':''}}>       
                  No
                </label>
              </div>
            </fieldset>
           
            <div class="form-group">
              <label for="email">Email</label> 
              <input type="email" class="form-control" 
              name="email" id="email" value="{{old('email',$order->email)??''}}"/>
              @error('email')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="mobile_number">Mobile Number</label> 
              <input type="text" class="form-control" 
              name="mobile_number" id="mobile_number" value="{{old('mobile_number',$order->mobile_number)??''}}"/>
              @error('mobile_number')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="total">Total($) (Including Taxes)</label> 
              <input type="text" class="form-control" 
              name="total" id="total" value="{{old('total',$order->total)??''}}"/>
              @error('total')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="card_number">Card (Last Four Digits)</label> 
              <input type="text" class="form-control" 
              name="card_number" id="card_number" value="{{old('card_number',$order->card_number)??''}}"/>
              @error('card_number')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>

            <fieldset class="form-group">
              <legend style = "font-size: 16px;" >Payment Status</legend>
              <?php $payment_status = $order->payment_status; ?>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="payment_status" id="payment_status1" value="complete" 
                   {{old('payment_status',$payment_status)=='complete'?'checked':''}} > 
                 Complete
                </label>
              </div>
              <div class="form-check">
              <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="payment_status" id="payment_status2" value="pending"
                    {{old('payment_status',$payment_status)=='pending'?'checked':''}}>       
                  Pending
                </label>
              </div>
            </fieldset>

            <div class="form-group">   
              <label for="transaction_id">Transaction Id</label>
              <input type="number" class="form-control" name="transaction_id" id="transaction_id" readonly
              value="{{$order->transaction_id}}">
            </div>

            

            <fieldset class="form-group">
              <legend style = "font-size: 16px;" >Active (Soft Delete)</legend>
              <?php $order_active = $order->active; ?>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="active" id="active1" value="yes" 
                   {{old('active',$order_active)=='yes'?'checked':''}} > 
                 Yes
                </label>
              </div>
              <div class="form-check">
              <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="active" id="active2" value="no"
                    {{old('active',$order_active)=='no'?'checked':''}}>       
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


