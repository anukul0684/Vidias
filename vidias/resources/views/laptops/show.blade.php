@extends('layouts/vidia')

@section('content')
    <div id="head_display">
        
        <h1><em>Vidia</em></h1>
        <h4>
            Details of beautifully designed laptop...   
        </h4>                  
    </div>
    @include('/partials/flash')
    <div id="detail_first">
        <div>
            <p><img id="main_image" src="/storage/images/{{$feat->image_name}}" alt="laptop" /></p>
            <div>
                @foreach($images as $image)
                <p><img src="/storage/images/{{$image->image_name}}" onclick="changeImage('main_image', '/storage/images/{{$image->image_name}}'); return false;" onmouseover="changeImage('main_image', '/storage/images/{{$image->image_name}}'); return false;" style="cursor: pointer; width: 100px; height: 100px;" alt="laptop" /></p>
                @endforeach
           </div>
        </div>
        <div>
            <p id="d2">
                {{$laptop->laptop_name}} - {{$processor->processor_name}} 
                - {{$graphicscard->graphicscard_name}}
            </p>
            <p>
                CA${{$laptop->price}}
            </p>
            <p>
                {{$laptop->laptop_description}}<br><br>
                <strong>Specifications</strong><br>
                <strong>Processor</strong> {{$processor->processor_name}}<br>
                <strong>Graphics Card</strong> {{$graphicscard->graphicscard_name}}<br>
                <strong>RAM</strong> {{$ram->ram_size}} 
            </p>
            <p> Customize Your Laptop: </p>
            <form class="form"
                    action="/cart"
                    method="post" novalidate>                    
                @csrf
                @method('POST') 
                                 
                <div class="form-group"
                    style="color: #fff;
                    font-size: 1.1em;">
                    <input type="hidden" name="id" value="{{$laptop->id}}">
                    <label for="processor_id">Processor</label>
                    
                    <select class="form-control" name="processor_id" id="processor_id">
                        <option value="0">Choose Processor</option>
                        <?php foreach($processors as $otherprocessor) : ?>
                            <?php if($otherprocessor->id != $processor->id): ?>
                                <?php $processor_id = $otherprocessor->id; ?>
                                <option value="{{$otherprocessor->id}}">
                                        {{$otherprocessor->processor_name}} - ${{$otherprocessor->processor_price}}
                                </option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    @error('processor_id')
                        <div class="alert alert-danger">Please Choose a correct option for Processor</div>
                    @enderror()
                </div>

                <div class="form-group">
                    <label for="graphicscard_id">Graphicscard</label>
                    <select class="form-control" name="graphicscard_id" id="graphicscard_id">
                        <option value="0">Choose Graphicscard</option>
                        <?php foreach($graphicscards as $othergraphicscard) : ?>
                            <?php if($othergraphicscard->id != $graphicscard->id): ?>
                                <?php $graphicscard_id = $othergraphicscard->id; ?>
                                <option value="{{$othergraphicscard->id}}">
                                        {{$othergraphicscard->graphicscard_name}} - ${{$othergraphicscard->graphicscard_price}}
                                </option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    @error('graphicscard_id')
                        <div class="alert alert-danger">Please Choose a correct option for Graphicscard</div>
                    @enderror()
                </div>

                <div class="form-group">
                    <label for="ram_id">RAM</label>
                    <select class="form-control" name="ram_id" id="ram_id">
                        <option value="0">Choose RAM</option>
                        <?php foreach($rams as $otherram) : ?>
                            <?php if($otherram->id != $ram->id): ?>
                                <?php $ram_id = $otherram->id; ?>
                                <option value="{{$otherram->id}}">
                                    {{$otherram->ram_size}} - ${{$otherram->ram_price}}
                                </option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    @error('ram_id')
                        <div class="alert alert-danger">Please Choose a correct option for RAM</div>
                    @enderror()
                </div>
                <div class="form-group">
                    <button class ="btn btn-info update-cart"
                                data-id="{{ $laptop->id }}">
                        <i class="fa fa-cart-plus"><span>Add to cart</span></i>
                        
                    </button>
                </div>
            </form>
            <p>
                
            </p>
            <!-- <p id="detailcart"><a href="#">ADD TO CART</a></p>  -->
        </div>

    </div>
    <div id="detail_second">
                <table id="detail_comment" class="table-dark table-striped">
                
            	<?php foreach($comments as $comment) : ?>
        		<tr class="old_comments">
            		<td class="comment_by"><strong>By:</strong> {{$comment->user->first_name}} {{$comment->user->last_name}}</td>
            		<td class="comment_content">{{$comment->comment_text}}</td>
            	</tr>
            	<?php endforeach ?>

                @guest
            	<tr>
            		<td colspan="2">
                        <p>
                            Please <a style="color: #f5cb5c;" href="{{ route('login') }}">
                            <strong>Login</strong></a> to comment
                        </p>
                    </td>
            	</tr>
                @else

            	<tr>
            		<td colspan="2">
            			<form action="/laptops/{{$brand}}/{{$laptop->id}}"
            				  method="post"
            				  enctype="multipart/form-data" 
            				  novalidate>
            				  @csrf
            				<input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
            				<input type="hidden" name="laptop_id" value="{{$laptop->id}}"/>
            				<textarea name="comment_text" placeholder="Enter Comment here">{{old('comment_text')}}</textarea>
	            			<input type="hidden" name="active" value="yes">
				            <button type="submit" class="btn">Submit</button>

        				</form>
            		</td>
            	</tr>
            	@endguest
            </table>                 
        <!-- <div id="laptop_1">
            <p><img src="/storage/images/laptop6.jpg" alt="" title="click here for details"/></p>
        </div>     -->            
    </div>
    <script>
      //create a function that will change an image to another.
      function changeImage(change_id,new_image){
        if(document.images){
          document.images[change_id].src = new_image;
        }        
      }
    </script>
@stop()
  