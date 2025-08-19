@include('web.includes.elements.achivement-section')
<footer id="haru-footer-main" class="footer-3 striped-background">
    <div class="container clearfix">
        <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_custom_1529569201088 vc_row-has-fill" style="position: relative; left: -367.5px; box-sizing: border-box; width: 1905px; max-width: 1905px; padding-left: 367.5px; padding-right: 367.5px;">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1534389529799">
                            <div class="haru-col-sm-6 wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1602603975665">
                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="200" height="30" src="{{URL::to('/public/images/logo-white-min.png')}}" sizes="(max-width: 160px) 100vw, 160px"></div>
                                            </figure>
                                        </div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>THE only real estate personality who blends artistic legacy with architectural beauty, La Sauna curates spaces and content that inspire soulful, conscious living.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="haru-col-sm-6 wpb_column vc_column_container vc_col-sm-2">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <h2 style="color: #ffffff;text-align: left" class="vc_custom_heading heading_style_1">Links</h2>                        
                                        <div class="  ">
                                            <div class="footer-link-shortcode-wrap style_2 ">
                                                <div class="footer-link-content">
                                                    <ul class="link-list">
                                                        <li>
                                                            <a href="{{route('real-estate')}}" target="_self">Real Estate</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('music')}}" target="_self">Music</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('blogs')}}" target="_self">Blogs</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('privacy')}}" target="_self">Privacy Policy</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('terms')}}" target="_self">Terms & Conditions</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="haru-col-sm-6 wpb_column vc_column_container vc_col-sm-3">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <h2 style="color: #ffffff;text-align: left" class="vc_custom_heading heading_style_1">Categories</h2>                        
                                        <div class="  ">
                                            <div class="footer-link-shortcode-wrap style_2 ">
                                                <div class="footer-link-content">
                                                    <ul class="link-list">
                                                        @foreach($blog_categories as $val)
                                                            <li>
                                                                <a href="{{route('blog.category', $val->slug)}}" target="_self">{{$val->name}}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="haru-col-sm-6 wpb_column vc_column_container vc_col-sm-3">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <h2 style="color: #ffffff;text-align: left" class="vc_custom_heading heading_style_1">Newsletter</h2>                        
                                        <div class="  ">
                                            <div class="footer-contact-shortcode-wrap style_1 ">
                                                <div class="footer-contact-content">
                                                    <ul class="contact-information">
                                                        <li>We can't wait to see you.</li>
                                                        <li>
                                                            <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-36" method="post" data-id="36" data-name="Subscribe Default">
                                                                <div class="mc4wp-form-fields">
                                                                    <div class="subscribe-default">
                                                                        <div class="subscribe-email">
                                                                            <input type="email" name="EMAIL" placeholder="Subscribe to our newsletter" required="">
                                                                        </div>

                                                                        <div class="subscribe-submit">
                                                                            <input type="submit" value="Subscribe">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>          
                                        </div>
                                        <div class="  ">
                                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1529569677333">
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">                        
                                        <div class="  ">
                                            <div class="footer-link-shortcode-wrap style_3 ">
                                                <div class="footer-social-shortcode-wrap style_3 ">
                                                    <div class="footer-social-content">
                                                        <ul class="social-list align-left">
                                                            <li>
                                                                <a href="https://www.facebook.com/LuciaSkyMusic" target="_blank">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="https://x.com/luciabakde" target="_blank">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="https://www.instagram.com/lasaonamusic" target="_blank">
                                                                    <i class="fa fa-instagram"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="https://www.linkedin.com/in/lucia-bakde/" target="_blank">
                                                                    <i class="fa fa-linkedin-square"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="https://www.youtube.com/@lasaona" target="_blank">
                                                                    <i class="fa fa-youtube"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <h2 style="font-size: 15px;color: #7e7e7e;text-align: right" class="vc_custom_heading fw-400 vc_custom_1640425005626 default">© {{date('Y')}} meetlasaona.com. All Right Reserved.</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vc_row-full-width vc_clearfix"></div>    
    </div>
</footer>