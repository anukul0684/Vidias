@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display">
                    
    <h1><em>Brands</em></h1>
    <h2><a href="/admin/brands/create" class="btn btn-primary">Create</a></h2>                  
</div>

<div id="list_display">

	<table id="brand_crud" style="color: #fff;">
		<tr id="table_header">
            <th>ID</th>
			<th style="width: 65%;">Brand Name</th>
			<th>Actions</th>
		</tr>
    @foreach($brands as $brand)
    	<tr>
            <td>{{$brand->id}}</td>
    		<td>{{$brand->brand_name}}</td>
    		<td><a href="/admin/brands/edit/{{$brand->id}}" class="btn btn-secondary mx-3">Edit</a>
                <form action="/admin/brands/delete/{{$brand->id}}" method="post" enctype="multipart/form-data" novalidate> 
                    @csrf 
                    @method('PATCH') 
                    <input type="hidden" name="id" value="{{$brand->id}}" />
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
    		</td>
    	</tr>
    @endforeach
    </table>

</div>

@stop()