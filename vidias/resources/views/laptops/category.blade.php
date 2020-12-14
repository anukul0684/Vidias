@extends ('layouts/vidia')

@section('content')

<div id="head_display">
                    
    <h1><em>ViDiA!!! Performance Delivered... </em></h1>
    <h4>
        Still rubbing your fingers on the keyboard of an old desktop. Now is the time to grab a sleek laptop.
    </h4> 
    <h4>
        Select one from the list that suits best with your needs.
    </h4> 
    <h2></h2>                  
</div>
<div id="category_display">
    <table>
        <tr>
            <th>Brands:</th>
            @foreach($brands as $brand)
            <td><a href="/category/brand/{{$brand->slug}}" title="{{$brand->brand_name}}"><em>{{$brand->brand_name}}</em></a></td>
            @endforeach
        </tr>
        <tr>
            <th>Processors:</th>
            @foreach($processors as $processor)
            <td style="padding-right: 10px;"><a href="/category/processor/{{$processor->slug}}" title="{{$processor->processor_name}}"><em>{{$processor->processor_name}}</em></a></td>
            @endforeach
        </tr>
        <tr>
            <th>Graphics Card:</th>
            @foreach($graphicscards as $graphicscard)
            <td><a href="/category/graphics_card/{{$graphicscard->slug}}" title="{{$graphicscard->graphicscard_name}}"><em>{{$graphicscard->graphicscard_name}}</em></a></td>
            @endforeach 
        </tr>
        <tr>
            <th>Ram:</th>
            @foreach($rams as $ram)
            <td><a href="/category/ram/{{$ram->slug}}" title="{{$ram->ram_size}}"><em>{{$ram->ram_size}}</em></a></td>
            @endforeach
        </tr>
    </table>
</div>
<div id="list_display">

    @foreach($laptops as $laptop)
    <div id="laptop_{{ $laptop->id }}">
        <?php foreach ($laptop->images as $image) : ?>
            <?php $show_image = $image->image_name ; ?>
        <?php endforeach; ?>
        <a href="/laptops/<?=($laptop->brand->brand_name)?>/{{$laptop->id}}" title="click here for details"><img src="/storage/images/{{ $show_image }}" alt="" title="click here for details"/></a>
        <h3>${{ $laptop->price }}</h3>
        <h3>{{ $laptop->laptop_name }}</h3>
        <p><?= e(substr(($laptop->laptop_description), 0, 60)) ?>...</p>
        <p><strong style="color: #ffbc27;">Screen Size:</strong> {{ $laptop->screen_size }}" </p>
        <p><strong style="color: #ffbc27;">Screen Resolution:</strong> {{ $laptop->screen_resolution }} ppi </p>
        <p><strong style="color: #ffbc27;">Ram:</strong> {{ $laptop->ram->ram_size }} </p>
        <p><strong style="color: #ffbc27;">Processor:</strong> {{ $laptop->processor->processor_name }} </p>
        <p><strong style="color: #ffbc27;">Graphics:</strong> {{ $laptop->graphicscard->graphicscard_name }} </p>
        <a href="/laptops/<?=($laptop->brand->brand_name)?>/{{$laptop->id}}" title="click here for details">view details</a>
    </div>
    @endforeach
    
</div>
<div id="pagination" class="pagination">        
    {{ $laptops->links() }}
</div>
@stop()