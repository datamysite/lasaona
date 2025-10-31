<header id="haru-mobile-header" class="haru-mobile-header header-mobile-3 header-mobile-sticky">
                <div class="haru-mobile-header-wrap menu-mobile-fly">
                    <div class="container haru-mobile-header-container">
                        <div class="haru-mobile-header-inner">
                            <div class="toggle-icon-wrap toggle-mobile-menu" data-ref="haru-nav-mobile-menu" data-drop-type="fly">
                                <div class="toggle-icon"> 
                                    <span></span>
                                </div>
                            </div>
                
                            <!-- Header mobile customize -->
                            <div class="header-elements">                                   
                            </div>   
                            <!-- End Header mobile customize -->
                                    
                            <div class="header-logo-mobile">
                                <a  href="{{route('home')}}" title="Meet lasa Ona">
                                    <img src="{{URL::to('/public/images')}}/logo-black-min.png" alt="Logo - lasa Ona" />
                                </a>
                            </div>
                        </div>
                        
                        <div id="haru-nav-mobile-menu" class="haru-mobile-header-nav menu-mobile-fly">
                            <div class="mobile-menu-header">
                                Menu<span class="mobile-menu-close"></span>
                            </div>

                            <div class="mobile-header-elements">                                                                   
                                <div class="header-elements-item search-button-wrap">
                                    <a href="javascript:;" class="header-search-button" data-search-type="standard">
                                        <i class="ion ion-md-search"></i>
                                    </a>
                                </div>                                    
                            </div>

                            <ul id="menu-mobile-menu" class="haru-nav-mobile-menu">

                                <li class="haru-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children level-0 ">
                                    <a href="{{route('home')}}">Home</a>
                                </li>

                                <li class="haru-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children level-0 ">
                                    <a href="{{route('about')}}">About Me</a>
                                </li>

                                <li class="haru-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children level-0 ">
                                    <a href="{{route('real-estate')}}">Real Estate</a>
                                </li>

                                <li class="haru-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children level-0 ">
                                    <a href="{{route('music')}}">Music</a>
                                </li>

                                <li class="haru-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children level-0 ">
                                    <a href="{{route('blogs')}}">Blogs</a><b class="menu-caret"></b>
                                    <!-- <ul class="sub-menu" style="">
                                        @foreach($blog_categories as $val)
                                            <li class="haru-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page menu-item-home level-1 ">
                                                <a href="{{route('blog.category', $val->slug)}}">{{$val->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul> -->
                                </li>

                                <li id="menu-item-mobile-2816" class="haru-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children level-0 ">
                                    <a href="{{route('contact')}}">Contact</a>
                                </li>

                            </ul>                                
                            
                            <div class="mobile-header-social">
                                <ul class="header-elements-item header-social-network-wrap">
                                    <li>
                                        <a href="https://www.facebook.com/MeetLasaOna" target="_blank">
                                            <i class="fa fa-facebook"></i>
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
                        <div class="haru-mobile-menu-overlay"></div>
                    </div>
                </div>
            </header>    

            <header id="haru-header" class="haru-main-header header-1 header-over-slideshow navigation_light header-hover-on header-sticky sticky_dark">
                <div class="haru-header-nav-wrap">
                    <div class="row header-nav-above d-flex justify-content-between">
                        <div class="col-md-2 header-left header-elements align-self-center">
                            <div class="header-logo has-logo-sticky">
                                <a href="{{route('home')}}" class="logo-default" title="Logo - lasa Ona">
                                    <img src="{{URL::to('/public/images')}}/logo-white-min.png" alt="Logo - lasa Ona" style="max-height: 80px" />
                                </a>
                                <a href="{{route('home')}}" class="logo-black" title="Logo - lasa Ona">
                                    <img src="{{URL::to('/public/images')}}/logo-black-min.png" alt="Logo - lasa Ona" style="max-height: 80px" />
                                </a>
                                <a href="{{route('home')}}" class="logo-retina" title="Logo - lasa Ona">
                                    <img src="{{URL::to('/public/images')}}/logo-black-min.png" alt="Logo - lasa Ona" style="max-height: 80px" />
                                </a>
                                    <a href="{{route('home')}}" class="logo-sticky" title="Logo - lasa Ona">
                                    <img src="{{URL::to('/public/images')}}/logo-white-min.png" alt="Logo - lasa Ona" style="max-height: 40px" />
                                </a>
                            </div>            
                        </div>
                        
                        <div class="col-md-8 row header-center align-self-center">
                            
                            <!-- Primary Menu -->
                            <div class="header-navigation navbar navbar-toggleable-md" role="navigation">
                                <div id="header-primary-menu" class="menu-wrap">
                                    <ul id="main-menu" class="haru-main-menu nav-collapse navbar-nav">

                                        <li id="menu-item-100" class="haru-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children level-0 ">
                                            <a href="{{route('home')}}">Home</a>
                                            
                                        </li>

                                        <li id="menu-item-100" class="haru-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children level-0 ">
                                            <a href="{{route('about')}}">About Me</a>
                                            
                                        </li>

                                        <li id="menu-item-100" class="haru-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children level-0 ">
                                            <a href="{{route('real-estate')}}">Real Estate</a>
                                            
                                        </li>

                                        <li id="menu-item-100" class="haru-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children level-0 ">
                                            <a href="{{route('music')}}">Music</a>
                                            
                                        </li>

                                        <li id="menu-item-100" class="haru-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children level-0 ">
                                            <a href="{{route('blogs')}}">Blogs</a><b class="menu-caret"></b>
                                            <!-- <ul class="sub-menu animated menu_fadeInDown" style="">
                                                @foreach($blog_categories as $val)
                                                    <li id="menu-item-1915" class="haru-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page menu-item-home level-1 ">
                                                        <a href="{{route('blog.category', $val->slug)}}">{{$val->name}}</a>
                                                    </li>
                                                @endforeach
                                            </ul> -->
                                        </li>
                                        <li id="menu-item-100" class="haru-menu menu_style_dropdown   menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children level-0 ">
                                            <a href="{{route('contact')}}">Contact</a>
                                            
                                        </li>
                                    </ul>                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 header-right header-elements align-self-center">
                            <div class="header-elements header-elements-right">
                                <div class="header-elements-item search-button-wrap">
                                    <a href="javascript:;" class="header-search-button" data-effect="ZoomIn"><i class="header-icon ion ion-md-search"></i></a>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div id="haru-search-popup" class="white-popup mfp-hide mfp-with-anim">
                <div class="haru-search-wrap" data-hint-message="Please type at least 3 character to search...">
                    <form method="get" action="https://demo.harutheme.com/formota" class="search-popup-form" data-search-type="standard">
                        <input type="search" name="s" autocomplete="off" placeholder="Search for...">
                        <button type="submit"><i class="icon-search ion ion-md-search"></i></button>
                        <input type="hidden" name="post_type" value="haru_video">
                    </form>
                </div>
            </div>