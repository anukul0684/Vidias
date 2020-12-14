@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display">
                    
    <h1><em>Images</em></h1>
    <h2><a href="/admin/images/create" class="btn btn-primary">Create</a></h2>                  
</div>

<div id="list_display">

    <table id="image_crud" style="color: #fff;">
        <tr id="table_header">
            <th>Image ID</th>
            <th>Image</th>
            <th>Associated Laptop</th>
            <th>Actions</th>
        </tr>

        @foreach($images as $image)
        <tr>
            <td>{{ $image->id }}</td>
            <td class="img_span"><img src="/storage/images/{{ $image->image_name }}" alt="{{ $image->image_name }}" /><span>{{ $image->image_name }}</span></td>
            <td>{{ $image->laptop->laptop_name }}</td>
            <td>
                <a href="/admin/images/edit/{{$image->id}}" style="margin-left:7px; margin-right:22px" class="btn btn-secondary">Edit</a>
                <form style="display: inline-block;" action="/admin/images/delete/{{$image->id}}" method="post" enctype="multipart/form-data" novalidate> 
                    @csrf 
                    @method('PATCH') 
                    <input type="hidden" name="id" value="{{$image->id}}" />
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
</div>

@stop()