<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Login</title>
	<link rel="shortcut icon" href="{!! asset('favicon.ico') !!}">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
	<link rel="stylesheet" href="{!! asset('public/css/bootstrap.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('public/css/bootstrap-responsive.min.css') !!}">
	
	<link rel="stylesheet" href="{!! asset('public/css/font-awesome.css') !!}">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

	<link rel="stylesheet" href="{!! asset('public/css/style.css') !!}">
	<link rel="stylesheet" href="{!! asset('public/css/pages/signin.css') !!}">	
</head>

<body>
	
<div class="navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">					
			
			<a class="brand" href="#">
				<img src="{!! asset('public/img/emaar.png') !!}" alt="emaar logo" width="90" height="90">
			</a>								
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->
@yield('content')

<script type="text/javascript" src="{!! asset('public/js/jquery-1.7.2.min.js') !!}"></script> 
<script type="text/javascript" src="{!! asset('public/js/bootstrap.js') !!}"></script> 
<script type="text/javascript" src="{!! asset('public/js/signin.js') !!}"></script> 

</body>

</html>
