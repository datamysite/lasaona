@extends('web.includes.master')

@section('content')

<section  class="header">
        
        @include('web.includes.header')

</section>
    <div class="sub-header-div text-center">
        <div class="blog-img">
            <img src="{{URL::to('public/storage/blogs/'.$data->banner)}}" alt="{{$data->banner_alt}}">
        </div>
        <div class="sub-header-content">
            <h1 class="text-white">{{$data->heading}}</h1>
            <br>
            <p class="text-center">
                <small class="text-white cat">
                    <i class="far fa-clock text-theme"></i>&nbsp;&nbsp;{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fas fa-user text-theme"></i>&nbsp;&nbsp;{{$data->author->name}}
                  </small>
            </p>
        </div>
    </div>
    
    <div class="container-fluid fh5co-news blog-container" id="blogs">
        <div class="container">
            <div class="row">
                <div class=" col-lg-9">
                    <div class="row">
                        
                        <div class="col-12">
                            {!! $data->description !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="aside-form">
                        <h3>Got Something to Say?</h3>
                        <h4>Ask us anything</h4>
                        <form action="{{route('enquiry.submit')}}" method="post">
                            @csrf
                            <input type="text" name="name" placeholder="Name" class="form-control" required>
                            
                            <input type="text" name="phone" placeholder="Phone" class="form-control" required>

                            <input type="email" name="email" placeholder="Email" class="form-control aside-email" required>
                                                        
                            <textarea class="form-control" name="description" rows="4" placeholder="You Message" required></textarea>
                            
                            <button class="btn btn-theme">Submit Now</button>
                        </form>
                    </div>
                    <br>
                    <div class="ad-placeholder">
                        <img src="{{URL::to('/public/lol-ad.jpg')}}" width="100%" alt="Ad Placeholder">
                    </div>
                    <br>
                    @if(count($blog_categories) > 0)
                    <div class="blog-categories">
                        <h4>Blog Categories</h4>
                        @foreach($blog_categories as $val)
                            <a href="{{URL::to('/blogs/'.$val->slug)}}">
                                {{$val->name}} <small>({{count($val->blogs)}})</small>
                            </a>
                        @endforeach
                    </div>
                    @endif

                    <br>
                    <div class="ad-placeholder">
                        <img src="{{URL::to('/public/lol-ad.jpg')}}" width="100%" alt="Ad Placeholder">
                    </div>
                    <br>
                    @if(count($recent) > 0)
                    <div class="blog-categories">
                        <h4>Recent Blogs</h4>
                        @foreach($recent as $val)
                            <a href="{{URL::to('/'.$val->slug)}}">
                                <div class="blog-img-thumb">
                                    <img src="{{URL::to('public/storage/blogs/'.$val->banner)}}" alt="{{$val->banner_alt}}">
                                </div>
                                <div>
                                    {{$val->heading}}
                                </div>
                            </a>
                        @endforeach
                    </div>
                    @endif

                    <br>
                    <div class="ad-placeholder">
                        <img src="{{URL::to('/public/lol-ad.jpg')}}" width="100%" alt="Ad Placeholder">
                    </div>
                    <br>
                </div>
            </div>
            <br>
            <div class="blog-share">
                <div class="blog-share-content">
                    <p><i class="fa fa-share"></i> Share:</p>

                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ URL::current() }}" target="_blank" aria-label="Linkedin" class="share">
                         <span>Linkedin</span>
                    </a>

                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ URL::current() }}&amp;src=sdkpreparse" target="_blank" data-href="https://developers.facebook.com/docs/plugins/" data-layout="" data-size="" class="share">
                         <span>Facebook</span>
                    </a>

                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(URL::current()) }}&text={{ urlencode($data->heading) }}" target="_blank" aria-label="twitter" class="share">
                         <span>Twitter</span>
                    </a>

                    <a href="https://api.whatsapp.com/send?text={{ urlencode(URL::current()) }}" target="_blank" data-action="share/whatsapp/share" class="share">
                         <span>Whatsapp</span>
                    </a>

                    <a href="javascript:void(0)" data-link="{{ URL::current() }}" class="share-copy">
                         <span>Copy Link</span>
                    </a>
                </div>
            </div> 
            <hr>
        </div>
    </div>
    <div class="container-fluid fh5co-news" id="blogs">
        <div class="container">
            <h2>Related Blogs</h2>
            <div class="row">
                @foreach($related as $val)
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="card">
                        <img class="card-img" src="{{URL::to('public/storage/blogs/'.$val->banner)}}" alt="{{$val->banner_alt}}">
                        
                        <div class="card-body">
                          <h4 class="card-title text-theme2">{{$val->heading}}</h4>
                          <small class="text-muted cat">
                            <i class="far fa-clock text-theme"></i>&nbsp;&nbsp;{{ \Carbon\Carbon::parse($val->created_at)->diffForHumans() }}
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-user text-theme"></i>&nbsp;&nbsp;{{$val->author->name}}
                          </small>
                          <p class="card-text">{{$val->short_description}}</p>
                          <a href="{{route('blogs.detail', [$val->slug])}}" class="text-theme" target="_blank">Read More..</a>
                        </div>
                      </div>
                      <hr>
                      <br>
                    </div>
                @endforeach
              </div>
            <br>
        </div>
    </div>


@endsection
@section('addScript')

    <script type="text/javascript">
        $('.share-copy').click(function(){
            var $temp = $("<input>");
            var val = $(this).data('link');
            $("body").append($temp);
            $temp.val(val).select();
            document.execCommand("copy");
            $temp.remove();

            alert('Link Copied!')
        });
    </script>
@endsection