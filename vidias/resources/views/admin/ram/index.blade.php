@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display" class="admin_background">
                    
    <h1 class="admin_h1"><em>RAM</em></h1>
    
    <h2><a href="/admin/rams/create" class="btn btn-primary">Create</a></h2>                  
</div>

<div id="list_display">

	<table id="brand_crud" style="color: #fff;">
		<tr id="table_header">
            <th>ID</th>
            <th>RAM Size</th>
            <th>RAM Price</th>
            <th>SLUG</th>
            <th>ACTIVE</th>
			<th>Actions</th>
		</tr>
    @foreach($rams as $ram)
    	<tr>
            <td>{{$ram->id}}</td>
            <td>{{$ram->ram_size}}</td>
            <td>${{$ram->ram_price}}</td>
            <td>{{$ram->slug}}</td>
            <td>{{ucwords($ram->active)}}</td>
    		<td>
                <a href="/admin/rams/edit/{{$ram->id}}" 
                    class="btn btn-secondary mx-3">
                    Edit
                </a>
                <form action="/admin/rams/delete/{{$ram->id}}" 
                        method="post" enctype="multipart/form-data" novalidate> 
                    @csrf 
                    @method('PATCH') 
                    <input type="hidden" name="id" value="{{$ram->id}}" />
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
    	</tr>
    @endforeach
    </table>

</div>

@stop()