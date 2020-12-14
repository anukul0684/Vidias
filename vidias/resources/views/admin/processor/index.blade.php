@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display" class="admin_background">
                    
    <h1 class="admin_h1"><em>Processors</em></h1>
    
    <h2><a href="/admin/processors/create" class="btn btn-primary">Create</a></h2>                  
</div>

<div id="list_display">

	<table id="brand_crud" style="color: #fff;">
		<tr id="table_header">
            <th>ID</th>
            <th>Processor Name</th>
            <th>Processor Price</th>
            <th>SLUG</th>
            <th>ACTIVE</th>
			<th>Actions</th>
		</tr>
    @foreach($processors as $processor)
    	<tr>
            <td>{{$processor->id}}</td>
            <td>{{$processor->processor_name}}</td>
            <td>${{$processor->processor_price}}</td>
            <td>{{$processor->slug}}</td>
            <td>{{ucwords($processor->active)}}</td>
    		<td class="d-flex justify-content-center" style="box-sizing:border-box;">
                <a href="/admin/processors/edit/{{$processor->id}}" 
                    class="btn btn-secondary mx-3">
                    Edit
                </a>
                <form class="form-inline" action="/admin/processors/delete/{{$processor->id}}" 
                        method="post" enctype="multipart/form-data" novalidate> 
                    @csrf 
                    @method('PATCH') 
                    <input type="hidden" name="id" value="{{$processor->id}}" />
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
    	</tr>
    @endforeach
    </table>

</div>

@stop()