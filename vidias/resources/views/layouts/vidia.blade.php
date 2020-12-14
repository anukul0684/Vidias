<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
            {{ config('app.name', 'Laravel') }} 
            <?php 
            $pagetitle = substr(strrchr(url()->current(),"/"),1);
            if($pagetitle == 'vidia.uwpace.ca') {
                echo '| Home';
            } else {
                echo  '| ' . ucfirst($pagetitle);
            } ?>        
    </title>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,900&display=swap" rel="stylesheet">

    <script>
        function myFunction() {
          var x = document.getElementById("ham_nav");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
        }
    </script>

    <style>

       

        
    </style>
</head>
<body>
    <div id="container">
        <header>
            <div id="inner_header">
                <a href="/" title="Visit Home Page"><img src="/storage/images/logo2.svg" alt="logo"/></a>
                <nav id = "hamburger">
                    
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>

                    <ul id="ham_nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/laptops">Laptops</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                        <li><a href="/faq">FAQ</a></li>
                        <li>
                            <a href="/cart">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart 
                                <span class="badge badge-pill badge-danger">
                                    {{ count((array) session('cart')) }}
                                </span>
                            </a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li>
                                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            @if(Auth::user()->is_admin)
                                <li>
                                    <a href="/admin">Admin Dashboard</a>
                                </li>
                            @endif
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" 
                                    role="button" data-toggle="dropdown" aria-haspopup="true" 
                                    aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>                                
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item bg-warning" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form1').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form1" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                               
                            </li>            
                            
                            <li>                               
                                <a href="/profile">
                                    Profile
                                </a>                                   
                            </li>                           
                            
                        @endguest
                    </ul>
                </nav>
                <nav id="main">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/laptops">Laptops</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                        <li><a href="/faq">FAQ</a></li>
                        <li>
                            <a href="/cart">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart 
                                <span class="badge badge-pill badge-danger">
                                    {{ count((array) session('cart')) }}
                                </span>
                            </a>
                        </li>                            
                        @guest
                            @if (Route::has('login'))
                                <li>
                                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            @if(Auth::user()->is_admin)
                                <li>
                                    <a href="/admin">Admin Dashboard</a>
                                </li>
                            @endif

                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" 
                                    aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>                                
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item bg-warning" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form2').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form2" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                               
                            </li>                            
                            <li>                               
                                <a href="/profile">
                                    Profile
                                </a>                                   
                            </li>                         
                            
                        @endguest
                    </ul>
                </nav>
            </div>    
        </header>
        <div id="content" style="min-height: 500px;">
            <section>
                @yield('content')
            </section>
        </div>
        <footer>
            <div id="inner_footer">
                <ul class="primary_ul">
                    <li>
                        <ul class="secondary_ul">
                            <li>About</li>
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/contact">Contact Us</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="secondary_ul">
                            <li>Help</li>
                            <li><a href="/faq">FAQ</a></li>
                            <li><a href="/contact">Contact Us</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="secondary_ul">
                            <li>Policy</li>
                            <li><a href="/termsofuse">Terms of Use</a></li>
                            <li><a href="/privacy">Privacy</a></li>
                        </ul>
                    </li>
                    <li id="vertical_li">
                        <div class="vertical"></div>
                    </li>
                    <li>
                        <ul class="secondary_ul address_ul">
                            <li>Address</li>
                            <li id="address">
                                7 Plus One SteveTops Avenue<br />
                                Manitoba<br />
                                
                            </li>
                            
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <hr/>

            <p id="copyright"> copyright&copy; by vidias</p>
        </footer>
    </div>
    <script src="/js/app.js"></script>
    
</body>
</html>