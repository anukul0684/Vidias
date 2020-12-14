@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display">
                    
    <h1><em>Users</em></h1>
    <h2><a href="/admin/users/create" class="btn btn-primary">Create</a></h2>                  
</div>

<div id="list_display">

	<table id="brand_crud" style="color: #fff;">
		<tr id="table_header">
            <th>First Name</th>
			<th>Last Name</th>
            <th>Mobile Number</th>
            <th>Email</th>
            <th>Admin</th>
			<th>Actions</th>
		</tr>
    @foreach($users as $user)
    	<tr>
    		<td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->mobile_number}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->is_admin}}</td>
    		<td><a href="/admin/users/edit/{{$user->id}}" style="margin-left:7px; margin-right:22px" class="btn btn-secondary">Edit</a>
                <form action="/admin/users/delete/{{$user->id}}" method="post" enctype="multipart/form-data" novalidate> 
                    @csrf 
                    @method('PATCH') 
                    <input type="hidden" name="id" value="{{$user->id}}" />
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
    		</td>
    	</tr>
    @endforeach
    </table>

</div>

@stop()