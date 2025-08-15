


<div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid actor-introduce2 vc_row-has-fill">
  <div class="wpb_column vc_column_container vc_col-sm-12">
      <div class="vc_column-inner">
          <div class="wpb_wrapper">
              
            <div class="single-director-gallery" bis_skin_checked="1">
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