@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display" class="admin_background">
    <h1 class="admin_h1"><em>Graphicscards</em></h1>
    <h2><a href="/admin/graphicscards/create" class="btn btn-primary">Create</a></h2>                  
</div>

<div id="list_display">

    <table id="brand_crud" style="color: #fff;">
        <tr id="table_header">
            <th>Id</th>
            <th>Graphicscard Name</th>
            <th>Graphicscard Price($)</th>
            <th>Actions</th>
        </tr>
    
    @foreach($graphicscards as $graphicscard)
        <tr>
            <td>{{$graphicscard->id}}</td>
            <td>{{$graphicscard->graphicscard_name}}</td>
            <td>{{$graphicscard->graphicscard_price}}</td>
            <td><a href="/admin/graphicscards/edit/{{$graphicscard->id}}" class="btn btn-secondary" style="margin-left:7px; margin-right:22px">Edit</a>
                <form action="/admin/graphicscards/delete/{{$graphicscard->id}}" method="post" enctype="multipart/form-data" novalidate> 
                    @csrf 
                    @method('PATCH') 
                    <input type="hidden" name="id" value="{{$graphicscard->id}}" />
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>

</div>

@stop()