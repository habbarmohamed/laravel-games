<!DOCTYPE html>
<head>
    <title>Admin GF.com</title>
    <!-- Favicon -->   
    <link href="{{asset('img')}}/logog.png" rel="shortcut icon"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/classic.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/game.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/preloader.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"/>
    
    
    

    
    <style>

       
    </style>
    
</head>
</head>
<body>

<div id="preloder" style="background-color: white;">
<div class="gooey">
  <span class="dot"></span>
  <div class="dots">
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>
</div>

    <div class="wrapper">
        <nav id="sidebar" class="sidebar" style="background-color: #354052 !important;">
            <div class="sidebar-content ">
                <a class="sidebar-brand" href="{{url('/home')}}">
                    <img src="{{asset('img/logohead.png') }}" style="width: 30%">
                    <span class="align-middle">GameFace</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Main
                    </li>
                    <li class="sidebar-item active">
                        <a href="#forms" data-toggle="collapse" class="sidebar-link">
               <span class="align-middle">Account</span>
            </a>
                        <ul id="forms" class="sidebar-dropdown list-unstyled collapse show" data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="/Admin/profile">Profile</a></li>
                            
                            
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#auth" data-toggle="collapse" class="sidebar-link collapse">
               <span class="align-middle">Auth</span>
              <span class="sidebar-badge badge badge-secondary">12/24</span>
            </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="pages-sign-in.html">Sign In</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="pages-sign-up.html">Sign Up</a></li>
                            
                            
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#forms-1" data-toggle="collapse" class="sidebar-link collapsed">
               <span class="align-middle">Category</span>
            </a>
                        <ul id="forms-1" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="{{route('categories.index')}}">Form Category
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="{{route('categories.create')}}">Add Category
                                </a>
                            </li>
                            
                            
                        </ul>
                    </li>
                    
                    

                    <li class="sidebar-header">
                        Components
                    </li>
                    
                    
                    <li class="sidebar-item">
                        <a href="#forms-2" data-toggle="collapse" class="sidebar-link collapsed">
              <span class="align-middle">Game</span>
            </a>
                        <ul id="forms-2" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="{{route('jeux.index')}}">Form Game</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="{{route('jeux.create')}}">Add Game</a></li>
                            
                        </ul>
                    </li>

                    <li class="sidebar-item ">
                        <a href="#forms0" data-toggle="collapse" class="sidebar-link collapsed">
               <span class="align-middle">News</span>
            </a>
                        <ul id="forms0" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="{{route('news.index')}}">Form News</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="{{route('news.create')}}">Add News</a></li>
                            
                        </ul>
                    </li>

                    <li class="sidebar-item ">
                        <a href="#forms1" data-toggle="collapse" class="sidebar-link collapsed">
               <span class="align-middle">Tournament</span>
            </a>
                        <ul id="forms1" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="{{route('tournois.index')}}">Form Tournament</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="{{route('tournois.create')}}">Add Tournament</a></li>
                            
                          
                        </ul>
                    </li>

                    <li class="sidebar-item ">
                        <a href="#forms2" data-toggle="collapse" class="sidebar-link collapsed">
               <span class="align-middle">Carousel</span>
            </a>
                        <ul id="forms2" class="sidebar-dropdown list-unstyled collapse show" data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="{{route('slider.index')}}"slider>Form Carousel</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="{{route('slider.create')}}"slider>Add Carousel</a></li>
                            
                           
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#forms" data-toggle="collapse" class="sidebar-link collapsed">
               <span class="align-middle">Users</span>
            </a>
                        <ul id="forms" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="{{route('users.index')}}">Form Users</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="{{route('users.create')}}">Add Users</a></li>
                            
                            
                        </ul>
                    </li>

                   
                    
                            
                </ul>

                <div class="sidebar-bottom d-none d-lg-block ">
                    <div class="media">
                        <img class="rounded-circle mr-3" src="{{asset('img')}}/{{Auth::user()->photo_id}}" alt="Chris Wood" width="44" height="51">
                        <div class="media-body">
                            <h6 class="mb-1 text-white">{{Auth::user()->name}}</h6>
                            <div class="text-muted">
                                Online
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </nav>



        <div class="main">
            <nav class="navbar navbar-expand navbar-light " style="background-color: #f5ad228c;">
                <a class="sidebar-toggle d-flex mr-2">
                    <i class="fas fa-bars" style="margin: 3px 0; font-size: 1.7em;"></i>
                </a>


                <a class="nav-link ml-auto" href="#" style="color: #354052;font-weight: bold;text-transform: capitalize; font-size: 10px" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('img')}}/{{Auth::user()->photo_id}}" class="avatar img-fluid rounded-circle mr-1" alt="Chris Wood" style="width: 35px; height: 40px;">    
                   {{Auth::user()->name}}
                </a>

                 <div class="dropdown-menu dropdown-menu-right" style="margin-top: -5px">
                    <button class="dropdown-item" type="button">Edit Profile</button>
                    <button class="dropdown-item" type="button">Manage </button>
                    <button class="dropdown-item" type="button">Logout</button>
                  </div>


                


                <a href="{{ url('/logout') }}" class="power-off" style="font-size: 16px; color: red"><i class="fas fa-power-off"></i></a>

                
                      
                
            </nav>


        @yield('dashboard')

