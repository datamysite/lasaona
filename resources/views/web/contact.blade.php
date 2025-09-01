@extends('web.includes.master')

@section('content')

<div id="haru-content-main" class="clearfix" bis_skin_checked="1">
            
    <main class="haru-page">
        <div class="container clearfix" bis_skin_checked="1">
            <div class="row clearfix" bis_skin_checked="1">
                <div class="page-content col-md-12  col-sm-12 col-xs-12" bis_skin_checked="1">
                    <div class="page-wrapper" bis_skin_checked="1">
                        <div class="page-inner clearfix" bis_skin_checked="1">
                        
                            <div id="post-2594" class="post-2594 page type-page status-publish hentry clearfix" bis_skin_checked="1">
                                <div class="entry-content" bis_skin_checked="1">
                                    <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding" style="position: relative; left: -367.5px; box-sizing: border-box; width: 1905px; max-width: 1905px;" bis_skin_checked="1">
                                        <div class="wpb_column vc_column_container vc_col-sm-12" bis_skin_checked="1">
                                            <div class="haru-page-title-section" style="background-image: url({{URL::to('/public/images')}}/page-bg.jpg);">
                                                <section class="haru-page-title-wrapper page-title-wrap-bg">
                                                    <div class="container">
                                                        <div class="page-title-inner">
                                                            <div class="block-center-inner">
                                                                <h2>Contact</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                        
                                                <div class="haru-breadcrumb-wrapper breadcrumb-archive-product-wrap">
                                                    <div class="container">
                                                        <ul class="breadcrumbs">
                                                            <li><a href="{{route('home')}}" class="home">Home</a></li>
                                                            <li><span>Contact</span></li>
                                                        </ul>            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="vc_row-full-width vc_clearfix" bis_skin_checked="1"></div>

                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1533713574279" bis_skin_checked="1">
                                        <div class="wpb_column vc_column_container vc_col-sm-12" bis_skin_checked="1">
                                            <div class="vc_column-inner" bis_skin_checked="1">
                                                <div class="wpb_wrapper" bis_skin_checked="1">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid" bis_skin_checked="1">
                                                        <div class="contact-us-2 wpb_column vc_column_container vc_col-sm-6" bis_skin_checked="1">
                                                            <div class="vc_column-inner" bis_skin_checked="1">
                                                                <div class="wpb_wrapper" bis_skin_checked="1">
                                                                    <h2 style="text-align: left" class="vc_custom_heading fw-700 fs-34 vc_custom_1534824417093 heading_style_13">Get in Touch!</h2>
                                                                    
                                                                    <div role="form" class="wpcf7" id="wpcf7-f2606-p2594-o1" lang="en-US" dir="ltr" bis_skin_checked="1">
                                                                        <div class="screen-reader-response" bis_skin_checked="1">
                                                                            <p role="status" aria-live="polite" aria-atomic="true"></p> 
                                                                            <ul></ul>
                                                                        </div>
                                                                        <form action="{{route('enquiry.submit')}}" id="enquiry-form" class="wpcf7-form init" >
                                                                            @csrf
                                                                            <div class="contact-form" bis_skin_checked="1">
                                                                                <div class="contact-name" bis_skin_checked="1">
                                                                                    <div bis_skin_checked="1">
                                                                                        <span class="wpcf7-form-control-wrap your-name">
                                                                                            <input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" placeholder="Your name *" required>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="contact-email" bis_skin_checked="1">
                                                                                    <div bis_skin_checked="1">
                                                                                        <span class="wpcf7-form-control-wrap your-email">
                                                                                            <input type="email" name="email" value="" size="40" class=" aside-email wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" placeholder="Your email *" required>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="contact-subject" bis_skin_checked="1">
                                                                                    <div bis_skin_checked="1">
                                                                                        <span class="wpcf7-form-control-wrap your-subject">
                                                                                            <input type="text" name="subject" value="" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Subject" required>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="contact-message" bis_skin_checked="1">
                                                                                    <div bis_skin_checked="1">
                                                                                        <span class="wpcf7-form-control-wrap your-message">
                                                                                            <textarea name="description" cols="40" rows="5" class="wpcf7-form-control wpcf7-textarea" placeholder="Message" required></textarea>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="contact-submit" bis_skin_checked="1">
                                                                                    <input type="submit" value="Send Message" class="wpcf7-form-control has-spinner wpcf7-submit">
                                                                                </div>
                                                                            </div>

                                                                            <div class="wpcf7-response-output">
                                                                                <div class="loading">
                                                                                    <br>
                                                                                    <img src="{{URL::to('/public/loader-gif.gif')}}" width="80px" class="newsletter-loader">
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_column vc_column_container vc_col-sm-1" bis_skin_checked="1">
                                                            <div class="vc_column-inner" bis_skin_checked="1">
                                                                <div class="wpb_wrapper" bis_skin_checked="1"></div>
                                                            </div>
                                                        </div>

                                                        <div class="wpb_column vc_column_container vc_col-sm-5" bis_skin_checked="1">
                                                            <div class="vc_column-inner" bis_skin_checked="1">
                                                                <div class="wpb_wrapper" bis_skin_checked="1">
                                                                    <h2 style="text-align: left" class="vc_custom_heading fw-700 fs-34 vc_custom_1534824428717 heading_style_13">Info &amp; Collaborations</h2>    
                                                                    <p>For all information, media inquiries, and collaboration opportunities, connect with us to explore meaningful partnerships and create exceptional experiences together.</p>
                                                                    <div class="  " bis_skin_checked="1">
                                                                        <div class="footer-contact-shortcode-wrap style_2 " bis_skin_checked="1">
                                                                            <div class="footer-contact-content" bis_skin_checked="1">
                                                                                <ul class="contact-information">
                                                                                    <li>
                                                                                        <span class="contact-icon fa fa-map-marker"></span>
                                                                                        <span class="contact-label">Address</span>
                                                                                        <span class="contact-description">Dubai, United Arab Emirates</span>
                                                                                    </li>
                                                                                                <li>
                                                                                        <span class="contact-icon fa fa-envelope"></span>
                                                                                        <span class="contact-label">Email</span>
                                                                                        <span class="contact-description">info@meetlasaona.com</span>
                                                                                    </li>
                                                                                     <!--            <li>
                                                                                        <span class="contact-icon fa fa-life-ring"></span>
                                                                                        <span class="contact-label">Support</span>
                                                                                        <span class="contact-description">Working Hours</span>
                                                                                    </li> -->
                                                                                </ul>
                                                                            </div>
                                                                        </div>            
                                                                    </div>
                                                                    
                                                                    <div class=" vc_custom_1533713894788  " bis_skin_checked="1">
                                                                        <div class="footer-social-shortcode-wrap style_2 " bis_skin_checked="1">
                                                                            <div class="footer-social-content" bis_skin_checked="1">
                                                                                <ul class="social-list align-left">
                                                                                    <li>
                                                                                        <a href="https://www.facebook.com/LuciaSkyMusic" target="_blank">
                                                                                            <i class="fa fa-facebook"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://www.instagram.com/lasaonamusic" target="_blank">
                                                                                            <i class="fa fa-instagram"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://www.linkedin.com/in/lucia-bakde/" target="_blank">
                                                                                            <i class="fa fa-linkedin-square"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="https://www.youtube.com/@lasaona" target="_blank">
                                                                                            <i class="fa fa-youtube"></i>
                                                                                        </a>
                                                                                    </li>
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



                                    <div data-vc-full-width="false" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1533714072840 striped-background-light vc_row-has-fill custom-fluid" style="">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <h2 class="related-heading"><span>You may also </span>like this</h2>
                                                                    <p class="text-center">Beyond by Omniyat, Muraba Properties, and Eywa’s European boutique developer redefine Dubai luxury, blending architectural artistry, cultural resonance, and innovation to craft sophisticated, wellness-focused residences along iconic locations like the Dubai Water Canal.</p>
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
                                                                            <div class="teammember-list padding-15 columns-3" style="position: relative;">
                                                                                @foreach($properties as $val)
                                                                                    <div class="team-item" style="">
                                                                                        <div class="team-content">
                                                                                            <div class="team-image ribbon">
                                                                                                <span class="ribbon1"><span>{{$val->name}}</span></span>
                                                                                                
                                                                                                <img loading="lazy" decoding="async" width="330" height="330" src="{{URL::to('public/storage/properties/'.$val->images[0]->image)}}" alt="{{$val->name}}">                        
                                                                                                <div class="team-meta">
                                                                                                    <a href="{{route('real-estate.detail', $val->slug)}}" target="_blank">
                                                                                                        <h5 class="team-title">{{$val->name}}</h5>
                                                                                                        <p class="team-position">/ {{$val->builder_name}}</p>
                                                                                                    </a>
                                                                                                </div>
                                                                                                <ul class="member-socials">
                                                                                                    <li class="member-social"><a href="{{route('real-estate.detail', $val->slug)}}" target="_blank">Details</a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endforeach
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


                                    <div class="vc_row-full-width vc_clearfix" bis_skin_checked="1"></div>
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>                        
</div>

@endsection

@section('footer')
    @include('web.includes.footer')
@endsection
@section('addScript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{URL::to('/public/js/enquiry.js')}}"></script>
@endsection