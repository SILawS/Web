<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- CSS Styles -->
    <link href="{!!url('css/bootstrap.min.css')!!}" rel="stylesheet">
    <link href="{!!url('css/font-awesome.min.css')!!}" rel="stylesheet">
    <link href="{!!url('css/style.css')!!}" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

	<header id="header" class="dark-bg">
		<div class="top-bar hidden-xs hidden-sm">
			<div class="container">
				<div class="row">
					<ul class="nav location-info pull-left">
						<li>
							<i class="fa fa-map-marker"></i><span>Location:</span> Lorem Street 2020, Ipsum City 1000
						</li>
					</ul>
					<ul class="nav contact-info pull-right">
						<li>
							<i class="fa fa-clock-o"></i><span>Mon - Sat:</span> 09:00 - 18:00
						</li>
						<li>
							<i class="fa fa-phone"></i><span>Call us at:</span> 1800-222-222
						</li>
					</ul>
				</div>
			</div>
		</div>

  		<div class="main-menu">
  			<div class="container">
  				<div class="row">
  					<div class="logo">
	    				<a href="{!!url('index.html')!!}"><img src="{!!url('images/logo.png')!!}" alt="Logo"></a>
	    			</div>
		    		<nav>
		    			<div class="mobile-toggle" data-toggle="collapse" data-target="#myNavbar">
		    				<div class="bar-1"></div>
		    				<div class="bar-2"></div>
		    				<div class="bar-3"></div>
		    			</div>
		    			<div class="collapse navbar-collapse" id="myNavbar">
			    			<ul class="nav">
			    				<li class="active"><a href="{!!url('index.html')!!}">Home</a></li>
			    				<li><a href="{!!url('about.html')!!}">About us</a></li>
			    				<li><a href="{!!url('services.html')!!}">Our Services</a></li>
			    				<li><a href="{!!url('#contact')!!}" class="btn btn-primary outline">Free Consultation</a></li>
			    			</ul>
		    			</div>
		    		</nav>
  				</div>
  			</div>
  		</div>
  	</header>

  	@yield('content')

	<footer>
		<div class="container">
			<div class="row">
				<p class="copyright">© 2016. All rights reserved.</p>
				<ul class="nav menu">
					<li><a href="{!!url('index.html')!!}">Home</a></li>
					<li><a href="{!!url('#header')!!}">Terms of service</a></li>
					<li><a href="{!!url('#header')!!}">Privacy policy</a></li>
				</ul>
			</div>
		</div>
	</footer>

	<script src="{!!url('js/jquery-2.2.0.min.js')!!}"></script>
	<script src="{!!url('js/bootstrap.min.js')!!}"></script>
	<script src="{!!url('js/waypoints.min.js')!!}"></script>
	<script src="{!!url('js/jquery.counterup.min.js')!!}"></script>
	<script src="{!!url('js/scripts.js')!!}"></script>
  </body>
</html>