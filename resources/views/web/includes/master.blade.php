<!DOCTYPE html>
<!-- Open HTML -->
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{@$metaTags->title}}{{@$ametaTags['title']}}{{empty($metaTags->title) && empty($ametaTags['title']) ? env('APP_NAME') : ''}}</title>
    <meta name="description" content="{{@$metaTags->description}}{{@$ametaTags['description']}}">
    <meta name="keywords" content="{{@$metaTags->keywords}}{{@$ametaTags['keywords']}}">
    @yield('metaAddition')
    
    <!-- Basic OG Tags -->
    <meta property="og:title" content="{{@$metaTags->title}}{{@$ametaTags['title']}}{{empty($metaTags->title) && empty($ametaTags['title']) ? env('APP_NAME') : ''}}" />
    <meta property="og:description" content="{{@$metaTags->description}}{{@$ametaTags['description']}}" />
    <meta property="og:url" content="{{@URL::current()}}" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Meet LasaOna" />

    <!-- Image OG Tag -->
    <meta property="og:image" content="{{empty($og_img) ? URL::to('/public/images/about-pic2.jpg') : $og_img}}" />
    <meta property="og:image:alt" content="Image - {{@$metaTags->title}}{{@$ametaTags['title']}}{{empty($metaTags->title) && empty($ametaTags['title']) ? env('APP_NAME') : ''}}" />
    <meta property="og:image:type" content="image/*" />
    <meta property="og:image:width" content="620" />
    <meta property="og:image:height" content="340" />

    <!-- Additional Tags for Social Platforms -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{@$metaTags->title}}{{@$ametaTags['title']}}{{empty($metaTags->title) && empty($ametaTags['title']) ? env('APP_NAME') : ''}}" />
    <meta name="twitter:description" content="{{@$metaTags->description}}{{@$ametaTags['description']}}" />
    <meta name="twitter:image" content="{{empty($og_img) ? URL::to('/public/images/about-pic2.jpg') : $og_img}}" />
    <meta name="twitter:site" content="@MeetLasaOna" />

    <link rel="icon" type="image/x-icon" href="{{URL::to('/public/images/favicon.png')}}">
    <link rel="icon" href="{{URL::to('/public/images/favicon.png')}}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{URL::to('/public/images/favicon.png')}}">

    @include('web.includes.style')
    @yield('addStyle')

    @foreach($headSnippet as $val)
        @if($val->position == 'Head')
          <!-- {{$val->name}} // Start -->
              {!! $val->snippet_code !!}
          <!-- {{$val->name}} // End -->
        @endif
    @endforeach
    
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
        
        @foreach($bodySnippet as $val)
            @if($val->position == 'Body')
              <!-- {{$val->name}} // Start -->
                  {!! $val->snippet_code !!}
              <!-- {{$val->name}} // End -->
            @endif
        @endforeach

        @include('web.includes.scripts')
        @yield('addScript')
    </body>
</html>