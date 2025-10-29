
<div class="vc_row-full-width vc_clearfix"></div>
<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" class="vc_row wpb_row vc_row-fluid vc_custom_1533887730832 remove-bg-image vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving">
    <div class="wpb_wrapper achivement-background">
        <div class="vc_row wpb_row vc_inner vc_row">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper"> 
                        <h3 class="realated-title text-center"><span>Lasa  </span>Highlights</h3>
                        <p class=" text-center">Milestones, Media, and the Moments That Matter— From Center Stage to Closing Deals</p>                       
                        <div class=" ">
                            <div class="images-gallery-shortcode-wrap slick" data-columns="3">
                                <div class="images-list slider-for">
                                    @foreach($updates as $val)
                                        <div class="image-item image-col-2">
                                            <div class="slide-item">
                                                <a href="{{$val->link}}" target="_blank">
                                                    <div class="video-related" bis_skin_checked="1">
                                                        <div class="video-image" bis_skin_checked="1">
                                                            <img src="{{URL::to('/public/storage/updates/'.$val->image)}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" loading="lazy">     
                                                        </div>
                                                        <div class="video-meta" bis_skin_checked="1">
                                                            <h5 class="video-title">
                                                                {{$val->title}}
                                                            </h5>
                                                            <div class="video-category" bis_skin_checked="1">
                                                                <i class="{{$val->ref_icon}}"></i>&nbsp; {{$val->ref_name}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
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

