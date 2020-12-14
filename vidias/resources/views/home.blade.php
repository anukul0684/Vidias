@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="row justify-content-center my-4">
        <div class="col-md-8 my-4">
            <div class="card my-4">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body my-4 py-4">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
