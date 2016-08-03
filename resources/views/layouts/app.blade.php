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
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> 
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> 
        </a>                    
        <a class="brand" href="index.html"><img src="{!! asset('public/img/emaar.png') !!}" alt="emaar logo" width="90" height="90"> </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-cog"></i> Account <b class="caret"></b></a>
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
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="active"><a href="index.html"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <li><a href="reports.html"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
        <li><a href="guidely.html"><i class="icon-facetime-video"></i><span>App Tour</span> </a></li>
        <li><a href="charts.html"><i class="icon-bar-chart"></i><span>Charts</span> </a> </li>
        <li><a href="shortcodes.html"><i class="icon-code"></i><span>Shortcodes</span> </a> </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="icons.html">Icons</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="pricing.html">Pricing Plans</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="signup.html">Signup</a></li>
            <li><a href="error.html">404</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
    @yield('content')

    <!-- JavaScripts -->
    <script type="text/javascript" src="{!! asset('public/js/bootstrap.js') !!}"></script>    
    <script type="text/javascript" src="{!! asset('public/js/base.js') !!}"></script>    
</body>
</html>
