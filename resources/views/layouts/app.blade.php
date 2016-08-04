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
                        <ul class="nav pull-right" style="background: #08659B;">
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                 class="icon-cog"></i> Howdy, {{ Auth::user()->first_name.' '.Auth::user()->last_name }} <b class="caret"></b></a>
                              <ul class="dropdown-menu">
                                 <li><a href="javascript:;">Profile</a></li>
                                 <li><a href="javascript:;">Password</a></li>
                                 <li><a href="{{ url('/logout') }}">Logout</a></li>
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
      <?php $current_route = Route::getCurrentRoute()->getPath(); ?>        
         <div class="subnavbar">
           <div class="subnavbar-inner">
             <div class="container">
               <ul class="mainnav">
                 <li class="@if(in_array($current_route, array('/'))) active @endif"><a href="{{ url('/') }}"><i class="icon-home"></i><span>Home</span> </a> </li>
                 <li class="@if(in_array($current_route, array('admin/workforce', 'admin/workforce/add', 'admin/workforce/update/{id}'))) active @endif"><a href="{{ url('admin/workforce') }}"><i class="icon-group"></i><span>Workforce</span> </a> </li>
                 <li class=""><a href="#"><i class="icon-user"></i><span>Agent Profiles</span> </a></li>
                 <li class=""><a href="#"><i class="icon-sitemap"></i><span>Departments</span> </a> </li>
                 <li class=""><a href="#"><i class="icon-comments-alt"></i><span>Announcements</span> </a> </li>                 
               </ul>
             </div>    
           </div>  
         </div>
         <!-- /end subnavbar -->
      <div class="main">
        <div class="main-inner">
          <div class="container">
            <div class="row">  
                <div class="span12">
                  @if(Session::has('message'))
                   <div class="alert alert-info">
                      <button class="close" data-dismiss="alert" type="button">&times;</button>
                      {{ Session::get('message') }}
                   </div>
                   @endif
                   @if(Session::has('success'))
                   <div class="alert alert-success">
                      <button class="close" data-dismiss="alert" type="button">&times;</button>
                      {{ Session::get('success') }}
                   </div>
                   @endif
                   @if(Session::has('error'))
                   <div class="alert alert-error">
                      <button class="close" data-dismiss="alert" type="button">&times;</button>
                      {{ Session::get('error') }}
                   </div>
                   @endif
                  @if (count($errors) > 0)
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif            
                  @yield('content')
                </div>
              </div>
          </div>
        </div>
      </div>
      <!-- JavaScripts -->
      <script type="text/javascript" src="{!! asset('public/js/bootstrap.js') !!}"></script>    
      <script type="text/javascript" src="{!! asset('public/js/base.js') !!}"></script>    
   </body>
</html>