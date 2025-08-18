@extends('web.includes.master')
@section('metaAddition')
@if(!empty($nofollow))
    <meta name="robots" content="noindex, follow">
@endif
@endsection
@section('content')

<main id="main" class="site-main" role="main">
    <div class="haru-page-title-section" style="background-image: url({{URL::to('/public/images')}}/page-bg.jpg);">
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
                                        <!-- <li class="haru-shop-search-btn-wrap haru-ajax-search" data-panel="search">
                                            <a href="#search" id="haru-shop-search-btn" class="invert-color">
                                                <span><i class="fa fa-search"></i> Search</span>
                                                <i class="haru-font haru-font-search-alt flip"></i>
                                            </a>
                                        </li> -->
                                    </ul>
                                    <ul id="haru-shop-categories" class="haru-shop-categories">
                                        <li class="current-cat">
                                            <h3>Dubai’s Luxury Real Estate — <small>Curated by <strong>Lasa Ona</strong></small></h3>
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
                                                    @php $li=1; @endphp
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

                                                        @if($li == 3)
                                                            </div>

                                                            <div class="teammember-list padding-15" style="position: relative;">
                                                            @php $li = 1; @endphp
                                                        @else
                                                            @php $li++; @endphp
                                                        @endif
                                                    @endforeach 
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                </div>

                            </div>
                            <div class="archive-content col-md-12  col-sm-12 col-xs-12">
                                <div class="archive-content-layout layout-style-large-image haru-archive-blog"> 
                                    {!! $properties->withQueryString()->links('pagination::default') !!}   
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="vc_row-full-width vc_clearfix"></div>

    @include('web.includes.elements.music-section')
    
    <div class="vc_row-full-width vc_clearfix"></div>



    <div class="haru-archive-product">
        <div class="container clearfix">
            <div class="row clearfix">    
                <div class="col-md-12 col-sm-12 col-xs-12">
                        
                        <!-- Content -->
                            <br><br>
                            <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Dubai’s Luxury Real Estate — Curated by Meet Lasa Ona</strong></span></span>
                            </p>
                            <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">Dubai has become a global icon for&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>luxury living</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">, architectural brilliance, and unmatched lifestyle experiences. At&nbsp;</span><i><span style="font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">Meet Lasa Ona</span></i><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">, we don’t just showcase properties — we present&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>world-class residences</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> that redefine elegance, comfort, and investment potential.</span></span>
                            </p>
                            <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">From&nbsp;</span><i><span style="font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">waterfront penthouses</span></i><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> to&nbsp;</span><i><span style="font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">architecturally significant villas</span></i><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">, our portfolio includes some of the&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>best areas to buy in Dubai in 2025</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">, perfect for&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Dubai Golden Visa property investment</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> and long-term value appreciation.</span></span>
                            </p>
                            <hr>
                            <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Beyond by Omniyat — Where Art Meets Architecture</strong></span></span>
                            </p>
                            <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">A vision by the&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Omniyat Group</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">,&nbsp;</span><i><span style="font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">Beyond</span></i><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> crafts&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>luxury apartments for sale in Dubai</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> that merge architectural artistry with wellness and timeless design. Each residence reflects a commitment to&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>extraordinary living experiences</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">, perfect for discerning buyers who value sophistication and comfort.</span></span>
                            </p>
                            <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">Whether you’re looking to&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>buy an apartment in Dubai</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> or explore&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>apartments for sale in Downtown Dubai</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">,&nbsp;</span><i><span style="font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">Beyond</span></i><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> offers spaces that are as inspiring as they are luxurious.</span></span>
                            </p>
                            <hr>
                            <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Muraba Properties — Boutique Luxury, Redefined</strong></span></span>
                            </p>
                            <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><i><span style="font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">Muraba Properties</span></i><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> brings Dubai’s boutique luxury vision to life through a collaboration with&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>RCR Arquitectes</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">, delivering residences that are&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>culturally resonant, rare in sophistication, and globally admired</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">.</span></span>
                            </p>
                            <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">The iconic&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Muraba Residences</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> stand as a symbol of architectural purity and understated elegance, making them one of the&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>best investment properties in Dubai</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">. If you’re exploring&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>villas for sale in Palm Jumeirah</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> or&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>apartments for sale in Dubai Marina</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">, Muraba’s offerings deserve your attention.</span></span>
                            </p>
                            <hr>
                            <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Eywa — The European Boutique Developer</strong></span></span>
                            </p>
                            <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">Making its debut in Dubai, the&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>European boutique developer</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> behind Eywa introduces an extraordinary&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Dubai Water Canal landmark</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> in&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Business Bay</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">. Blending luxury, innovation, and elevated residential living,&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Eywa Dubai</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> delivers homes that redefine the future of urban luxury.</span></span>
                            </p>
                            <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">From&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Dubai Hills apartments for sale</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> to exclusive&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>townhouses for sale in Dubai</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">, Eywa’s design philosophy ensures each residence is a&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>statement of lifestyle and taste</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">.</span></span>
                            </p>
                            <hr>
                            <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Why Invest Through Meet Lasa Ona?</strong></span></span>
                            </p>
                            <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">As a&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>luxury real estate influencer in Dubai</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> and&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>top property consultant in the UAE</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">, we provide more than just listings. We offer:</span></span>
                            </p>
                            <ul>
                                <li style="margin-bottom:0;margin-top:0;padding-inline-start:48px;">
                                    <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Tailored Property Recommendations</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> — Matching your lifestyle, goals, and investment strategy.</span></span>
                                </li>
                                <li style="margin-bottom:0;margin-top:0;padding-inline-start:48px;">
                                    <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Market Insights</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> — Backed by the latest&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Dubai real estate market forecast</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> and trends.</span></span>
                                </li>
                                <li style="margin-bottom:0;margin-top:0;padding-inline-start:48px;">
                                    <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Golden Visa Expertise</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> — Helping you navigate&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Dubai Golden Visa property investment</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> with ease.</span></span>
                                </li>
                                <li style="margin-bottom:0;margin-top:0;padding-inline-start:48px;">
                                    <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Exclusive Access</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> — To properties not publicly listed, including&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Muraba Dubai</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> and&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Dubai and Beyond Properties</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> developments.</span></span>
                                </li>
                            </ul>
                            <hr>
                            <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Featured Properties &amp; Locations</strong></span></span>
                            </p>
                            <ul>
                                <li style="margin-bottom:0;margin-top:0;padding-inline-start:48px;">
                                    <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Apartments for Sale in Downtown Dubai</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> — Iconic city views and vibrant lifestyle.</span></span>
                                </li>
                                <li style="margin-bottom:0;margin-top:0;padding-inline-start:48px;">
                                    <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Property for Sale in Dubai Marina</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> — Luxury waterfront living at its finest.</span></span>
                                </li>
                                <li style="margin-bottom:0;margin-top:0;padding-inline-start:48px;">
                                    <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Villas for Sale in Palm Jumeirah</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> — World-renowned exclusivity and beach access.</span></span>
                                </li>
                                <li style="margin-bottom:0;margin-top:0;padding-inline-start:48px;">
                                    <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Dubai Hills Apartments for Sale</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> — Perfect blend of greenery, golf, and luxury.</span></span>
                                </li>
                                <li style="margin-bottom:0;margin-top:0;padding-inline-start:48px;">
                                    <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Townhouses for Sale in Dubai</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> — Family-friendly, modern, and stylish.</span></span>
                                </li>
                            </ul>
                            <hr>
                            <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Your Partner in Luxury Real Estate</strong></span></span>
                            </p>
                            <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">Whether you want to&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>buy property in Dubai</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">, secure a&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Golden Visa</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">, or invest in the&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>best areas to buy in Dubai in 2025</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">, Meet Lasa Ona connects you with&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>top realtors in Dubai</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> and exclusive developments like&nbsp;</span><i><span style="font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">Beyond</span></i><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">,&nbsp;</span><i><span style="font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">Muraba Properties</span></i><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">, and&nbsp;</span><i><span style="font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">Eywa Business Bay</span></i><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">.</span></span>
                            </p>
                            <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Contact us today</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> to explore your next home or investment in Dubai’s thriving real estate market — where luxury meets opportunity.</span></span>
                            </p>
                            <p>
                                <br>
                                &nbsp;
                            </p>


                        <!-- Content -->

                </div>
            </div>
        </div>
    </div>
    
</main>

@endsection

@section('footer')
    @include('web.includes.footer')
@endsection