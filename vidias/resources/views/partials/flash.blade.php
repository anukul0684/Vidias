<!-- Flash Message if success in any action -->
@if(session('success'))

    <div class="alert alert-success">{{session('success')}}</div>

@endif

<!-- Flash Message if error in any action -->
@if(session('error'))

    <div class="alert alert-danger">{{session('error')}}</div>

@endif        

