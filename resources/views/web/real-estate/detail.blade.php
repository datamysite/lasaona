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
    <div class="haru-page-title-section" style="background-image: url({{URL::to('/public/images')}}/page-bg.jpg);">
        <section class="haru-page-title-wrapper page-title-wrap-bg">
            <div class="container">
                <div class="page-title-inner">
                    <div class="block-center-inner">
                        <h2>{{$data->name}}</h2>
                    </div>
                </div>
            </div>
        </section>
                
        <div class="haru-breadcrumb-wrapper breadcrumb-archive-product-wrap">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="{{route('home')}}" class="home">Home</a></li>
                    <li><a href="{{route('real-estate')}}" class="home">Real Estate</a></li>
                    <li><span>{{$data->name}}</span></li>
                </ul>            
            </div>
        </div>


        <div class="wpb_wrapper">
            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">                        
                            <div class=" ">
                                <div class="images-gallery-shortcode-wrap slick_2 " data-columns="3">
                                    <div class="images-list slider-for">
                                        @foreach($data->images as $key => $val)
                                        <div class="image-item image-col-2">
                                            <div class="slide-item">
                                                <img decoding="async" src="{{URL::to('/public/storage/properties/'.$val->image)}}" height="300px" alt="{{$key.' - '.$data->name}}">
                                            </div>
                                        </div>
                                        @endforeach
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
                                                                
                                                                <div class="contact-subject">
                                                                    <div>
                                                                        <span class="wpcf7-form-control-wrap your-subject">
                                                                            <input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Your Name">
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                                <div class="contact-subject">
                                                                    <div>
                                                                        <span class="wpcf7-form-control-wrap your-subject">
                                                                            <input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Your Phone">
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="contact-subject">
                                                                    <div>
                                                                        <span class="wpcf7-form-control-wrap your-subject">
                                                                            <input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Your Email">
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
                                                                                {!! $data->description !!}
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
                                                                                {!! $data->property_features !!}  
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
                                                                                {!! $data->property_map !!}               
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
                                <br><br>
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
                                            <div class="teammember-list padding-15 columns-3" style="position: relative; height: 450px;">
                                                @foreach($properties as $val)
                                                    <div class="team-item" style="">
                                                        <div class="team-content">
                                                            <div class="team-image">
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

    <div class="vc_row-full-width vc_clearfix"></div>

    <div data-vc-full-width="false" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1533714072840 vc_row-has-fill" style="position: relative; box-sizing: border-box; width: 1905px; max-width: 1905px; padding-left: 367.5px; padding-right: 367.5px;">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    {!! $data->long_description !!}
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