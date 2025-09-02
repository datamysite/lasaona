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
                                                            <a href="{{route('real-estate.detail', $val->slug)}}" target="_blank">
                                                                <div class="team-content">
                                                                    <div class="team-image ribbon">
                                                                        <span class="ribbon1"><span>{{$val->name}}</span></span>

                                                                        <img loading="lazy" decoding="async" width="330" height="330" src="{{URL::to('public/storage/properties/'.$val->images[0]->image)}}" alt="{{$val->name}}">                        
                                                                        <div class="team-meta">
                                                                                <h5 class="team-title">{{$val->name}}</h5>
                                                                                <p class="team-position">/ {{$val->builder_name}}</p>
                                                                        </div>
                                                                        <ul class="member-socials">
                                                                            <li class="member-social">Details</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </a>
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


    <div class="haru-archive-product">
        <div class="container clearfix">
            <div class="row clearfix">    
                <div class="col-md-12 col-sm-12 col-xs-12 let-content let-content2">
                        
                        <!-- Content -->
                            <br><br>
                            <h4>Dubai’s Luxury Real Estate — Curated by Meet Lasa Ona</h4>

                            <p>
                                Dubai has become a global icon for luxury living, architectural brilliance, and
                                unmatched lifestyle experiences. At Meet Lasa Ona, we don’t just showcase properties
                                — we present world-class residences that redefine elegance, comfort, and investment
                                potential.
                                <br><br>
                                From waterfront penthouses to architecturally significant villas, our portfolio includes
                                some of the best areas to buy in Dubai in 2025, perfect for Dubai Golden Visa
                                property investment and long-term value appreciation.
                            </p>
                            
                            <h4>Beyond by Omniyat — Where Art Meets Architecture</h4>

                            <p>
                                A vision by the Omniyat Group, Beyond crafts luxury apartments for sale in Dubai
                                that merge architectural artistry with wellness and timeless design. Each residence
                                reflects a commitment to extraordinary living experiences, perfect for discerning
                                buyers who value sophistication and comfort.
                                <br><br>
                                Whether you’re looking to buy an apartment in Dubai or explore apartments for sale
                                in Downtown Dubai, Beyond offers spaces that are as inspiring as they are luxurious.
                            </p>

                            <h4>Muraba Properties — Boutique Luxury, Redefined</h4>

                            <p>
                                Muraba Properties brings Dubai’s boutique luxury vision to life through a collaboration
                                with RCR Arquitectes, delivering residences that are culturally resonant, rare in
                                sophistication, and globally admired.
                                <br><br>
                                The iconic Muraba Residences stand as a symbol of architectural purity and
                                understated elegance, making them one of the best investment properties in Dubai.
                                If you’re exploring villas for sale in Palm Jumeirah or apartments for sale in Dubai
                                Marina, Muraba’s offerings deserve your attention.
                            </p>

                            <h4>Eywa — The European Boutique Developer</h4>

                            <p>
                                Making its debut in Dubai, the European boutique developer behind Eywa introduces
                                an extraordinary Dubai Water Canal landmark in Business Bay. Blending luxury,
                                innovation, and elevated residential living, Eywa Dubai delivers homes that redefine the
                                future of urban luxury.
                                <br><br>
                                From Dubai Hills apartments for sale to exclusive townhouses for sale in Dubai,
                                Eywa’s design philosophy ensures each residence is a statement of lifestyle and
                                taste.
                            </p>

                            <h4>Why Invest with Lasa Ona?</h4>

                            <p>
                                As a luxury real estate influencer in Dubai and top property consultant in the UAE,
                                we provide more than just listings. We offer:
                            </p>
                            <ul>
                                
                                <li><strong>Tailored Property Recommendations</strong> — Matching your lifestyle, goals, and
                                investment strategy.</li>
                                <li><strong>Market Insights</strong> — Backed by the latest Dubai real estate market forecast and
                                trends.</li>
                                <li><strong>Golden Visa Expertise</strong> — Helping you navigate Dubai Golden Visa property
                                investment with ease.</li>
                                <li><strong>Exclusive Access</strong> — To properties not publicly listed, including Muraba Dubai
                                and Dubai and Beyond Properties developments.</li>
                            </ul>

                            <h4>Featured Properties &amp; Locations</h4>
                            <ul>
                                <li><strong>Apartments for Sale in Downtown Dubai</strong> — Iconic city views and vibrant
                                lifestyle.</li>
                                <li><strong>Property for Sale in Dubai Marina</strong> — Luxury waterfront living at its finest.</li>
                                <li><strong>Villas for Sale in Palm Jumeirah</strong> — World-renowned exclusivity and beach
                                access.</li>
                                <li><strong>Dubai Hills Apartments for Sale</strong> — Perfect blend of greenery, golf, and luxury.</li>
                                <li><strong>Townhouses for Sale in Dubai</strong> — Family-friendly, modern, and stylish.</li>
                            </ul>

                            <h4>Your Partner in Luxury Real Estate</h4>
                            
                            <p>
                                Whether you want to buy property in Dubai, secure a Golden Visa, or invest in the
                                best areas to buy in Dubai in 2025, Meet Lasa Ona connects you with top realtors in
                                Dubai and exclusive developments like Beyond, Muraba Properties, and Eywa
                                Business Bay.
                                <br><br>
                                Contact us today to explore your next home or investment in Dubai’s thriving real
                                estate market — where luxury meets opportunity.
                            </p>
                            <p>
                                <br>
                                &nbsp;
                            </p>


                        <!-- Content -->

                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 let-content2-show">
                    <button type="button" class="read-more">Read more</button>
                </div>
            </div>
            <br>
        </div>
    </div>
    
</main>

@endsection

@section('footer')
    @include('web.includes.footer')
@endsection