@extends('layouts.home')
@section('content')
<!-- Page Banner -->
<div class="page-banner container-fluid no-padding">
    <div class="page-banner-content">
        <h3>Services</h3>
    </div>
</div><!-- Page Banner /- -->

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
<div class="section-padding"></div>
@endsection
