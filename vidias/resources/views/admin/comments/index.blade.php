@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display">
                    
    <h1><em>Comments</em></h1>
    <h2><a href="/admin/comments/create" class="btn btn-primary">Create</a></h2>                  
</div>

<div id="list_display">

	<table id="brand_crud" style="color: #fff;">
		<tr id="table_header">
			<th>User Name</th>
            <th>Laptop Name</th>
            <th>Comment</th>
			<th>Actions</th>
		</tr>
    @foreach($comments as $comment)
    	<tr>
    		<td>{{$comment->user->first_name}} {{$comment->user->last_name}}</td>
            <td>{{$comment->laptop->laptop_name}}</td>
            <td>{{$comment->comment_text}}</td>
    		<td><a href="/admin/comments/edit/{{$comment->id}}" style="margin-left:7px; margin-right:22px" class="btn btn-secondary">Edit</a>
                <form action="/admin/comments/delete/{{$comment->id}}" method="post" enctype="multipart/form-data" novalidate> 
                    @csrf 
                    @method('PATCH') 
                    <input type="hidden" name="id" value="{{$comment->id}}" />
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
    		</td>
    	</tr>
    @endforeach
    </table>

</div>

@stop()