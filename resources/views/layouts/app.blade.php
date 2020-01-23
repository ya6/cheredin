<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="144x144" href="/images/fav/apple-touch-icon-144x144.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/fav/favicon-16x16.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link type="text/css" rel="stylesheet" href="/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="/css/app.css">
    @yield('top_script')
    
    @yield('style')
  
    <title>@yield('title', 'Vladimir Cheredin | Admin')</title>
</head>
<body>
    <div>
        <nav class="navbar  d-flex flex-nowrap navbar-expand-md navbar-dark bg-info shadow-sm">

        <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" 
        data-target="#bd-docs-nav" aria-controls="bd-docs-nav" 
        aria-expanded="false" aria-label="bd-docs-nav">
        <span class="navbar-toggler-icon"></span>
        </button> 
  
        
            <div class="container">
                <a class="navbar-brand d-none d-sm-block" href="/admin">
                @lang('Vladimir Cheredin')
                </a>
                
                <div>
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                        <a class="btn btn-outline-secondary nav-link"
                        href="/" target="_blank">@lang('Open home page')</a>
                    </li></ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    


                        <!-- Authentication Links -->
                        <!-- @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                          
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest -->
                    </ul>
                </div>
                  @if (Route::has('register') && (Auth::check()))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
            

            <form action="/lang" method="post">
             @csrf

                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-sm btn-secondary">
                    <input type="radio" name="lang"  value="en" checked onchange="this.form.submit()"> En
                    </label>
                    
                    <label class="btn btn-sm btn-secondary">
                    <input type="radio" name="lang" value="ru" onchange="this.form.submit()" > Ru
                    </label>
                </div>
               
                
            </form>

            <ul class="navbar-nav" style="z-index:10000;">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown"
                   href="#" role="button" aria-haspopup="true" aria-expanded="false">
                   
                    <span class="d-none d-md-inline-block">User</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item" href="user-profile-lite.html">
                      <i class="material-icons ">&#xE7FD;</i> Profile</a>
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#">
                      <i class="material-icons   text-danger">&#xE879;</i> Logout </a>
                  </div>
                </li>
                </ul>
</div>
    
</nav>

<!-- menu section -->

<div class="container-fluid">
      <div class="row">
         <!-- Main Sidebar -->
         <aside class="col-12 col-md-3 col-lg-2 px-0" style="border:2px solid blue">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="/admin" style="line-height: 37px;">
                <div class="d-table m-auto">
                  <span class="d-none d-md-inline mx-auto">Dashboard</span>
                </div>
              </a>             
            </nav>
          </div>
          
          <div class="collapse over_collapse" id = "bd-docs-nav">

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>@lang('HOME')</span>
              <i class="material-icons  align-bottom">home</i>
          </h6>
            <ul class="nav flex-column">
              
              <li class="nav-item">
                <a class="nav-link " href="/admin/slider">
                  <i class="material-icons align-bottom">slideshow</i>
                  <span>Slider</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/admin/workout">
                  <i class="material-icons align-bottom">poll</i>
                  <span>Workout</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/admin/home_about/1">
                  <i class="material-icons align-bottom">person</i>
                  <span>About me</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/admin/home_photo">
                  <i class="material-icons  align-bottom">photo_album</i>
                  <span>Photos</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/admin/home_video">
                  <i class="material-icons  align-bottom">videocam</i>
                  <span>Video</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/admin/reward">
                  <i class="material-icons  align-bottom">stars</i>
                  <span>Rewards</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/admin/home_event/1">
                  <i class="material-icons  align-bottom">event</i>
                  <span>Events</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/admin/partner">
                  <i class="material-icons  align-bottom">group</i>
                  <span>Partners</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/admin/takepart/1">
                  <i class="material-icons  align-bottom">emoji_people</i>
                  <span>Take part</span>
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center pr-3 mt-4 mb-1 text-muted">
            <a class="nav-link active" href="/admin/about/1">
              <span>@lang('ABOUT ME')</span>
            </a>
            <i class="material-icons  align-bottom">person</i>
            </h6>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>@lang('MEDIA GALLERY')</span>
            <i class="material-icons  align-bottom">photo</i>
            </h6>

            <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link " href="/admin/photo">
                  <i class="material-icons  align-bottom">photo_album</i>
                  <span>Photos</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="user-profile-lite.html">
                  <i class="material-icons  align-bottom">videocam</i>
                  <span>Videos</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/admin/reward">
                  <i class="material-icons  align-bottom">stars</i>
                  <span>Rewards</span>
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>@lang('BLOG')</span>
              <i class="material-icons  align-bottom">list</i>
          </h6>
            <ul class="nav flex-column">
              
              <li class="nav-item">
                <a class="nav-link " href="/admin/blog/category">
                  <i class="material-icons align-bottom">category</i>
                  <span>@lang('Categories')</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/admin/blog">
                  <i class="material-icons align-bottom">description</i>
                  <span>Blogs</span>
                </a>
              </li>
             
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center pr-3 mt-4 mb-1 text-muted">
            <a class="nav-link active" href="index.html">
              <span>@lang('CONTACTS')</span>
            </a>
            <i class="material-icons  align-bottom">email</i>
            </h6>


          </div>
        </aside>
        <!-- End Main Sidebar -->

 <!--  Main Content -->
        <main class="col-lg-10 col-md-9 col-sm-12 p-0" style="border:2px solid blue">
          <div class="main-navbar sticky-top bg-white" style="b order:2px solid red">
         @yield('content')
            </div>
       </main>

        <!--  Main Content -->

      </div>

</div>
<!-- End menu section -->





<script src="/js/jquery.js"></script>
<script src="/js/popper.js"></script>
<script src="/js/bootstrap.js"></script>   

<script  type="text/javascript" src="/js/app.js"></script>

@yield('script')


</body>
</html>
