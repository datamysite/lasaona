@extends('web.includes.master')
@section('addStyle')
	<style>
		.vc_custom_1531118663045 {
		    padding-top: 2% !important;
		}
	</style>
@endsection
@section('content')

<main class="haru-page">
    <div class="container clearfix">
        <div class="row clearfix">
            <div class="page-content col-md-12  col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="page-inner clearfix">
        
                        <div id="post-2051" class="post-2051 page type-page status-publish hentry clearfix">
                            <div  class="entry-content">
                                
                                @include('web.includes.elements.hero-section')

                                @include('web.includes.elements.about-section')

                                <div class="vc_row-full-width vc_clearfix"></div>


                                <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_custom_1530603206608 vc_row-has-fill striped-background image-background" style="position: relative; left: -367.5px; box-sizing: border-box; width: 1905px; max-width: 1905px; padding-left: 367.5px; padding-right: 367.5px;">
                                	<div class="wpb_column vc_column_container vc_col-sm-12">
                                		<div class="vc_column-inner">
                                			<div class="wpb_wrapper">
                                				<div class="vc_row wpb_row vc_inner vc_row-fluid">
                                					<div class="wpb_column vc_column_container vc_col-sm-12">
                                						<div class="vc_column-inner">
                                							<div class="wpb_wrapper">
                                								<h2 style="text-align: left" class="vc_custom_heading heading_style_10">02</h2>
                                								<h2 style="text-align: center" class="vc_custom_heading vc_custom_1530602768482 heading_style_11">Real Estate</h2>
                                							</div>
                                						</div>
                                					</div>
                                				</div>
                                				<div class="vc_row wpb_row vc_inner vc_row-fluid">
                                					<div class="wpb_column vc_column_container vc_col-sm-12">
                                						<div class="vc_column-inner">
                                							<div class="wpb_wrapper">
																<div class="wpb_text_column wpb_content_element  fs-18 text-color-secondary secondary-font">
																	<div class="wpb_wrapper">
																		<p class="p1 sub-para" style="text-align: center;"><span class="s1">We work with rare developers who embody thoughtful construction and boutique luxury — each project carefully researched and curated for buyers who seek meaningful, lasting value in their homes.</span></p>

																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="vc_row wpb_row vc_inner vc_row-fluid">
													<div class="wpb_column vc_column_container vc_col-sm-12">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">  
        														<div class="  ">
                													<div class="teammember-shortcode-wrap grid ">
                														<div class="teammember-list padding-15 columns-3" style="position: relative;">
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
																            @endforeach
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

        						<div class="vc_row-full-width vc_clearfix"></div>

        						<div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_custom_1531101361740 vc_row-has-fill" style="position: relative; left: -367.5px; box-sizing: border-box; width: 1905px; max-width: 1905px; padding-left: 367.5px; padding-right: 367.5px;">
        							<div class="wpb_column vc_column_container vc_col-sm-12">
        								<div class="vc_column-inner">
        									<div class="wpb_wrapper">
        										<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1531105748552">
        											<div class="wpb_column vc_column_container vc_col-sm-12">
								                        <div class="vc_column-inner">
								                            <div class="wpb_wrapper">
								                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
								                                    <div class="wpb_column vc_column_container vc_col-sm-12">
								                                        <div class="vc_column-inner">
								                                            <div class="wpb_wrapper">
								                                                <h2 style="text-align: left" class="vc_custom_heading heading_style_10 text-dark">03</h2>
								                                            </div>
								                                        </div>
								                                    </div>
								                                </div>
								                            </div>
								                        </div>
								                    </div>
        											<div class="wpb_column vc_column_container vc_col-sm-12">
        												<div class="vc_column-inner">
        													<div class="wpb_wrapper">
        														<h2 style="text-align: center;" class="vc_custom_heading heading_style_6">More Interesting Topics</h2>
        													</div>
        												</div>
        											</div>
        										</div>
        										<div class="vc_row wpb_row vc_inner vc_row-fluid">
        											<div class="wpb_column vc_column_container vc_col-sm-12">
        												<div class="vc_column-inner">
        													<div class="wpb_wrapper">            
        														<div class=" ">
                    												<div class="blog-shortcode-wrapper masonry ">
        																<div class="blog-list columns-3" style="position: relative; ">
        																	@foreach($blogs as $val)
															                    <article class="blog-item" style="">
															                    	<a href="{{route('blogs.detail', [$val->slug])}}" target="_blank">
																		                <div class="post-content">
																		                    <div class="post-thumbnail">
																		                        <div class="post-image">
																		                            <img loading="lazy" decoding="async" width="840" height="440" src="{{URL::to('public/storage/blogs/'.$val->banner)}}" alt="{{$val->banner_alt}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" sizes="(max-width: 840px) 100vw, 840px">                        
																		                        </div>
																		                    </div>
																		                    <div class="post-meta">
																		                        <div class="post-category">
																		                            {{$val->category->name}}             
																		                        </div>
																		                        <h3 class="post-title two-lines">
																		                        	{{$val->heading}}
																		                        </h3>
																		                        <p class="post-excerpt three-lines">
																		                            {{$val->short_description}}                      
																		                        </p>
																		                    </div>
																		                </div>
																		            </a>
																	            </article>
																	        @endforeach
	                   													</div>
																		<div class="blog-shortcode-paging load-more">
            																<a href="{{route('blogs')}}" class="blog-load-more">
                																View More            
                															</a>
                    													</div>
                														<br><br><br>
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


        						<div class="vc_row-full-width vc_clearfix"></div>

                                @include('web.includes.elements.music-section')

                                <div class="vc_row-full-width vc_clearfix"></div>


                                @include('web.includes.elements.instagram')

                                <div class="vc_row-full-width vc_clearfix"></div>
                            </div>
                        </div>                 
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>  

@endsection

@section('footer')
	@include('web.includes.footer-home')
@endsection