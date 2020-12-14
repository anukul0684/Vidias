@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display" class="admin_background">
                    
    <h1 class="admin_h1"><em>Provinces</em></h1>
    
    <h2><a href="/admin/provinces/create" class="btn btn-primary">Create</a></h2>                  
</div>

<div id="list_display">

	<table id="brand_crud" style="color: #fff;">
		<tr id="table_header">
            <th>ID</th>
            <th>Province Name</th>
            <th>Province GST</th>
            <th>Province PST</th>
            <th>Province HST</th>
			<th>Actions</th>
		</tr>
    @foreach($provinces as $province)
    	<tr>
            <td>{{$province->id}}</td>
            <td>{{$province->province_name}}</td>
            <td>{{$province->province_gst}}%</td>
            <td>{{$province->province_pst}}%</td>
            <td>{{$province->province_hst}}%</td>
    		<td>
                <a href="/admin/provinces/edit/{{$province->id}}" class="btn btn-secondary" style="margin-left:7px; margin-right:22px">
                    Edit
                </a>
                <form action="/admin/provinces/delete/{{$province->id}}" method="post" enctype="multipart/form-data" novalidate> 
                    @csrf 
                    @method('PATCH') 
                    <input type="hidden" name="id" value="{{$province->id}}" />
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
    	</tr>
    @endforeach
    </table>

</div>

@stop()