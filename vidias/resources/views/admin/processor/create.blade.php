@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display" class="admin_background">
                    
    <h1 class="admin_h1"><em>Processor Add</em></h1>

    <h2><a href="/admin/processors" class="btn btn-primary">Back</a></h2> 

</div>

<div class="container" style="margin-bottom:50px;">
    <div class="row justify-content-center">
        <div class="col border" style="color:#fff; font-size:16px;">
            <!-- Fields to create new product -->
            <form class="form" action="/admin/processors/create" method="post" novalidate>
                
                @csrf
                <div class="form-group">

                    <label for="processor_name">Processor Name</label>
                    <input class="form-control" type="text" name="processor_name" 
                            value="{{ old('processor_name') }}" id="processor_name"/>
                    @error('processor_name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="processor_price">Processor Price</label>
                    <input class="form-control" type="number" name="processor_price" 
                            value="{{ old('processor_price') }}" id="processor_price"/>
                    @error('processor_price')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="active">Active</label>
                    <select class="form-control" name="active" id="active">                    
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    </select>
                    @error('active')
                        <div class="alert alert-danger">
                                {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-secondary">Create Record</button>
                    <a href="/admin/processors" id="cancel" name="cancel" class="btn btn-danger">Cancel</a>
                </div>

            </form>

                
            
        </div>
    </div>
</div>

@stop()