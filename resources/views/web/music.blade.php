@extends('web.includes.master')
@section('addStyle')
    <style>
        body {
            font-size: 16px;
        }
        .haru-single-director .single-content .single-wrapper article .single-director-gallery .gallery-title {
            padding-bottom: 2%;
            margin-bottom: 1%;
        }
        .vc_custom_1531122077430 {
            padding-top: 2% !important;
            padding-bottom: 1% !important;
            background-image: url("{{URL::to('public/images/lasa-about-bg.png')}}") !important;
        }
    </style>
@endsection
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
                                            <div class="haru-page-title-section" style="background-image: url({{URL::to('/public/images')}}/bg-page-title.jpg);">
                                                <section class="haru-page-title-wrapper page-title-wrap-bg">
                                                    <div class="container">
                                                        <div class="page-title-inner">
                                                            <div class="block-center-inner">
                                                                <h2>Music</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                        
                                                <div class="haru-breadcrumb-wrapper breadcrumb-archive-product-wrap">
                                                    <div class="container">
                                                        <ul class="breadcrumbs">
                                                            <li><a href="{{route('home')}}" class="home">Home</a></li>
                                                            <li><span>Music</span></li>
                                                        </ul>            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="vc_row-full-width vc_clearfix" bis_skin_checked="1"></div>

                                    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid actor-introduce2 vc_custom_1531122077430 vc_row-has-fill">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">                        
                                                                    <div class="haru-single-director" bis_skin_checked="1">
                                                                        <div class="full-width clearfix" bis_skin_checked="1">
                                                                            <!-- Single content -->
                                                                            <div class="single-content" bis_skin_checked="1">
                                                                                <div class="single-wrapper" bis_skin_checked="1">
                                                                                    <article id="post-49" class="post-49 haru_director type-haru_director status-publish has-post-thumbnail hentry director_category-harutheme clearfix">
                                                                                        <div class="post-wrapper" bis_skin_checked="1">
                                                                                           
                                                                                            <!-- ACTOR STORY -->
                                                                                            <div class="single-director-story" bis_skin_checked="1">
                                                                                                <div class="container" bis_skin_checked="1">
                                                                                                    <div class="row director-description" bis_skin_checked="1">
                                                                                                        <div class="col-md-7 col-sm-7" bis_skin_checked="1">
                                                                                                            <div class="description-detail" bis_skin_checked="1">
                                                                                                                <div class="director-story" bis_skin_checked="1">
                                                                                                                    <p>
                                                                                                                        LasaOna’s musical journey began at 14, rooted in her Slovakian heritage — a place of contrast: tradition and rebellion, folklore and soul. Born between two frequencies — one grounded in jazz and emotion, the other in silence and introspection — her upbringing sparked curiosity and a poetic sensibility. Driven by feelings often unnamed, she turned them into music. 
                                                                                                                        <br><br>
                                                                                                                        As a songwriter and stage performer, Lucia blends her multicultural background into soulful, evocative performances that deeply resonate. Her music goes beyond entertainment, creating a purposeful connection that evolves with intention and depth.

                                                                                                                    </p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-md-5 col-sm-5" bis_skin_checked="1">
                                                                                                            <div class="director-testimonial" bis_skin_checked="1">LasaOna aims to create music that holds emotion and beauty, leaving a lasting impression long after it ends.</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                            <!-- SINGLE ACTOR GALLERY -->
                                                                                            @include('web.includes.elements.photo-gallery')
                                        
                                                                                        </div>
                                                                                    </article>                
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

                                    <div class="vc_row-full-width vc_clearfix" bis_skin_checked="1"></div>


                                    @include('web.includes.elements.music-section')

                                    <div class="vc_row-full-width vc_clearfix"></div>

                                    @include('web.includes.elements.instagram')

                                    <div class="vc_row-full-width vc_clearfix"></div>

                                    <!-- Content -->

                                        <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                            <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Lucia’s Musical Odyssey — Meet Lasa Ona</strong></span></span>
                                        </p>
                                        <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                            <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Lucia’s musical journey began at the tender age of 14</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">, rooted deeply in her Slovakian heritage — a land where&nbsp;</span><i><span style="font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">tradition dances with rebellion</span></i><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> and&nbsp;</span><i><span style="font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">folklore hums with soul</span></i><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">. Raised between two contrasting frequencies — one steeped in jazz and emotion, the other flowing with silence and introspection — her upbringing ignited a quiet curiosity and poetic sensibility. It was this delicate tension that inspired Lucia to transform unnamed feelings into heartfelt melodies.</span></span>
                                        </p>
                                        <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                            <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">As a&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>songwriter and stage performer</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">, Lucia seamlessly blends her multicultural background into&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>soulful, evocative performances</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> that resonate on a deeper level. Her music transcends mere entertainment; it's designed to&nbsp;</span><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>forge purposeful connections</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">, evolving with grace, intention, and emotional sincerity.</span></span>
                                        </p>
                                        <hr>
                                        <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                            <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Why Lucia Stands Out — More Than Just a Musical Act</strong></span></span>
                                        </p>
                                        <ul>
                                            <li style="margin-bottom:0;margin-top:0;padding-inline-start:48px;">
                                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Emotion Meets Beauty</strong></span></span>
                                                <br>
                                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">Lucia's compositions cradle your heart with emotional resonance and delicate beauty, ensuring her music lingers long after the final note fades.</span></span>
                                            </li>
                                            <li style="margin-bottom:0;margin-top:0;padding-inline-start:48px;">
                                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Tailored for Dubai’s Audiences</strong></span></span>
                                                <br>
                                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">Whether you're seeking&nbsp;</span><i><span style="font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">“book music artists Dubai”</span></i><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> or&nbsp;</span><i><span style="font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">“music artists for events in Dubai”</span></i><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">, Lucia brings an evocative, soulful presence that transforms any event into a meaningful experience.</span></span>
                                            </li>
                                            <li style="margin-bottom:0;margin-top:0;padding-inline-start:48px;">
                                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Versatile Event Performer</strong></span></span>
                                                <br>
                                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">From&nbsp;</span><i><span style="font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">corporate galas</span></i><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> to&nbsp;</span><i><span style="font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">private soirées</span></i><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">, Lucia excels as one of the premier&nbsp;</span><i><span style="font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">“singers for events UAE”</span></i><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> and&nbsp;</span><i><span style="font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">“Musicians for private events Dubai”</span></i><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">, offering a performance that’s both refined and authentic.</span></span>
                                            </li>
                                            <li style="margin-bottom:0;margin-top:0;padding-inline-start:48px;">
                                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Celebrity-Level Talent for Hire</strong></span></span>
                                                <br>
                                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">Need a memorable live performance? Lucia ranks among&nbsp;</span><i><span style="font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">“celebrity singers for hire UAE”</span></i><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">, delivering standout vocal storytelling for VIPs, influencers, and high-profile gatherings.</span></span>
                                            </li>
                                        </ul>
                                        <hr>
                                        <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                            <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Perfect For</strong></span></span>
                                        </p>
                                        <ul>
                                            <li style="margin-bottom:0;margin-top:0;padding-inline-start:48px;">
                                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Music Artists for Events in Dubai</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">: Enliven your corporate functions and celebrations with Lucia’s heartfelt artistry.</span></span>
                                            </li>
                                            <li style="margin-bottom:0;margin-top:0;padding-inline-start:48px;">
                                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Singers for Hire Dubai</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">: Illuminate your private events with Lucia’s soulful charm and stage mastery.</span></span>
                                            </li>
                                            <li style="margin-bottom:0;margin-top:0;padding-inline-start:48px;">
                                                <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Corporate Entertainers UAE</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">: Add depth and emotion to your brand’s events with Lucia’s powerful lyrical storytelling.</span></span>
                                            </li>
                                        </ul>
                                        <hr>
                                        <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                            <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Experience Lucia — More Than Just Music</strong></span></span>
                                        </p>
                                        <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                            <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">When you book Lucia, you're not just hiring a performer — you're inviting an emotionally vibrant, culturally rich storyteller onto your stage. Her music carries&nbsp;</span><i><span style="font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">beauty that echoes</span></i><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> and&nbsp;</span><i><span style="font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">emotion that endures</span></i><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;">, long after the lights dim.</span></span>
                                        </p>
                                        <p style="line-height:1.3900000000000001;margin-bottom:8pt;margin-top:0pt;" dir="ltr">
                                            <span style="background-color:transparent;color:#000000;font-family:Aptos;font-size:12pt;"><span style="font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><strong>Contact us</strong></span><span style="font-style:normal;font-variant:normal;font-weight:400;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"> to explore booking Lucia for your next event in Dubai or across the UAE — and let her music create the unforgettable connection your audience deserves.</span></span>
                                            <br>
                                            &nbsp;
                                        </p>
                                    
                                    <!-- Content -->

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
    <script src="{{URL::to('/public/js/lightbox.js')}}"></script>
@endsection