@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display" class="admin_background">
    <h1 class="admin_h1"><em>Laptops</em></h1>
    <h2><a href="/admin/laptops/create" class="btn btn-primary">Create</a></h2>                  
</div>

<div id="list_display">

    <table id="brand_crud" style="color: #fff;">
        <tr id="table_header">
            <th>Id</th>
            <th>Laptop Name</th>
            <th>Brand Name</th>
            <th>Processor Name</th>
            <th>Graphics Card</th>
            <th>Actions</th>
        </tr>
    
    @foreach($laptops as $laptop)
        
        <tr>
            <td>{{$laptop->id}}</td>
            <td>{{$laptop->laptop_name}}</td>
            <td>{{$laptop->brand->brand_name}}</td>
            <td>{{$laptop->processor->processor_name}}</td>
            <td>{{$laptop->graphicscard->graphicscard_name}}</td>
            <td><a href="/admin/laptops/edit/{{$laptop->id}}" class="btn btn-secondary" style="margin-left:7px; margin-right:22px">Edit</a>
                <form action="/admin/laptops/delete/{{$laptop->id}}" method="post" enctype="multipart/form-data" novalidate> 
                    @csrf 
                    @method('PATCH') 
                    <input type="hidden" name="id" value="{{$laptop->id}}" />
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>

</div>

@stop()