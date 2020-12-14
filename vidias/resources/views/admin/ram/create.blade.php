@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display" class="admin_background">
                    
    <h1 class="admin_h1"><em>RAM Add</em></h1>

    <h2><a href="/admin/rams" class="btn btn-primary">Back</a></h2> 

</div>

<div class="container" style="margin-bottom:50px;">
    <div class="row justify-content-center">
        <div class="col border" style="color:#fff; font-size:16px;">
            <!-- Fields to create new product -->
            <form class="form" action="/admin/rams/create" method="post" enctype="multipart/form-data" novalidate>
                
                @csrf
                <div class="form-group">

                    <label for="ram_size">RAM Size (add GB)</label>
                    <input class="form-control" type="text" name="ram_size" 
                            value="{{ old('ram_size') }}" id="ram_size"/>
                    @error('ram_size')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="ram_price">RAM Price</label>
                    <input class="form-control" type="number" name="ram_price" 
                            value="{{ old('ram_price') }}" id="ram_price"/>
                    @error('ram_price')
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
                    <a href="/admin/rams" id="cancel" name="cancel" class="btn btn-danger">Cancel</a>
                </div>

            </form>

                
            
        </div>
    </div>
</div>

@stop()