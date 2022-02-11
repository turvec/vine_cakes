@extends('layouts.home')
@section('content')
	<!-- Photo Slider -->
<div class="photo-slider container-fluid no-padding">
	<!-- Main Carousel -->
	<div id="main-carousel" class="carousel slide carousel-fade" data-ride="carousel">
		<div role="listbox" class="carousel-inner">
			<div class="item active">
				<img width="1920" height="1030" alt="slider" src="images/slider-1.jpg">
				<div class="carousel-caption">
					<img data-animation="animated pulse" src="images/slider-ic.png" alt="slider-ic" width="121" height="124">
					<p data-animation="animated bounceInLeft">Cake for Later Cake </p>
					<p data-animation="animated bounceInRight">as a way of Life</p>
					<a title="Read More" href="#" data-animation="animated bounceInUp">Read More</a>
				</div>
			</div>

			<div class="item">
				<img width="1920" height="1030" alt="slider" src="images/slider-2.jpg">
				<div class="carousel-caption">
					<img data-animation="animated pulse" src="images/slider-ic.png" alt="slider-ic" width="121" height="124">
					<p data-animation="animated bounceInLeft">Cake for Later Cake </p>
					<p data-animation="animated bounceInRight">as a way of Life</p>
					<a title="Read More" href="#" data-animation="animated bounceInUp">Read More</a>
				</div>
			</div>

			<div class="item">
				<img width="1920" height="1030" alt="slider" src="images/slider-3.jpg">
				<div class="carousel-caption">
					<img data-animation="animated pulse" src="images/slider-ic.png" alt="slider-ic" width="121" height="124">
					<p data-animation="animated bounceInLeft">Cake for Later Cake </p>
					<p data-animation="animated bounceInRight">as a way of Life</p>
					<a title="Read More" href="#" data-animation="animated bounceInUp">Read More</a>
				</div>
			</div>
			<a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
				<i class="fa fa-caret-left" aria-hidden="true"></i>
			</a>
			<a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
				<i class="fa fa-caret-right" aria-hidden="true"></i>
			</a>
		</div>
	</div><!-- Main Carousel /-  -->
</div><!-- Photo Slider /- -->

<!-- Welcome Section -->
<div class="welcome-section container-fluid no-padding">
	<div class="section-padding"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-6">
				<img src="images/welcome.png" alt="welcome" width="457" height="700" />
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6 wc-content-box">
				<div class="welcome-header">
					<span>30</span><h5>Years</h5> <h5>Of Excellence</h5>
				</div>
				<div class="welcome-content">
					<div class="section-header left-header">
						<h3>About Us</h3>
						<h5>Our story</h5>
						<img src="images/section-seprator-1.png" alt="section-seprator" width="70" height="3">
						<p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground came a oil that is its a beautiful day Got a dream and we just know now we are gonna make our dream come true so get a witch is shawl on a broomstick you can crawl on were gonna pay.</p>
						<a href="#" title="Read More" class="read-more">Read More</a>
					</div><!-- Section Header /-  -->
				</div>
			</div>
		</div>
	</div><!-- Container /- -->
</div><!-- Welcome Section /- -->

<!-- Counter Section -->
<div class="counter-section container-fluid no-padding">
	<div class="container">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="counter-box">
				<h3><span class="count" id="statistics_count-1" data-statistics_percent="1500"> &nbsp;</span></h3>
				<i class="fa fa-smile-o" aria-hidden="true"></i>
				<p>HAPPY CLIENTS</p>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="counter-box">
				<h3><span class="count" id="statistics_count-2" data-statistics_percent="550">&nbsp;</span></h3>
				<i class="fa fa-coffee" aria-hidden="true"></i>
				<p>COFFEE CUPS</p>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="counter-box">
				<h3><span class="count" id="statistics_count-3" data-statistics_percent="750">&nbsp;</span></h3>
				<i class="fa fa-hourglass-o" aria-hidden="true"></i>
				<p>WORKED HOURS</p>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="counter-box">
				<h3><span class="count" id="statistics_count-4" data-statistics_percent="110">&nbsp;</span></h3>
				<i class="fa fa-home" aria-hidden="true"></i>
				<p>BRANCHES</p>
			</div>
		</div>
	</div>
</div><!-- Counter Section /- -->


<!-- Gallery Section -->
<div class="gallery-section container-fluid no-padding">
	<div class="section-padding"></div>
	<!-- Container -->
	<div class="container">
		<!-- Section Header -->
		<div class="section-header">
			<h3>Our Portfolio</h3>
			<h5>Gallery</h5>
			<img src="images/section-seprator.png" alt="section-seprator" width="169" height="15">
			<p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground came a oil that is its a beautiful day.</p>
		</div><!-- Section Header /-  -->
	</div><!-- Container / -->

	<ul class="portfolio-list no-left-padding">
		<li class="col-md-3 col-sm-4 col-xs-6 no-padding wide design">
			<div class="content-image-block">
				<a href=".html#"><img src="images/gallery-1.jpg" alt="gallery" width="640" height="500"></a>
				<div class="content-block-hover">
					<h3>cream berry</h3>
					<p>The shooting at some food and up through the ground oil.</p>
				</div>
			</div>
		</li>
		<li class="col-md-3 col-sm-4 col-xs-6 no-padding web">
			<div class="content-image-block">
				<a href=".html#"><img src="images/gallery-2.jpg" alt="gallery" width="320" height="500"></a>
				<div class="content-block-hover">
					<h3>cream berry</h3>
					<p>The shooting at some food and up through the ground oil.</p>
				</div>
			</div>
		</li>
		<li class="col-md-3 col-sm-4 col-xs-6 no-padding video">
			<div class="content-image-block">
				<a href=".html#"><img src="images/gallery-3.jpg" alt="gallery" width="320" height="250"></a>
				<div class="content-block-hover">
					<h3>cream berry</h3>
					<p>The shooting at some food and up through the ground oil.</p>
				</div>
			</div>
		</li>
		<li class="col-md-3 col-sm-4 col-xs-6 no-padding design">
			<div class="content-image-block">
				<a href=".html#"><img src="images/gallery-4.jpg" alt="gallery" width="320" height="250"></a>
				<div class="content-block-hover">
					<h3>cream berry</h3>
					<p>The shooting at some food and up through the ground oil.</p>
				</div>
			</div>
		</li>
		<li class="col-md-3 col-sm-4 col-xs-6 no-padding web">
			<div class="content-image-block">
				<a href=".html#"><img src="images/gallery-5.jpg" alt="gallery" width="320" height="250"></a>
				<div class="content-block-hover">
					<h3>cream berry</h3>
					<p>The shooting at some food and up through the ground oil.</p>
				</div>
			</div>
		</li>
		<li class="col-md-3 col-sm-4 col-xs-6 no-padding video">
			<div class="content-image-block">
				<a href=".html#"><img src="images/gallery-6.jpg" alt="gallery" width="320" height="250"></a>
				<div class="content-block-hover">
					<h3>cream berry</h3>
					<p>The shooting at some food and up through the ground oil.</p>
				</div>
			</div>
		</li>
		<li class="col-md-3 col-sm-4 col-xs-6 no-padding design">
			<div class="content-image-block">
				<a href=".html#"><img src="images/gallery-7.jpg" alt="gallery" width="320" height="250"></a>
				<div class="content-block-hover">
					<h3>cream berry</h3>
					<p>The shooting at some food and up through the ground oil.</p>
				</div>
			</div>
		</li>
		<li class="col-md-3 col-sm-4 col-xs-6 no-padding web">
			<div class="content-image-block">
				<a href=".html#"><img src="images/gallery-8.jpg" alt="gallery" width="320" height="250"></a>
				<div class="content-block-hover">
					<h3>cream berry</h3>
					<p>The shooting at some food and up through the ground oil.</p>
				</div>
			</div>
		</li>
	</ul>
	<a href="gallery-2.html" title="View More" class="view-more">View More</a>
	<div class="section-padding"></div>
</div><!-- Gallery Section / -->

<!-- Clients -->
<div class="client container-fluid no-padding">
	<div class="container">
		<div class="clients-carousel">
			<div class="col-md-12 item"><a href="#" title="client"><img src="images/client-1.png" alt="client-1"/></a></div>
			<div class="col-md-12 item"><a href="#" title="client"><img src="images/client-2.png" alt="client-2"/></a></div>
			<div class="col-md-12 item"><a href="#" title="client"><img src="images/client-3.png" alt="client-3"/></a></div>
			<div class="col-md-12 item"><a href="#" title="client"><img src="images/client-4.png" alt="client-4"/></a></div>
			<div class="col-md-12 item"><a href="#" title="client"><img src="images/client-5.png" alt="client-5"/></a></div>
		</div>
	</div><!-- Container /- -->
</div><!-- Client /- -->
<div class="section-padding"></div>

<!-- Testimonial Section -->
<div class="testimonial-section container-fluid no-padding">
	<div class="container">
		<div class="section-header">
			<h3>Talk About Us</h3>
			<h5>Our Clients</h5>
			<img src="images/section-seprator.png" alt="section-seprator" width="169" height="15">
		</div><!-- Section Header /-  -->
		<!-- Main Carousel -->
		<div id="main-carousel2" class="carousel slide carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-carousel2" data-slide-to="0" class="active"></li>
				<li data-target="#main-carousel2" data-slide-to="1"></li>
				<li data-target="#main-carousel2" data-slide-to="2"></li>
			</ol>
			<div role="listbox" class="carousel-inner">
				<div class="item active">
					<div class="testimonial-content">
						<p><span><i class="fa fa-quote-left"></i></span>  The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground came a oil that is its a beautiful day. <span><i class="fa fa-quote-right"></i></span></p>
						<img src="images/testimonial.jpg" alt="testimonial" height="89" width="89" />
						<h3>bradshaw <span>Co-Founder</span></h3>
					</div>
				</div>

				<div class="item">
					<div class="testimonial-content">
						<p><span><i class="fa fa-quote-left"></i></span>  The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground came a oil that is its a beautiful day. <span><i class="fa fa-quote-right"></i></span></p>
						<img src="images/testimonial.jpg" alt="testimonial" height="89" width="89" />
						<h3>bradshaw <span>Co-Founder</span></h3>
					</div>
				</div>

				<div class="item">
					<div class="testimonial-content">
						<p><span><i class="fa fa-quote-left"></i></span>  The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground came a oil that is its a beautiful day. <span><i class="fa fa-quote-right"></i></span></p>
						<img src="images/testimonial.jpg" alt="testimonial" height="89" width="89" />
						<h3>bradshaw <span>Co-Founder</span></h3>
					</div>
				</div>
			</div>
		</div><!-- Main Carousel /-  -->
	</div><!-- Container /- -->
	<div class="section-padding"></div>
</div><!-- Testimonial Section /- -->

<!-- Video Section -->
<div class="video-section container-fluid no-padding">
	<div class="container">
		<div class="video-section-content">
			<h3>Chocolate Cake Tutorial</h3>
			<a class="popup-vimeo" href="https://vimeo.com/45830194"><i class="fa fa-play"></i></a>
			<p>Ingredients</p>
			<div class="video-link-list">
				<div class="col-md-6 col-sm-6 col-xs-6 video-links">
					<ul>
						<li>1 cup (150g) self-raising flour, sifted  </li>
						<li>1/3 cup (50g) cocoa, sifted</li>
						<li>1 cup (220g) caster sugar</li>
					</ul>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6 video-links">
					<ul>
						<li>1/3 cup (80g) butter, softened</li>
						<li>1/2 cup (125ml) milk</li>
						<li>2 eggs, lightly beaten</li>
					</ul>
				</div>
			</div>
		</div>
	</div><!-- Container /- -->
</div><!-- Video Section /- -->

<!-- Latest Blog -->
<div class="latest-blog container-fluid no-padding">
	<div class="section-padding"></div>
	<!-- Container -->
	<div class="container">
		<div class="row">
			<!-- Section Header -->
			<div class="section-header">
				<h3>Latest Post</h3>
				<h5>Our Blog</h5>
				<img width="169" height="15" alt="section-seprator" src="images/section-seprator.png">
				<p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground came a oil that is its a beautiful day.</p>
			</div><!-- Section Header /- -->
			<article class="type-post">
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="entry-cover">
						<a href="blog-post.html" title="Recent Blog">
							<img src="images/latestblog-1.jpg" alt="blog" width="370" height="220">
						</a>
					</div>
					<div class="post-content">
						<div class="latest-blog-content">
							<div class="post-date"><span>25</span><span>Jan</span></div>
							<h3 class="entry-title"><a href="blog-post.html" title="CREAMY WAVES SHIFT"> creamy waves shift</a></h3>
							<div class="entry-meta">
								<a title="Likes" href="#"><i class="fa fa-heart-o"></i>10 Likes</a>
								<a title="Comments" href="#"><i class="fa fa-commenting-o"></i>15 Comments</a>
								<a title="Admin" href="#">Admin</a>
							</div>
						</div>
						<div class="recent-content">
							<div class="entry-content">
								<p>The day he was shooting at some food and up through the ground came a oil that is its a beautiful day came a oil.</p>
							</div>
							<a href="blog-post.html" title="Read More" class="read-more">Read More</a>
						</div>
					</div>
				</div>
			</article>

			<article class="type-post">
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="entry-cover">
						<a href="blog-post.html" title="Recent Blog">
							<img src="images/latestblog-2.jpg" alt="blog" width="370" height="220">
						</a>
					</div>
					<div class="post-content">
						<div class="latest-blog-content">
							<div class="post-date"><span>07</span><span>Feb</span></div>
							<h3 class="entry-title"><a href="blog-post.html" title="THE MUPPET SHOW">the muppet show</a></h3>
							<div class="entry-meta">
								<a title="Likes" href="#"><i class="fa fa-heart-o"></i>10 Likes</a>
								<a title="Comments" href="#"><i class="fa fa-commenting-o"></i>15 Comments</a>
								<a title="Admin" href="#">Admin</a>
							</div>
						</div>
						<div class="recent-content">
							<div class="entry-content">
								<p>The day he was shooting at some food and up through the ground came a oil that is its a beautiful day came a oil.</p>
							</div>
							<a href="blog-post.html" title="Read More" class="read-more">Read More</a>
						</div>
					</div>
				</div>
			</article>

			<article class="type-post">
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="entry-cover">
						<a href="blog-post.html" title="Recent Blog">
							<img src="images/latestblog-3.jpg" alt="blog" width="370" height="220">
						</a>
					</div>
					<div class="post-content">
						<div class="latest-blog-content">
							<div class="post-date"><span>14</span><span>Apr</span></div>
							<h3 class="entry-title"><a href="blog-post.html" title="deserve the cupcake">deserve the cupcake</a></h3>
							<div class="entry-meta">
								<a title="Likes" href="#"><i class="fa fa-heart-o"></i>10 Likes</a>
								<a title="Comments" href="#"><i class="fa fa-commenting-o"></i>15 Comments</a>
								<a title="Admin" href="#">Admin</a>
							</div>
						</div>
						<div class="recent-content">
							<div class="entry-content">
								<p>The day he was shooting at some food and up through the ground came a oil that is its a beautiful day came a oil.</p>
							</div>
							<a href="blog-post.html" title="Read More" class="read-more">Read More</a>
						</div>
					</div>
				</div>
			</article>
			<div class="col-md-12 col-sm-12 col-xs-12 no-padding">
				<a href="blog.html" title="View all post" class="all-post">View all post</a>
			</div>
		</div>
	</div><!-- Container /- -->
	<div class="section-padding"></div>
</div><!-- Latest Blog /- -->


<!-- Call Out -->
<div class="call-out container-fluid no-padding">
	<div class="section-padding"></div>
	<div class="callout-bg-color">
		<div class="col-md-5 img-box">
			<img src="images/call-out.png" alt="call-out" width="273" height="288" />
		</div>
		<div class="col-md-7 callout-content">
			<p>for more infomation,contact us on: (+1-800-23-456-7890)</p>
		</div>
	</div><!-- Container /- -->
	<div class="section-padding"></div>
	<div class="section-padding"></div>
</div><!-- Call Out /- -->
@endsection