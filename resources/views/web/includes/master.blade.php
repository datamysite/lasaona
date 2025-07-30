<!DOCTYPE html>
<!-- Open HTML -->
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:locale" content="en_US"/>
    <meta property="og:site_name" content="Formota - Movie Studios &amp; Filmmakers WordPress theme"/>
    <meta property="og:title" content="Home 9"/>
    <meta property="og:url" content="https://demo.harutheme.com/formota/home-9/"/>
    <meta property="og:type" content="article"/>
    <meta property="og:description" content="Home 9"/>
   
    <meta itemprop="name" content="Home 9"/>
    <meta itemprop="headline" content="Home 9"/>
    <meta itemprop="description" content="Home 9"/>
    <meta itemprop="author" content="admin"/>
    
    <meta name="twitter:title" content="Home 9"/>
    <meta name="twitter:url" content="https://demo.harutheme.com/formota/home-9/"/>
    <meta name="twitter:description" content="Home 9"/>
    <meta name="twitter:card" content="summary_large_image"/>

    @include('web.includes.style')
  
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

            @include('web.includes.footer')
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
    </body>
</html>