@extends('layouts.home')
@section('content')
<!-- Page Banner -->
<div class="page-banner container-fluid no-padding">
    <div class="page-banner-content">
        <h3>About Us</h3>
    </div>
</div><!-- Page Banner /- -->

<!-- Welcome Section -->
<div class="welcome-section container-fluid no-padding">
    <div class="section-padding"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <img src="/storyimage/{{$story->image}}" alt="welcome" width="457" height="700" />
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 wc-content-box">
                <div class="welcome-header">
                    <span>{{$story->age}}</span><h5>Years</h5> <h5>Of Excellence</h5>
                </div>
                <div class="welcome-content">
                    <div class="section-header left-header">
                        <h3>About Us</h3>
                        <h5>Our story</h5>
                        <img src="images/section-seprator-1.png" alt="section-seprator" width="70" height="3">
                        <p>{{$story->story}}</p>
                    </div><!-- Section Header /-  -->
                </div>
            </div>
        </div>
    </div><!-- Container /- -->
</div><!-- Welcome Section /- -->


<!-- Team Section -->
<div class="team-section container-fluid no-padding">
    <div class="section-padding"></div>
    <div class="container">
        <div class="row">
            <!-- Main Carousel -->
            <div id="main-carousel1" class="carousel slide carousel-fade" data-ride="carousel">
                <div role="listbox" class="carousel-inner">
                    @foreach ($teams as $team)
                    <div class="item {{ $loop->first ? 'active' : '' }}">
                        <div class="team-content">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <img src="/teamimage/{{$team->image}}" alt="team" width="468" height="595" />
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="section-header left-header">
                                    <h3>Meet Our Team</h3>
                                    <h5>{{$team->position}}</h5>
                                    <img src="images/section-seprator-1.png" alt="section-seprator" width="70" height="3">
                                    <p>{{$team->comment}}</p>
                                </div><!-- Section Header /-  -->
                                <div class="team-contact-info">
                                    <h5>{{$team->name}}</h5>
                                    <ul>
                                        <li><a href="#" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="Google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <p><a href="mailto:info@domain.com" title="info@domain.com"><i class="fa fa-envelope" aria-hidden="true"></i>{{$team->email}}</a></p>
                                    <p><a href="tel:1-800-23-456-7890" title="1-800-23-456-7890"><i class="fa fa-phone" aria-hidden="true"></i>{{$team->phone}}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="left carousel-control" href="#main-carousel1" role="button" data-slide="prev">
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                </a>
                <a class="right carousel-control" href="#main-carousel1" role="button" data-slide="next">
                    <i class="fa fa-caret-left" aria-hidden="true"></i>
                </a>
            </div><!-- Main Carousel /-  -->
        </div>
    </div><!-- Container /- -->
</div><!-- Team Section /- -->

<!-- Testimonial Section -->
<div class="testimonial-section container-fluid no-padding">
    <div class="section-padding"></div>
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
                @foreach ($reviews as $review)
                <div class=" item {{ $loop->first ? 'active' : '' }}">
                    <div class="testimonial-content">
                        <p><span><i class="fa fa-quote-left"></i></span> {{$review->comment}} <span><i class="fa fa-quote-right"></i></span></p>
                        <img src="/reviewimage/{{$review->image}}" alt="testimonial" height="89" width="89" />
                        <h3>{{$review->name}} <span>{{$review->profession}}</span></h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div><!-- Main Carousel /-  -->
    </div><!-- Container /- -->
    <div class="section-padding"></div>
</div><!-- Testimonial Section /- -->
@endsection
