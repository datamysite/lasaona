@extends('web.includes.master')

@section('content')

<main id="main" class="site-main" role="main">
    <div class="haru-page-title-section" style="background-image: url({{URL::to('/public/images')}}/page-bg.jpg);">
        <section class="haru-page-title-wrapper page-title-wrap-bg">
            <div class="container">
                <div class="page-title-inner">
                    <div class="block-center-inner">
                        <h2>Terms & Conditions</h2>
                    </div>
                </div>
            </div>
        </section>
                
        <div class="haru-breadcrumb-wrapper breadcrumb-archive-product-wrap">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="{{route('home')}}" class="home">Home</a></li>
                    <li><span>Terms & Conditions</span></li>
                </ul>            
            </div>
        </div>
    </div>
    
    <div class="vc_row-full-width vc_clearfix"></div>



    <div class="haru-archive-product">
        <div class="container clearfix">
            <div class="row clearfix">    
                <div class="col-md-12 col-sm-12 col-xs-12 content-format">
                        
                        <!-- Content -->
                            
                            <p>
                                <meta charset="utf-8">
                            </p>

                            <h5>Last Updated: 08/12/2025</h5>
                             

                            <p>
                                These Terms & Conditions (“Terms”) apply to your use of https://meetlasaona.com and our services in real estate projects, music industry collaborations, and influencer marketing partnerships. By using our website or engaging with us, you agree to these Terms.
                            </p>
                            <br>

                            <h5>1. Scope of Services</h5>

                            <p>Meet Lasa Ona operates in three primary sectors:</p>
                            <ol>
                                <li>
                                    Real Estate in Dubai
                                    <ul>
                                        <li>Marketing and promoting residential and commercial projects.</li>
                                        <li>Assisting investors, buyers, and renters with relevant property details.</li>
                                    </ul>
                                </li>
                                <li>
                                    Music & Entertainment
                                    <ul>
                                        <li>Collaborating with artists, event organizers, and brands.</li>
                                        <li>Hosting and promoting live shows, private events, and music releases.</li>
                                    </ul>
                                </li>
                                <li>
                                    Influencer Collaborations
                                    <ul>
                                        <li>Connecting brands with influencers for promotional campaigns.</li>
                                        <li>Managing content creation and performance tracking.</li>
                                    </ul>
                                </li>
                            </ol>
                            <br>

                            <h5>2. Website Use Rules</h5>

                            <p>By using our site, you agree to:</p>
                            <ul>
                                <li>Provide accurate and truthful information.</li>
                                <li>Use our website for lawful purposes only.</li>
                                <li>Not attempt to hack, disrupt, or misuse our systems.</li>
                            </ul>
                            <br>

                            <h5>3. Intellectual Property</h5>

                            <p>All content on this site—including text, images, videos, and branding—is owned by Meet Lasa Ona unless otherwise stated. You may not reproduce or distribute it without our written permission.</p>
                            <br>

                            <h5>4. Real Estate Disclaimer</h5>
                            <ul>
                                <li>All property information is subject to change without notice.</li>
                                <li>We are not responsible for market fluctuations or decisions made based on the information provided.</li>
                            </ul>
                            <br>

                            <h5>5. Music & Influencer Disclaimer</h5>
                            <ul>
                                <li>Event details, artist availability, and brand partnerships may change.</li>
                                <li>We are not responsible for cancellations or changes due to third-party actions.</li>
                            </ul>
                            <br>

                            <h5>6. Liability Limitation</h5>

                            <p>We are not liable for any losses or damages resulting from your use of our website or services. This includes direct, indirect, or incidental damages.</p>
                            <br>

                            <h5>7. Third-Party Links</h5>

                            <p>Our site may contain links to third-party websites. We are not responsible for their content or policies.</p>
                            <br>

                            <h5>8. Governing Law & Jurisdiction</h5>

                            <p>These Terms are governed by the laws of the United Arab Emirates. Any disputes will be handled in the courts of Dubai.</p>
                            <br>

                            <h5>9. Contact Us</h5>

                            <p>For questions or concerns regarding these Terms, contact us at info@meetlasaona.com.</p>
                            <br>



                            <br>
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