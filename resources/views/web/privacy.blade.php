@extends('web.includes.master')

@section('content')

<main id="main" class="site-main" role="main">
    <div class="haru-page-title-section" style="background-image: url({{URL::to('/public/images')}}/page-bg.jpg);">
        <section class="haru-page-title-wrapper page-title-wrap-bg">
            <div class="container">
                <div class="page-title-inner">
                    <div class="block-center-inner">
                        <h2>Privacy Policy</h2>
                    </div>
                </div>
            </div>
        </section>
                
        <div class="haru-breadcrumb-wrapper breadcrumb-archive-product-wrap">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="{{route('home')}}" class="home">Home</a></li>
                    <li><span>Privacy Policy</span></li>
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

                            <h5>Last Updated: 8/12/2025</h5>
                            <br><br>

                            <p>
                                At Meet Lasa Ona (“we,” “our,” “us”), your privacy is our priority. Whether you are exploring real estate projects in Dubai, collaborating with us in the music industry, or engaging with our influencer campaigns, we are committed to safeguarding the information you share with us. This Privacy Policy explains in detail how we collect, use, store, and protect your personal information.
                            </p>
                            <br>
                            <h5>1. Information We Collect</h5>

                            <p>We collect information to provide better services to our visitors, clients, and partners:</p>

                            <ol>
                                <li>
                                    Personal Information
                                    <ul>
                                        <li>Name, email address, phone number, and contact preferences.</li>
                                        <li>Any information you submit via inquiry forms, email, or social media channels.</li>
                                    </ul>
                                </li>
                                <li>
                                    Business-Related Information
                                    <ul>
                                        <li>Project details if you engage us for property marketing in Dubai.</li>
                                        <li>Event or collaboration details if you work with us in the music industry or influencer marketing.</li>
                                    </ul>
                                </li>
                                <li>
                                    Automatically Collected Information
                                    <ul>
                                        <li>IP address, browser type, device type, and operating system.</li>
                                        <li>Pages visited, time spent on site, and referral sources.</li>
                                    </ul>
                                </li>
                            </ol>
                            <br>

                            <h5>2. How We Use Your Information</h5>

                            <p>Your data is used strictly for business-related purposes, including:</p>

                            <ul>
                                <li>Real Estate Services – Providing property listings, investment advice, and project updates in Dubai.</li>
                                <li>Music & Entertainment – Coordinating events, artist collaborations, and promotions.</li>
                                <li>Influencer Marketing – Connecting brands with suitable influencers for targeted campaigns.</li>
                                <li>Customer Support – Responding to your queries and requests promptly.</li>
                                <li>Marketing & Updates – Sending newsletters, event announcements, and promotional offers (only with your consent).</li>
                            </ul>
                            <br>

                            <h5>3. Sharing & Disclosure</h5>

                            <p>We do not sell or rent your personal information. However, we may share it in these situations:</p>
                            <ul>
                                <li>With Trusted Partners – Real estate developers, music promoters, or brand partners relevant to your inquiry.</li>
                                <li>With Service Providers – Companies that assist us with marketing, analytics, and technical support.</li>
                                <li>For Legal Compliance – When required by law or legal process.</li>
                            </ul>
                            <br>

                            <h5>4. Cookies & Tracking Technologies</h5>

                            <p>Our website uses cookies, pixels, and analytics tools to:</p>
                            <ul>
                                <li>Improve site performance.</li>
                                <li>Personalize your browsing experience.</li>
                                <li>Track engagement with property listings, event announcements, or influencer content.</li>
                            </ul>
                            <p>You can control or disable cookies through your browser settings.</p>
                            <br>

                            <h5>5. Data Storage & Security</h5>

                            <p>We store your data securely using industry-standard encryption and security measures. However, no system is 100% secure, and we cannot guarantee absolute security.</p>
                            <br>

                            <h5>6. Your Rights</h5>

                            <p>Depending on your location, you may have rights to:</p>
                            <ul>
                                <li>Access the personal information we hold about you.</li>
                                <li>Request corrections or updates.</li>
                                <li>Request deletion of your personal information.</li>
                            </ul>
                            <p>Contact us at info@meetlasaona.com to exercise these rights.</p>
                            <br>

                            <h5>7. International Data Transfers</h5>

                            <p>If you are accessing our services from outside the UAE, your data may be transferred to and processed in countries with different privacy laws.</p>
                            <br>

                            <h5>8. Changes to This Privacy Policy</h5>

                            <p>We may update this Privacy Policy to reflect changes in our business or laws. Please check this page periodically.</p>
                            <br>



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