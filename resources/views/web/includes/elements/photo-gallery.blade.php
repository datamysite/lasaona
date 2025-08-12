<div class="single-director-gallery" bis_skin_checked="1">
  <div class="container" bis_skin_checked="1">
      <div class="gallery-heading" bis_skin_checked="1">
          <h3 class="gallery-title"><span>Photo </span>Gallery</h3>
      </div>
  </div>
  <div class="director-gallery" bis_skin_checked="1">
      <section class="gallery py-5">
        <section class="p-0 container">
          <div class="row g-3"> 
            @for($i=1; $i<10; $i++)
            <div class="col-md-4">
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