<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->

<!-- Mirrored from premiumlayers.com/html/royalbakery/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Dec 2021 16:14:31 GMT -->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>Vine Cakes | Egwurube Ann</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="images/favicon.ico" />

	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114x114-precomposed.png">

	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72x72-precomposed.html">

	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57x57-precomposed.png">

	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">

	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->

</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	<!-- Loader -->
	<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="loader-inner ball-clip-rotate">
				<div></div>
			</div>
		</div>
	</div><!-- Loader /- -->



	<!-- Header -->
	<header class="header-main container-fluid no-padding">
		<!-- Navigation -->
		<div class="menu-block container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<nav class="navbar ow-navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index-2.html" title="Logo"><h3>Royal <img src="images/logo.png" alt="logo"/> Bakers</h3></a>
					</div>
					<div class="add-to-cart">
                        @guest
                        <ul class="nav navbar-nav">
							<li class="dropdown">
								<a aria-expanded="false" aria-haspopup="true" role="button"  class="btn dropdown-toggle" title="Pro" >PRO</a>
                                <i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">
									<li><a href="{{route('login')}}" title="Portfolio grid">Log In</a></li>
                                    <li><a href="{{route('register')}}" title="Portfolio grid">Register</a></li>
								</ul>
							</li>
						</ul>
                        @endguest
                        @auth
                        <ul class="cart">
							<li >
								<a aria-expanded="true" aria-haspopup="true" data-toggle="dropdown" class="btn dropdown-toggle" title="Log Out" href="{{route('logout')}}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log Out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
							</li>
						</ul>
                        @endauth
					</div>
					<div id="navbar" class="navbar-collapse collapse navbar-right">
						<ul class="nav navbar-nav">
							<li class="dropdown active">
								<a href="{{route('welcome')}}"  class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">
									<li><a href="{{route('welcome')}}">Home Page</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="{{route('about')}}"  class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">About us</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">
									<li><a href="{{route('about')}}" title="About">About us</a></li>
								</ul>
							</li>
							<li class="dropdown"><a href="{{route('services')}}" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
                                <i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">
									<li><a href="{{route('services')}}" title="Services">Services</a></li>
								</ul>
                            </li>
							<li class="dropdown"><a href="{{route('gallery')}}" title="explore" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Explore</a>
                                <i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">
									<li><a href="{{route('gallery')}}" title="Explore">Explore</a></li>
								</ul>
                            </li>
							<li class="dropdown">
								<a href="{{route('blog')}}" title="Latest News" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">
									<li><a href="{{route('blog')}}" title="Blog Post">Blog Post</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="{{route('contact')}}" title="Latest News" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Contact</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">
									<li><a href="{{route('contact')}}" title="Contact 2">Contact Us</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</nav><!-- Navigation -->
			</div>
		</div><!-- Container /- -->
	</header><!-- Header /- -->

	<main class="site-main page-spacing">

        @yield('content');

		<!-- Newsletter Box -->
		<div class="subscribe-section container-fluid" id="subscribe-section">
			<!-- Container -->
			<div class="container">
				<h4 class="subscribe-title col-md-5 col-sm-4 col-xs-12">subscribe to our newsletter</h4>
				<form class="col-md-7 col-sm-8 col-xs-12">
					<div class="col-md-9 col-sm-8 col-xs-8"><input type="text" placeholder="Your Email Here" name="email"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
					<div class="col-md-3 col-sm-4 col-xs-4 no-left-padding"><input type="submit" value="subscribe" class="btn-default" name="subscribe"></div>
				</form>
			</div><!-- Container /- -->
		</div><!-- Newsletter Box /- -->
	</main>

	<footer class="footer-main container-fluid no-padding">
		<div class="footer-content container">
			<div class="col-md-4 col-sm-6 col-xs-6">
				<div class="about-footer">
					<h3>Royal<img src="images/logo.png" alt="logo"/>Bakers</h3>
					<p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground oil.</p>
					<a href="contact-2.html" title="Contact" class="about-links">Contact</a>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 col-xs-6">
				<div class="about-footer">
					<h5>Order online</h5>
					<p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground oil.</p>
					<a href="#" title="Order Now" class="about-links order">Order Now</a>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 col-xs-6">
				<div class="about-footer">
					<h5>Contact Us Today</h5>
					<p>Call Us 666 777 888 OR 111 222 333 Send an Email on contact@cakeshop.com Visit Us 123 Fake Street- London 12358 United Kingdom</p>
					<ul>
						<li><a href="#" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" title="Google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- Bottom Footer -->
	<div class="bottom-footer container-fluid no-padding">
		<div class="container">
			<div class="footer-copyright">
				<p>&copy; Copyrights 2016 Royal Bakers. All Rights Reserved</p>
			</div>
			<div class="footer-breadcrumb pull-right">
				<ol class="breadcrumb">
					<li title="Home" class="active">Home</li>
					<li><a title="About Us" href="{{route('about')}}">About</a></li>
					<li><a title="Services" href="{{route('services')}}">Services</a></li>
					<li><a title="explore" href="{{route('gallery')}}">Explore</a></li>
					<li><a title="Blog" href="{{route('blog')}}">Blog</a></li>
					<li><a title="Contact" href="{{route('contact')}}">Contact</a></li>
				</ol>
			</div>
		</div>
	</div><!-- Bottom Footer /- -->

	<!-- JQuery v1.11.3 -->
	<script src="js/jquery.min.js"></script>

	<!-- Library - Js -->
	<script src="libraries/lib.js"></script><!-- Bootstrap JS File v3.3.5 -->

	<!-- Library - Google Map API -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW40y4kdsjsz714OVTvrw7woVCpD8EbLE"></script>

	<!-- Library - Theme JS -->
	<script src="js/functions.js"></script>
</body>

<!-- Mirrored from premiumlayers.com/html/royalbakery/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Dec 2021 16:14:51 GMT -->
</html>
