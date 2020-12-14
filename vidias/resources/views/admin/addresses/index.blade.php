@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display">
                    
    <h1><em>Addresses</em></h1>
    <h2><a href="/admin/addresses/create" class="btn btn-primary">Create</a></h2>                  
</div>

<div id="list_display">

	<table id="brand_crud" style="color: #fff;">
		<tr id="table_header">
			<th>User Name</th>
            <th>Street</th>
            <th>city</th>
            <th>Province</th>
            <th>Country</th>
			<th>Actions</th>
		</tr>
    @foreach($addresses as $address)
    	<tr>
    		<td>{{$address->user->first_name}} {{$address->user->last_name}}</td>
            <td>{{$address->street_name}}</td>
            <td>{{$address->city}}</td>
            <td>{{$address->province->province_name}}</td>
            <td>{{$address->country}}</td>
    		<td><a href="/admin/addresses/edit/{{$address->id}}" style="margin-left:7px; margin-right:22px" class="btn btn-primary">Edit</a>
                <form action="/admin/addresses/delete/{{$address->id}}" method="post" enctype="multipart/form-data" novalidate> 
                    @csrf 
                    @method('PATCH') 
                    <input type="hidden" name="id" value="{{$address->id}}" />
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
    		</td>
    	</tr>
    @endforeach
    </table>

</div>

@stop()