<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>EMAAR - HR Workforce Tool</title>
      <link rel="shortcut icon" href="{!! asset('favicon.ico') !!}">
      <link rel="stylesheet" href="{!! asset('public/css/bootstrap.min.css') !!}">
      <link rel="stylesheet" href="{!! asset('public/css/bootstrap-responsive.min.css') !!}">
      <link rel="stylesheet" href="{!! asset('public/css/font-awesome.css') !!}">
      <link rel="stylesheet" href="{!! asset('public/css/style.css') !!}">
      <link rel="stylesheet" href="{!! asset('public/css/pages/dashboard.css') !!}">
      <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
      <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
      <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <script type="text/javascript" src="{!! asset('public/js/jquery-1.7.2.min.js') !!}"></script>   
   </head>
   <body id="app-layout">
      <div class="navbar navbar-fixed-top" style="height: 70px;">
         <div class="navbar-inner">
            <div class="container">
               <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
               <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> 
               </a> 
               <div class="row">
                  <div class="span1">
                     <img src="{!! asset('public/img/emaar.png') !!}" alt="emaar logo" width="50" height="50">
                  </div>
                  <div class="span11">
                     <div class="nav-collapse">
                        <ul class="nav pull-right">
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                 class="icon-cog"></i> Howdy, {{ Auth::user()->name }} <b class="caret"></b></a>
                              <ul class="dropdown-menu">
                                 <li><a href="javascript:;">Profile</a></li>
                                 @if (! Auth::guest())
                                 <li><a href="{{ url('/logout') }}">Logout</a></li>
                                 @else
                                 <li><a href="{{ url('/login') }}">Login</a></li>
                                 @endif
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!--/.nav-collapse --> 
            </div>
            <!-- /container --> 
         </div>
         <!-- /navbar-inner --> 
      </div>
      <!-- /navbar -->  
      <!-- subnavbar -->    
         <div class="subnavbar">
           <div class="subnavbar-inner">
             <div class="container">
               <ul class="mainnav">
                 <li class="active"><a href="#"><i class="icon-home"></i><span>Home</span> </a> </li>
                 <li><a href="#"><i class="icon-group"></i><span>Workforce</span> </a> </li>
                 <li><a href="#"><i class="icon-user"></i><span>Agent Profiles</span> </a></li>
                 <li><a href="#"><i class="icon-sitemap"></i><span>Departments</span> </a> </li>
                 <li><a href="#"><i class="icon-comments-alt"></i><span>Announcements</span> </a> </li>                 
               </ul>
             </div>    
           </div>  
         </div>
         <!-- /end subnavbar -->
      <div class="main">
        <div class="main-inner">
          <div class="container">
            <div class="row">
                @yield('content')
            </div>
          </div>
        </div>
      </div>
      <!-- JavaScripts -->
      <script type="text/javascript" src="{!! asset('public/js/bootstrap.js') !!}"></script>    
      <script type="text/javascript" src="{!! asset('public/js/base.js') !!}"></script>    
   </body>
</html>