<!DOCTYPE html>
<!-- Open HTML -->
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="{{URL::to('/public/images/favicon.png')}}">

    <meta property="og:locale" content="en_US"/>
    <meta property="og:site_name" content="Meet lasa Ona"/>
    <meta property="og:title" content="Meet Lasa Ona"/>
    <meta property="og:url" content="https://meetlasaona.com"/>
    <meta property="og:type" content="article"/>
    <meta property="og:description" content="Lasa Ona"/>
   
    <meta itemprop="name" content="Lasa Ona"/>
    <meta itemprop="headline" content="Lasa Ona"/>
    <meta itemprop="description" content="Lasa Ona"/>
    <meta itemprop="author" content="Lasa Ona"/>
    
    <meta name="twitter:title" content="Meet Lasa Ona"/>
    <meta name="twitter:url" content="https://meetlasaona.com"/>
    <meta name="twitter:description" content="Lasa Ona"/>
    <meta name="twitter:card" content="summary_large_image"/>

    @include('web.includes.style')
    @yield('addStyle')
    
</head>

<body class="page-template-default page page-id-2051 theme-formota woocommerce-no-js layout-wide header-over-slideshow wpb-js-composer js-comp-ver-6.9.0 vc_responsive">
    <!-- Display newsletter popup -->
        <!-- Open haru main -->
        <div id="haru-main">
            
            @include('web.includes.header')

            <!-- Open HARU Content Main -->
            <div id="haru-content-main" class="clearfix">
            
                @yield('content')

            </div>
            <!-- Close HARU Content Main -->

            @yield('footer')
        </div>
    

        <!-- Close haru main -->
        <a class="back-to-top" href="javascript:;">
            <i class="fa fa-angle-up"></i>
        </a>    
        <div class="haru-ajax-overflow">
            <div class="haru-ajax-loading">
                <div class="loading-wrapper">
                    <div class="spinner" id="spinner_one"></div>
                    <div class="spinner" id="spinner_two"></div>
                    <div class="spinner" id="spinner_three"></div>
                    <div class="spinner" id="spinner_four"></div>
                    <div class="spinner" id="spinner_five"></div>
                    <div class="spinner" id="spinner_six"></div>
                    <div class="spinner" id="spinner_seven"></div>
                    <div class="spinner" id="spinner_eight"></div>
                </div>
            </div>
        </div>
        <div class="canvas-mask-overlay"></div>
        
        @include('web.includes.scripts')
        @yield('addScript')
    </body>
</html>