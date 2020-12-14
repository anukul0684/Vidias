@extends ('admin/partials/adminblock')

@section('content')

<div id="head_display" class="admin_background">
                    
    <h1 class="admin_h1"><em>Provinces</em></h1>

    <h2><a href="/admin/provinces" class="btn btn-primary">Back</a></h2> 

</div>

<div class="container" style="margin-bottom:50px;">
    <div class="row justify-content-center">
        <div class="col border" style="color:#fff; font-size:16px;">

            <form class="form" 
                  action="/admin/provinces/edit/{{$province->id}}" 
                  method="post" 
                  enctype="multipart/form-data" 
                  novalidate>
                
                @csrf

                @method('PUT')
                <!-- Fields to edit a product -->
                <div class="form-group">

                    <label for="province_name">Province Name</label>
                    <input class="form-control" type="text" name="province_name" value="{{ old('province_name', $province->province_name) }}" id="province_name"/>
                    @error('province_name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="province_gst">Province GST</label>
                    <input class="form-control" type="number" name="province_gst" value="{{ old('province_gst', $province->province_gst) }}" id="province_gst"/>
                    @error('province_gst')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="province_pst">Province PST</label>
                    <input class="form-control" type="number" name="province_pst" value="{{ old('province_pst', $province->province_pst) }}" id="province_pst"/>
                    @error('province_pst')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="province_hst">Province HST</label>
                    <input class="form-control" type="number" name="province_hst" value="{{ old('province_hst', $province->province_hst) }}" id="province_hst"/>
                    @error('province_hst')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="province_qst">Province QST</label>
                    <input class="form-control" type="number" name="province_qst" value="{{ old('province_qst', $province->province_qst) }}" id="province_qst"/>
                    @error('province_qst')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-secondary mb-2" style="margin-top:20px;">Submit</button>
                </div>

            </form>

                
            
        </div>
    </div>
</div>

@stop()