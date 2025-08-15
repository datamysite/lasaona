


<div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid actor-introduce2 vc_row-has-fill">
  <div class="wpb_column vc_column_container vc_col-sm-12">
      <div class="vc_column-inner">
          <div class="wpb_wrapper">
              
            <div class="single-director-gallery" bis_skin_checked="1">
              <div class="" bis_skin_checked="1">
                  <div class="wpb_wrapper">
                      <div class="vc_row wpb_row vc_inner vc_row-fluid">
                          <div class="wpb_column vc_column_container vc_col-sm-12">
                              <div class="vc_column-inner">
                                  <div class="wpb_wrapper">
                                      <h2 style="text-align: left" class="vc_custom_heading heading_style_10 text-dark"><i class="fa fa-camera"></i></h2>
                                      <h2 style="text-align: center" class="vc_custom_heading vc_custom_1530602768482 heading_style_11 text-dark">Photo Gallery</h2>
                                      <hr>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="director-gallery" bis_skin_checked="1">
                  <section class="gallery py-5">
                    <section class="p-0 ">
                      <div class="row g-3"> 
                        @for($i=1; $i<13; $i++)
                        <div class="col-md-3">
                          <div class="lightbox_img_wrap">
                            <img class="lightbox-enabled" src="{{URL::to('/public/images/gallery/'.$i.'-min.jpg')}}" 
                              data-imgsrc="{{URL::to('/public/images/gallery/'.$i.'-min.jpg')}}">
                          </div>
                          <br>  
                        </div>
                        @endfor
                     </div>  
                    </section>
                  </section>
                  
                  <section class="lightbox-container">

                    <span class="material-symbols-outlined material-icons lightbox-btn left" id="left">
                      <
                    </span>
                    <span class="material-symbols-outlined material-icons lightbox-btn right" id="right">
                      >
                    </span>
                    <span id="close" class="close material-icons material-symbols-outlined">
                      X
                    </span>
                    <div class="lightbox-image-wrapper">
                      <img alt="lightboximage" class="lightbox-image">
                    </div>
                  </section>
              </div>
            </div>

          </div>
      </div>
  </div>
</div>