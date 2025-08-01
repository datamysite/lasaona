@extends('web.includes.master')

@section('content')

<main id="main" class="site-main" role="main">
    <div class="haru-page-title-section" style="background-image: url({{URL::to('/public/images')}}/bg-page-title.jpg);">
        <section class="haru-page-title-wrapper page-title-wrap-bg">
            <div class="container">
                <div class="page-title-inner">
                    <div class="block-center-inner">
                        <h2>Real Estate</h2>
                    </div>
                </div>
            </div>
        </section>
                
        <div class="haru-breadcrumb-wrapper breadcrumb-archive-product-wrap">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="{{route('home')}}" class="home">Home</a></li>
                    <li><span>Real Estate</span></li>
                </ul>            
            </div>
        </div>
    </div>
    
    <div class="haru-archive-product">
        <div class="container clearfix">
            <div class="row clearfix">    
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="archive-product-filter clearfix">
                        <!-- Ajax filter style top sidebar -->
                        <div class="archive-product-header">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul id="haru-shop-filter-menu" class="haru-shop-filter-menu">
                                        <li class="haru-shop-categories-btn-wrap" data-panel="cat">
                                            <a href="#categories" class="invert-color">Categories</a>
                                        </li>
                                        <li class="haru-shop-search-btn-wrap haru-ajax-search" data-panel="search">
                                            <a href="#search" id="haru-shop-search-btn" class="invert-color">
                                                <span><i class="fa fa-search"></i> Search</span>
                                                <i class="haru-font haru-font-search-alt flip"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul id="haru-shop-categories" class="haru-shop-categories">
                                        <li class="current-cat">
                                            <a href="{{route('real-estate')}}">All</a>
                                        </li>
                                        <li class="cat-item-51">
                                            <span>⁄</span>
                                            <a href="">Villa</a>
                                        </li>
                                        <li class="cat-item-50">
                                            <span>⁄</span>
                                            <a href="">Penthouse</a>
                                        </li>
                                        <li class="cat-item-54">
                                            <span>⁄</span>
                                            <a href="">Mansions</a>
                                        </li>                                   
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="haru-shop-sidebar" class="haru-shop-sidebar">
                                        <div id="haru-shop-widgets-ul" class="archive-product-sidebar woocommerce-sidebar-ajax">
                                                                                </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div id="haru-shop-search" class="haru-shop-search">
                                        <div class="haru-shop-search-input-wrap">
                                            <a href="#" id="haru-shop-search-close"><i class="ion-android-close"></i></a>
                                            <form role="search" method="get" class="search-form" action="">
                                                <input type="text" id="haru-shop-search-input" autocomplete="off" value="" name="s" placeholder="Search Property">
                                                <input type="hidden" name="post_type" value="product">
                                            </form>
                                        </div>

                                        <div id="haru-shop-search-notice"><span>press <u>Enter</u> to search</span></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- End ajax filter top sidebar -->
                    </div>

                    <div class="archive-product-wrapper clearfix">
                       
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">  
                                        <div class="  ">
                                            <div class="teammember-shortcode-wrap grid ">
                                                <div class="teammember-list padding-15" style="position: relative;">
                                                    <div class="team-item vc_col-sm-4" >
                                                        <div class="team-content">
                                                            <div class="team-image">
                                                                <img loading="lazy" decoding="async" width="330" height="330" src="{{URL::to('/public/images/property1.png')}}">                        
                                                                <div class="team-meta">
                                                                    <h5 class="team-title">ABC Building</h5>
                                                                    <p class="team-position">/ Penthouse</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="team-item vc_col-sm-4">
                                                        <div class="team-content">
                                                            <div class="team-image">
                                                                <img loading="lazy" decoding="async" width="330" height="330" src="{{URL::to('/public/images/property2.jpg')}}">                        
                                                                <div class="team-meta">
                                                                    <h5 class="team-title">ABC Building</h5>
                                                                    <p class="team-position">/ Penthouse</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="team-item vc_col-sm-4">
                                                        <div class="team-content">
                                                            <div class="team-image">
                                                                <img loading="lazy" decoding="async" width="330" height="330" src="{{URL::to('/public/images/property3.jpg')}}">                        
                                                                <div class="team-meta">
                                                                    <h5 class="team-title">Downtown</h5>
                                                                    <p class="team-position">/ Villa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="team-item vc_col-sm-4" >
                                                        <div class="team-content">
                                                            <div class="team-image">
                                                                <img loading="lazy" decoding="async" width="330" height="330" src="{{URL::to('/public/images/property1.png')}}">                        
                                                                <div class="team-meta">
                                                                    <h5 class="team-title">ABC Building</h5>
                                                                    <p class="team-position">/ Penthouse</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="team-item vc_col-sm-4">
                                                        <div class="team-content">
                                                            <div class="team-image">
                                                                <img loading="lazy" decoding="async" width="330" height="330" src="{{URL::to('/public/images/property2.jpg')}}">                        
                                                                <div class="team-meta">
                                                                    <h5 class="team-title">ABC Building</h5>
                                                                    <p class="team-position">/ Penthouse</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="team-item vc_col-sm-4">
                                                        <div class="team-content">
                                                            <div class="team-image">
                                                                <img loading="lazy" decoding="async" width="330" height="330" src="{{URL::to('/public/images/property3.jpg')}}">                        
                                                                <div class="team-meta">
                                                                    <h5 class="team-title">Downtown</h5>
                                                                    <p class="team-position">/ Villa</p>
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

    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" class="vc_row wpb_row vc_row-fluid vc_custom_1533887730832 vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <h2 style="text-align: center" class="vc_custom_heading vc_custom_1536487831307 heading_style_14">Be wild</h2>
                                    <h2 style="color: #ffffff;text-align: center" class="vc_custom_heading text-upper lt-spacing-10 fs-100 vc_custom_1533887648176 heading_style_4">Have fun</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">  
                                    <div class=" ">
                                        <div class="single-video-shortcode-wrapper style_2 ">
                                            <div class="video-content">
                                                <div class="video-image">
                                                    <div class="video-icon">
                                                        <a href="javascript:;" class="view-video-button" data-id="2781" data-player="none" data-server="vimeo"></a>
                                                    </div>
                                                    <h3 class="video-title"><a href="https://demo.harutheme.com/formota/video/just-like-you/">Just Like You</a></h3>
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