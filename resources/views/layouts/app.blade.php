<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" href="https://bootswatch.com/4/united/bootstrap.min.css" >
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.css'>
  <link rel="stylesheet" href="css/bolinhas.css">
      <link rel="stylesheet" href="css/stylesidebar.css">
      <link href="https://file.myfontastic.com/iJYjXkgy6oiu83CgaUEkq7/icons.css" rel="stylesheet">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <div class="ui sidebar vertical left menu overlay visible  very thin icon" style="-webkit-transition-duration: 0.1s; overflow: visible !important; background-color:rgb(255, 184, 76);">
                            <div class="item logo">
                              <i class="icon-portal-sos-13 img"> </i>
                          
                            </div>
                            <div class="ui accordion ui accordion displaynone">
                              <a class="title item">Dashboard  <i class="dropdown icon"></i>
                                          </a>
                              <div class="content">
                                <a class="item" href="dashboard.html">Dashboard
                                              </a>
                              </div>
                          
                              <div class="title item">
                                <i class="dropdown icon"></i> Apps
                              </div>
                              <div class="content">
                                <a class="item" href="inbox.html">SOS Button
                                              </a>
                               
                              </div>
                              
                          
                              <div class="title item">
                                <i class="dropdown icon"></i> UI-Kit
                              </div>
                              <div class="content">
                                <a class="item" href="accordion.html">Accordion
                                              </a>
                                <a class="item" href="breadcrumb.html">Breadcrumb
                                              </a>
                                <a class="item" href="button.html">Button
                                              </a>
                                <a class="item" href="divider.html">Divider
                                              </a>
                                <a class="item" href="dropdown.html">Dropdown
                                              </a>
                                <a class="item" href="flag.html">Flag
                                              </a>
                                <a class="item" href="icon.html">Icon
                                              </a>
                                <a class="item" href="image.html">Image
                                              </a>
                                <a class="item" href="label.html">Label
                                              </a>
                                <a class="item" href="list.html">List
                                              </a>
                                <a class="item" href="modal.html">Modal
                                              </a>
                                <a class="item" href="notification.html">Notification
                                              </a>
                                <a class="item" href="alert.html">Alert
                                              </a>
                          
                                <a class="item" href="progress.html">Progress
                                              </a>
                                <a class="item" href="range-v1.html">Range Semantic
                                              </a>
                                <a class="item" href="range-v2.html">Range Material
                                              </a>
                                <a class="item" href="rating.html">Rating
                                              </a>
                                <a class="item" href="tab.html">Tab
                                              </a>
                                <a class="item" href="tooltip.html">Tooltip
                                              </a>
                                <a class="item" href="transition.html">Transition
                                              </a>
                              </div>
                          
                              <div class="title item">
                                <i class="dropdown icon"></i> Pages
                              </div>
                              <div class="content">
                                <a class="item" href="profile.html">Profile
                                              </a>
                          
                                <a class="item" href="settings.html">Settings
                                              </a>
                          
                                <a class="item" href="blank.html">Blank
                                              </a>
                                <a class="item" href="signin.html">Sign In
                                              </a>
                                <a class="item" href="signup.html">Sign Up
                                              </a>
                                <a class="item" href="forgotpassword.html">Forgot Password
                                              </a>
                                <a class="item" href="lockme.html">Lock Me Screen
                                              </a>
                                <a class="item" href="404.html">Error 404
                                              </a>
                                <a class="item" href="comingsoon.html">Coming Soon
                                              </a>
                              </div>
                          
                              <div class="title item">
                                <i class="dropdown icon"></i> Form
                              </div>
                              <div class="content">
                                <a class="item" href="formelements.html">Form Element
                                              </a>
                                <a class="item" href="input.html">Input
                                              </a>
                                <a class="item" href="formvalidation.html">Form Validation
                                              </a>
                          
                                <a class="item" href="editor.html">Html Editor
                                              </a>
                              </div>
                          
                              <div class="title item">
                                <i class="dropdown icon"></i> Tables
                              </div>
                              <div class="content">
                                <a class="item" href="table.html">Static Table
                                              </a>
                                <a class="item" href="datatable.html">Datatable
                                              </a>
                                <a class="item" href="editable.html">Editable
                                              </a>
                              </div>
                              <div class="title item">
                                <i class="dropdown icon"></i> Chart
                              </div>
                              <div class="content">
                                <a class="item" href="chart.html">Charts 1
                                              </a>
                                <a class="item" href="chart-2.html">Charts 2
                                              </a>
                                <a class="item" href="chart-3.html">Charts 3
                                              </a>
                              </div>
                            </div>
                            <div class="ui dropdown item displaynone displayblock">
                              <!--<z>Dashboard</z>-->
                              <i class="icon-portal-sos-15"></i>
                          
                              <div class="menu">
                                <div class="header">
                                  Dashboard
                                </div>
                                <div class="ui divider"></div>
                                <a class="item" href="dashboard.html">Dashboard
                                              </a>
                              </div>
                            </div>
                            <div class="ui dropdown item displaynone displayblock">
                              <!--<z>Layout</z>-->
                              <i class="icon-portal-sos-10"></i>
                          
                              <div class="menu">
                                <div class="header">
                                  Layout
                                </div>
                                <div class="ui divider"></div>
                                <a class="item" href="inbox.html">Inbox
                                              </a>
                                <a class="item" href="mail.html">Mailbox
                                              </a>
                                <a class="item" href="chat.html">Chat
                                              </a>
                                <a class="item" href="contacts.html">Contacts
                                              </a>
                                <a class="item" href="photoeditor.html">Photo Editor
                                              </a>
                                <a class="item" href="calendar.html">Calendar
                                              </a>
                                <a class="item" href="filter.html">Filter
                                              </a>
                                <a class="item" href="todo.html">Todo
                                              </a>
                              </div>
                            </div>
                            <div class="ui dropdown item displaynone displayblock">
                              <!--<z>Pages</z>-->
                              <i class="icon-portal-sos-11"></i>
                          
                              <div class="menu">
                                <div class="header">
                                  Layouts
                                </div>
                                <div class="ui divider"></div>
                                <a class="item" href="sidebar.html">Sidebar
                                              </a>
                                <a class="item" href="menu.html">Nav
                                              </a>
                                <a class="item" href="animatedicon.html">Animated Icon
                                              </a>
                                <a class="item" href="box.html">Box
                                              </a>
                                <a class="item" href="cards.html">Cards
                                              </a>
                                <a class="item" href="color.html">Colors
                                              </a>
                                <a class="item" href="comment.html">Comment
                                              </a>
                                <a class="item" href="embed.html">Embed
                                              </a>
                                <a class="item" href="faq.html">Faq
                                              </a>
                                <a class="item" href="feed.html">Feed
                                              </a>
                                <a class="item" href="gallery.html">Gallery
                                              </a>
                                <a class="item" href="grid.html">Grid
                                              </a>
                                <a class="item" href="header.html">Header
                                              </a>
                                <a class="item" href="timeline.html">Timeline
                                              </a>
                                <a class="item" href="message.html">Message
                                              </a>
                                <a class="item" href="price.html">Price
                                              </a>
                              </div>
                            </div>
                          
                            <div class="ui dropdown item displaynone displayblock">
                              <!--<z>Pages</z>-->
                              <i class="icon-portal-sos-9"></i>
                          
                              <div class="menu">
                                <div class="header">
                                  Layouts
                                </div>
                                <div class="ui divider"></div>
                                <a class="item" href="sidebar.html">Sidebar
                                              </a>
                                <a class="item" href="menu.html">Nav
                                              </a>
                                <a class="item" href="animatedicon.html">Animated Icon
                                              </a>
                                <a class="item" href="box.html">Box
                                              </a>
                                <a class="item" href="cards.html">Cards
                                              </a>
                                <a class="item" href="color.html">Colors
                                              </a>
                                <a class="item" href="comment.html">Comment
                                              </a>
                                <a class="item" href="embed.html">Embed
                                              </a>
                                <a class="item" href="faq.html">Faq
                                              </a>
                                <a class="item" href="feed.html">Feed
                                              </a>
                                <a class="item" href="gallery.html">Gallery
                                              </a>
                                <a class="item" href="grid.html">Grid
                                              </a>
                                <a class="item" href="header.html">Header
                                              </a>
                                <a class="item" href="timeline.html">Timeline
                                              </a>
                                <a class="item" href="message.html">Message
                                              </a>
                                <a class="item" href="price.html">Price
                                              </a>
                              </div>
                            </div>
                          </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <div class="right menu">
    
                                        <!-- Trigger Modal -->
                                        <button id="myBtn" class=" enter btn btn-outline-primary" style="width:150px; height: 40px; margin-top: 15px;">Login</button>
                                        
                                        <!-- The Modal -->
                                        <div id="myModal" class="modal">
                                        
                                            <!-- Modal content -->
                                            <div class="modal-content col-md-2 offset-md-9">
                                            <span class="close">&times;</span>

                                            <div class="login-page">
                                                
                                                <div class="form">   
                                                    <form class="login-form">
                                                    <div class="inputWith">
                                                    <input type="text" placeholder="username" class="borderwhite"/>
                                                    </div>
                                                    <input type="password" placeholder="password" class="borderwhite"/>
                                                    <button class="enter">login</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>    
                                    </div> 
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<script  src="js/sidebar.js"></script>
<script src="js/javascript.js"></script>
</html>
