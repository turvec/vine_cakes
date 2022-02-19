@extends('layouts.home')
@section('content')
<!-- Page Banner -->
<div class="page-banner container-fluid no-padding">
    <div class="page-banner-content">
        <h3>Services</h3>
    </div>
</div><!-- Page Banner /- -->

<!-- Welcome Section 1 -->
<div class="welcome-section-1 container-fluid no-padding">
    <div class="section-padding"></div>
    <div class="container">
        <div class="section-header">
            <h3>Welcome To Cake</h3>
            <h5>Our Story</h5>
            <img src="images/section-seprator.png" alt="section-seprator" width="169" height="15">
            <p>{{$agenda->qoute}}</p>
        </div><!-- Section Header /-  -->
        <div class="col-md-7 col-sm-7 col-xs-6 wc-img-box">
            <img src="images/welcome-1.png" alt="welcome" width="754" height="502" />
        </div>

        <div class="col-md-5 col-sm-5 col-xs-6">
            <div class="mission-content">
                <img src="images/welcome-ic-1.png" alt="welcome-ic" width="71" height="71">
                <h3>Our Mission</h3>
                <p>{{$agenda->mission}}</p>
            </div>

            <div class="mission-content">
                <img src="images/welcome-ic-2.png" alt="welcome-ic" width="71" height="71">
                <h3>Our vision</h3>
                <p>{{$agenda->vision}}</p>
            </div>

            <div class="mission-content">
                <img src="images/welcome-ic-3.png" alt="welcome-ic" width="71" height="71">
                <h3>What We do</h3>
                <p>{{$agenda->aim}}</p>
            </div>
        </div>
    </div><!-- Container /- -->
    <div class="section-padding"></div>
</div><!-- Welcome Section 1 /- -->

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

<!-- Menu Section -->
<div class="menu-section container-fluid no-padding">
    <div class="section-padding"></div>
    <div class="container">
        <div class="section-header">
            <h3>Our Menu</h3>
            <h5>CREAMY DISHES</h5>
            <img src="images/section-seprator.png" alt="section-seprator" width="169" height="15">
            <p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground came a oil that is its a beautiful day.</p>
        </div><!-- Section Header /-  -->
    </div><!-- Container /- -->

    @foreach ($services as $service)
    <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="menu-box">
            <img src="/serviceimage/{{$service->image}}" alt="menu" height="150px" width="300px" />
            <h3>{{$service->name}} <span>${{$service->price}}</span></h3>
            <p>{{$service->description}}</p>
            <a href="#" title="Apply Now!!">Apply Now!!</a>
        </div>
    </div>
    @endforeach
</div><!-- Menu Section /- -->

<!-- Order Section 1 -->
<div class="order-section order-section-1 container-fluid no-padding">
    <div class="section-padding"></div>
    <div class="container">
        <div class="section-header">
            <h3>Want Any of Our Services?</h3>
            <h5>Apply Now!</h5>
            <img src="images/section-seprator.png" alt="section-seprator" width="169" height="15">
            <p>Send us your info and what you applying for and we will keep you noted</p>
        </div><!-- Section Header /-  -->

        <form action="{{route('upload_application')}}" method="POST">
            @csrf
        <div class="col-md-3 col-sm-6 col-xs-6">
            <input name="name" type="text" class="form-control" placeholder="Name *" required />
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <input name="email" type="email" class="form-control" placeholder="Email Address *" required />
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <input name="phone" type="tel" class="form-control" placeholder="Phone Number *" required />
        </div>
        <div class="form-group col-md-3 col-sm-6 col-xs-6">
            <select name="subject">
                <option>Subject</option>
                @foreach ($services as $s)
                <option>{{$s->name}}</option>
                @endforeach
                <option>More than one</option>
                <option>Apply for all</option>
            </select>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <textarea name="message" class="form-control" rows="4" placeholder="Attach a Message? *"></textarea>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 order-links">

            <a  title="Apply" class="order-now">
                <button type="submit" style="background-color: transparent;border:none">
                Apply
            </button>
            </a>

        </div>
        <div class="working-hours">
            <p><span>working hours:</span> monday to friday : 8.30AM - 10.30PM</p>
            <p>saturday : 9.00AM - 10.30PM</p>
            <p>sunday : <span>closed</span></p>
        </div>
    </form>
    </div><!-- Container /- -->
    <div class="section-padding"></div>
</div><!-- Order Section 1 /- -->

<div class="section-padding"></div>
@endsection
