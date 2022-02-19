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

    <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="menu-box">
            <img src="images/menu-1.png" alt="menu" />
            <h3>CHOCOLATE FLASH <span>$20.00</span></h3>
            <p>The day he wane day he was shooting at some food and up through the ground.</p>
            <a href="#" title="Order Now">Order Now</a>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="menu-box">
            <img src="images/menu-2.png" alt="menu" />
            <h3>ROSE CREAMY <span>$25.00</span></h3>
            <p>The day he wane day he was shooting at some food and up through the ground.</p>
            <a href="#" title="Order Now">Order Now</a>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="menu-box">
            <img src="images/menu-3.png" alt="menu" />
            <h3>VELVET CAKE <span>$32.00</span></h3>
            <p>The day he wane day he was shooting at some food and up through the ground.</p>
            <a href="#" title="Order Now">Order Now</a>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="menu-box">
            <img src="images/menu-4.png" alt="menu" />
            <h3>FLOWERED CAKE <span>$38.00</span></h3>
            <p>The day he wane day he was shooting at some food and up through the ground.</p>
            <a href="#" title="Order Now">Order Now</a>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="menu-box">
            <img src="images/menu-5.png" alt="menu" />
            <h3>ROSEBERRY CAKE <span>$48.00</span></h3>
            <p>The day he wane day he was shooting at some food and up through the ground.</p>
            <a href="#" title="Order Now">Order Now</a>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="menu-box">
            <img src="images/menu-6.png" alt="menu" />
            <h3>CHOCOLATE BERRY CAKE <span>$54.00</span></h3>
            <p>The day he wane day he was shooting at some food and up through the ground.</p>
            <a href="#" title="Order Now">Order Now</a>
        </div>
    </div>
</div><!-- Menu Section /- -->

<!-- Order Section 1 -->
<div class="order-section order-section-1 container-fluid no-padding">
    <div class="section-padding"></div>
    <div class="container">
        <div class="section-header">
            <h3>Choose your Flavour</h3>
            <h5>Order Online</h5>
            <img src="images/section-seprator.png" alt="section-seprator" width="169" height="15">
            <p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground came a oil that is its a beautiful day.</p>
        </div><!-- Section Header /-  -->

        <form>
        <div class="col-md-4 col-sm-4 col-xs-4">
            <input type="text" class="form-control" placeholder="Name *" required />
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4">
            <input type="text" class="form-control" placeholder="Phone Number *" required />
        </div>
        <div class="form-group col-md-4 col-sm-4 col-xs-4">
            <select>
                <option>FLAVOURS</option>
                <option>FLAVOURS</option>
                <option>FLAVOURS</option>
                <option>FLAVOURS</option>
            </select>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <textarea class="form-control" rows="4" placeholder="Your Address *"></textarea>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 order-links">
            <a href="#" title="Order Now" class="order-now">Order Now</a>
            <a href="#" title="Free Delivery" class="free-delivery">Free Delivery</a>
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
