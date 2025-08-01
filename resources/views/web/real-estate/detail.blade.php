@extends('web.includes.master')
@section('addStyle')
    <style>
        .haru-page-title-section .haru-breadcrumb-wrapper {
            padding-bottom: 0%;
        }
        .haru-page-title-section .haru-page-title-wrapper {
            padding-top: 6%;
        }
        .vc_custom_1533714072840 {
            padding-top: 1% !important;
            padding-bottom: 1% !important;
            background-color: #f8f8f8 !important;
        }
    </style>
@endsection
@section('content')

<main id="main" class="site-main" role="main">
    <div class="haru-page-title-section" style="background-image: url({{URL::to('/public/images')}}/bg-page-title.jpg);">
        <section class="haru-page-title-wrapper page-title-wrap-bg">
            <div class="container">
                <div class="page-title-inner">
                    <div class="block-center-inner">
                        <h2>Villa in Downtown</h2>
                    </div>
                </div>
            </div>
        </section>
                
        <div class="haru-breadcrumb-wrapper breadcrumb-archive-product-wrap">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="{{route('home')}}" class="home">Home</a></li>
                    <li><a href="{{route('real-estate')}}" class="home">Real Estate</a></li>
                    <li><span>Villa in Downtown</span></li>
                </ul>            
            </div>
        </div>


        <div class="wpb_wrapper">
            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">                        
                            <div class=" ">
                                <div class="images-gallery-shortcode-wrap slick_2 " data-columns="2">
                                    <div class="images-list slider-for">
                                        <div class="image-item image-col-2">
                                            <div class="slide-item">
                                                <img decoding="async" src="{{URL::to('/public')}}/images/properties/1.jpg" alt="Themeforest">
                                            </div>
                                        </div>
                                        <div class="image-item image-col-2">
                                            <div class="slide-item">
                                                <img decoding="async" src="{{URL::to('/public')}}/images/properties/2.jpg" alt="Codecanyon">
                                            </div>
                                        </div>
                                        <div class="image-item image-col-2">
                                            <div class="slide-item">
                                                <img decoding="async" src="{{URL::to('/public')}}/images/properties/3.jpg" alt="Photodune">
                                            </div>
                                        </div>
                                        <div class="image-item image-col-2">
                                            <div class="slide-item">
                                                <img decoding="async" src="{{URL::to('/public')}}/images/properties/4.jpg" alt="Photodune">
                                            </div>
                                        </div>
                                        <div class="image-item image-col-2">
                                            <div class="slide-item">
                                                <img decoding="async" src="{{URL::to('/public')}}/images/properties/5.jpg" alt="Photodune">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-count-wrap"></div>
                                </div>            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="vc_row-full-width vc_clearfix"></div>

    <div data-vc-full-width="false" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_row-has-fill" style="text-align: center; position: relative; box-sizing: border-box; width: 1905px; max-width: 1905px; padding-left: 367.5px; padding-right: 367.5px;">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1533614458371">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-5">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper enquiry-form">
                                                    <h3 style="text-align: left" class="vc_custom_heading fw-700 fs-34 vc_custom_1534824417093 heading_style_14">Request More Info</h3>
                                                    <p class="text-left">Share your details and we’ll get back to you with everything you need.</p>
                                                    <div role="form" class="wpcf7" id="wpcf7-f2606-p2594-o1" lang="en-US" dir="ltr">
                                                        <div class="screen-reader-response">
                                                            <p role="status" aria-live="polite" aria-atomic="true"></p> 
                                                            <ul></ul>
                                                        </div>
                                                        <form action="/formota/contact-us-2/#wpcf7-f2606-p2594-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                                                            <div class="contact-form">
                                                                <div class="contact-name">
                                                                    <div>
                                                                        <span class="wpcf7-form-control-wrap your-name">
                                                                            <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your name *">
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="contact-email">
                                                                    <div>
                                                                        <span class="wpcf7-form-control-wrap your-email">
                                                                            <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your email *">
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="contact-subject">
                                                                    <div>
                                                                        <span class="wpcf7-form-control-wrap your-subject">
                                                                            <input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Subject">
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="contact-message">
                                                                    <div>
                                                                        <span class="wpcf7-form-control-wrap your-message">
                                                                            <textarea name="your-message" cols="40" rows="5" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="contact-submit">
                                                                    <input type="submit" value="Send Message" class="wpcf7-form-control has-spinner wpcf7-submit">
                                                                    <span class="wpcf7-spinner"></span>
                                                                </div>
                                                            </div>
                                                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-7">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">                    
                                                    <div class="  ">
                                                        <div class="accordion-shortcode-wrap style_1 ">
                                                            <div class="accordion-shortcode-content">
                                                                <div class="panel-group text-left" id="accordion-2991721332">
                                                                    <div class="panel">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a data-toggle="collapse" class="in" data-parent="#accordion-2991721332" href="#col-description" aria-expanded="true">Description</a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="col-description" class="panel-collapse collapse in" aria-expanded="true" style="">
                                                                            <div class="panel-body">
                                                                                <p>Flash Film  is an award winning creative production company working for various clients and agencies in both New York &amp; LA</p>
                                                                                <p>Suspe ndisse suscipit sagittis leo sit met condimentum estibulum issim Lorem ipsum dolor sit amet, consectetur cing elit. Suspe ndisse suscipit sagittis leo sit met condimentum estibulum issim Lorem ipsum dolor sit amet, consectetur cing elit. tibulum issim Lorem ipsum dolor sit amet, consectetur Suspe ndisse suscipit sagittis leo sit met condimentum estibulum issim Lorem ipsum dolor...</p> 
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a data-toggle="collapse" class="collapsed" data-parent="#accordion-2991721332" href="#col-details" aria-expanded="false">Property Details</a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="col-details" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                                            <div class="panel-body">
                                                                                <table class="table">
                                                                                    <tr>
                                                                                        <td>
                                                                                            Type
                                                                                        </td>
                                                                                        <th>
                                                                                            Villa
                                                                                        </th>
                                                                                        <td>
                                                                                            Purpose
                                                                                        </td>
                                                                                        <th>
                                                                                            For Sale
                                                                                        </th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            Reference no.
                                                                                        </td>
                                                                                        <th>
                                                                                            Bayut - VI35481S
                                                                                        </th>
                                                                                        <td>
                                                                                            Completion
                                                                                        </td>
                                                                                        <th>
                                                                                            Ready
                                                                                        </th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            Furnishing
                                                                                        </td>
                                                                                        <th>
                                                                                            Unfurnished
                                                                                        </th>
                                                                                        <td>
                                                                                            TruCheck™ on
                                                                                        </td>
                                                                                        <th>
                                                                                            1 August 2025
                                                                                        </th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            Average Rent
                                                                                        </td>
                                                                                        <th>
                                                                                            AED 1,148,794 Yearly
                                                                                        </th>
                                                                                        <td>
                                                                                            Added on
                                                                                        </td>
                                                                                        <th>
                                                                                            23 May 2025
                                                                                        </th>
                                                                                    </tr>
                                                                                </table>  
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a data-toggle="collapse" class="collapsed" data-parent="#accordion-2991721332" href="#col-features" aria-expanded="false">Property Features</a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="col-features" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                                            <div class="panel-body">
                                                                                <p>
                                                                                    - 4 Bedroom<br>
                                                                                    - 5 Bathrooms<br>
                                                                                    - Built up 5200 sq ft<br>
                                                                                    - Plot Size 8800 sq ft<br>
                                                                                    - Option to extend plot 1000 sq ft<br>
                                                                                    - 2 Lounges<br>
                                                                                    - Closed Kitchen<br>
                                                                                    - Dining Room<br>
                                                                                    - Dual Garage<br>
                                                                                    - Skyline Views<br>
                                                                                    - Private pool<br>
                                                                                    - Maids Room
                                                                                </p>  
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a data-toggle="collapse" class="collapsed" data-parent="#accordion-2991721332" href="#col-maps" aria-expanded="false">Map</a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="col-maps" class="panel-collapse collapse " aria-expanded="false">
                                                                            <div class="panel-body">
                                                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14441.078484062504!2d55.267705253441314!3d25.194128391916813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f682f700cf983%3A0xb5cc58b076c0b904!2sDowntown%20Dubai%20-%20Dubai!5e0!3m2!1sen!2sae!4v1754057494899!5m2!1sen!2sae" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                  
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="vc_row-full-width vc_clearfix"></div>

    <div data-vc-full-width="false" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1533714072840 vc_row-has-fill" style="position: relative; box-sizing: border-box; width: 1905px; max-width: 1905px; padding-left: 367.5px; padding-right: 367.5px;">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <h2 class="related-heading"><span>You may also </span>like this</h2>
                                    <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">  
                                    <div class="  ">
                                        <div class="teammember-shortcode-wrap grid ">
                                            <div class="teammember-list padding-15 columns-3" style="position: relative; height: 450px;">
                                                <div class="team-item" style="position: absolute; left: 0px; top: 0px;">
                                                    <div class="team-content">
                                                        <div class="team-image">
                                                            <img loading="lazy" decoding="async" width="330" height="330" src="{{URL::to('/public/images/property1.png')}}">                        
                                                            <div class="team-meta">
                                                                <h5 class="team-title">ABC Building</h5>
                                                                <p class="team-position">/ Penthouse</p>
                                                            </div>
                                                            <ul class="member-socials">
                                                                <li class="member-social"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                                                <li class="member-social"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                                                <li class="member-social"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                                                <li class="member-social"><a href="#"><i class="fa fa-youtube"></i>Youtube</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="team-item" style="position: absolute; left: 390px; top: 0px;">
                                                    <div class="team-content">
                                                        <div class="team-image">
                                                            <img loading="lazy" decoding="async" width="330" height="330" src="{{URL::to('/public/images/property2.jpg')}}">                        
                                                            <div class="team-meta">
                                                                <h5 class="team-title">ABC Building</h5>
                                                                <p class="team-position">/ Penthouse</p>
                                                            </div>
                                                            <ul class="member-socials">
                                                                <li class="member-social"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                                                <li class="member-social"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                                                <li class="member-social"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                                                <li class="member-social"><a href="#"><i class="fa fa-youtube"></i>Youtube</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="team-item" style="position: absolute; left: 780px; top: 0px;">
                                                    <div class="team-content">
                                                        <div class="team-image">
                                                            <img loading="lazy" decoding="async" width="330" height="330" src="{{URL::to('/public/images/property3.jpg')}}">                        
                                                            <div class="team-meta">
                                                                <h5 class="team-title">Downtown</h5>
                                                                <p class="team-position">/ Villa</p>
                                                            </div>
                                                            <ul class="member-socials">
                                                                <li class="member-social"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                                                <li class="member-social"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                                                <li class="member-social"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                                                <li class="member-social"><a href="#"><i class="fa fa-youtube"></i>Youtube</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="vc_row-full-width vc_clearfix"></div>
</main>

@endsection

@section('footer')
    @include('web.includes.footer')
@endsection