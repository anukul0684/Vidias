@extends('layouts/vidia')

@section('content')
    <div id="head_display">
        
        <h1><em>ViDiA</em></h1>
        <h4>
            Contact Us
        </h4>

        <h4>
            Please share your queries with us below
        </h4>

    </div>

	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card contact_card">
                <div class="card-header">{{ __('Contact') }}</div>

                <div class="card-body">
                    <form method="POST" action="/contact">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('password') is-invalid @enderror" name="name" required>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                        </div>

                  		<div class="form-group row">
                            <label for="comment" class="col-md-4 col-form-label text-md-right">{{ __('Comment') }}</label>

                            <div class="col-md-6">
                                <textarea id="comment" class="form-control" name="comment"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                

            </div>
            
        </div>

        <div id="contact_details" class="col-md-3 mt-4 text-center lead">
            <ul class="list-unstyled md-0 mt-4 ml-0 mr-0">
                
                <li class="svg_list">
                    <i class="fas fa-map-marker-alt fa-2x mb-4 mt-4"></i>
                    <a href="https://goo.gl/maps/moveSrtHwWNJhfW69" target="_blank"
                        title="We are Here" class="text-decoration-none text-dark">          
                        <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="#f5cb5c" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                    </a>
                    <p>Winnipeg, MB A1B 2C3</p>
                </li>

                <li class="svg_list">
                    <i class="fas fa-phone mt-4 mb-4"></i>
                    <a title="Contact Us" href="tel:1-204-599-8236" class="text-decoration-none text-dark">
                        <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="#f5cb5c" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
                        </svg>
                    </a>
                    <p>+1 123 456 7890</p>
                </li>

                <li class="svg_list">
                    <i class="fas fa-envelope mt-4 "></i>
                    <a title="Email Us" href="mailto:alpha@example.com" class="text-decoration-none text-dark">
                        <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="#f5cb5c" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                        </svg>
                    </a>
                    <p>alpha@example.com</p>
                </li>

            </ul>
        </div>

    </div>
</div>
	
@stop()