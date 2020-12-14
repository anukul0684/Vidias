<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="widht=device-width,initial-scale=1.0" />
    <title>
            {{ config('app.name', 'Laravel') . '(ADMIN)' }} 
            <?php 
            $pagetitle = substr(strrchr(url()->current(),"/"),1);
            if($pagetitle == 'admin') {              
                echo '| Dashboard';
            } else {
                echo  '| ' . ucfirst($pagetitle);
            } ?>
    </title>
    <link rel="stylesheet" 
          type="text/css"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" 
          type="text/css"
          href="/css/app.css" />
    <style>
      .navbar-nav{
        margin-left: 18%;
      }

      li.nav-item a.logout{
        border: 1px solid #d00;
      }

      li.nav-item a:hover {
        text-decoration: underline;
      }

      div ul li.page_selection{
        color: #fff;
        font-weight: bold;
      }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js">
</script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/admin" style="color: #f4cd66; margin-left: 9%;">Dashboard</a>
    <button class="navbar-toggler" type="button" 
            data-toggle="collapse" data-target="#navbarNavDropdown" 
            aria-controls="navbarNavDropdown" aria-expanded="false" 
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item"> 
          <a class="nav-link  " href="/">ViDiA (Website)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/laptops">Laptops <span class="sr-only">(current)</span></a>
        </li>        
        <li class="nav-item">
          <a class="nav-link " href="/admin/brands">Brands</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="/admin/processors">Processors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/admin/graphicscards">Graphics Cards</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/admin/rams">RAMs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/admin/addresses">Addresses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="/admin/comments">Comments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="/admin/users">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="/admin/provinces">Provinces</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="/admin/orders">Orders</a>
        </li>        
        <li class="nav-item"> 
          <a class="nav-link  " href="/admin/images">Images</a>
        </li>
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" 
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>


              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
        </li>        
      </ul>
    </div>
  </nav>

  <div id="content" style="min-height:530px;">
      <section>
          @include('/partials/flash')
          @yield('content')
      </section>
  </div>


  <footer class="admin_footer" style="clear: both;">
    &copy;&nbsp;Vidia
    <div>
        <script>
          document.scripts[document.scripts.length-1].parentNode.innerHTML = "Last Modified: " + document.lastModified;
        </script>
    </div>
  </footer>
</body>
</html>