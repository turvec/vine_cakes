@extends('layouts.home')
@section('content')
<!-- Page Banner -->
<div class="page-banner container-fluid no-padding">
    <div class="page-banner-content">
        <h3>Contact</h3>
    </div>
</div><!-- Page Banner /- -->

<!-- Contact Us 2 -->
<div class="contact-us-1 contact-us-2 container-fluid no-padding">
    <!-- Map Section -->
    <!--  Map Section /- -->
    <!-- Container -->
    <div class="container">
        <div class="section-padding"></div>
        <div class="section-header">
            <h3>Our Menu</h3>
            <h5>CREAMY DISHES</h5>
            <img src="images/section-seprator-1.png" alt="section-seprator" width="70" height="3">
            <p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground came a oil that is its a beautiful day.</p>
        </div><!-- Section Header /-  -->
        <form action="{{route('upload_contact')}}" method="POST">
            @csrf
            <div class="form-group col-md-6 col-sm-6 col-xs-6">
                <label>Your Name</label>
                <input type="text" class="form-control" id="input_fname" name="name" placeholder="Enter Your Name*" required>
            </div>
            <div class="form-group col-md-6 col-sm-6 col-xs-6">
                <label>Your Email</label>
                <input type="text" class="form-control" id="input_email" name="email" placeholder="Enter Your E-mail*" required>
            </div>
            <div class="form-group col-md-6 col-sm-6 col-xs-6">
                <label>Your Phone</label>
                <input type="phone" class="form-control" id="input_phone" name="phone" placeholder="Enter Your Tel no*" required>
            </div>
            <div class="form-group col-md-6 col-sm-6 col-xs-6">
                <label>Your Subject</label>
                <input type="text" class="form-control" id="input_subject" name="subject" placeholder="Subject" required>
            </div>
            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                <label>Your Message</label>
                <textarea class="form-control" rows="8" id="textarea_message" name="message" placeholder="Message"></textarea>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 order-links">

                <a  title="Apply" class="order-now">
                    <button type="submit" style="background-color: transparent;border:none">
                    Apply
                </button>
                </a>

            </div>
            <div id="alert-msg" class="alert-msg"></div>
        </form>
    </div><!-- Container /- -->
    <div class="section-padding"></div>
</div><!-- Contact Us 2 /- -->

@endsection
