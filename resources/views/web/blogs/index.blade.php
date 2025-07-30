@extends('web.includes.master')
@section('metaAddition')
@if(!empty($nofollow))
<meta name="robots" content="noindex, follow">
@endif
@endsection
@section('content')

<section  class="header">
        
        @include('web.includes.header')

        <div class="sub-header-div text-center" style="background-image: url('{{URL::to('/public/images/home-bg.png')}}');">
            <div class="sub-header-content">
                <h2 class="text-white">Blogs</h2>
                <br>
                <p class="text-center">Discover expert advice, heartwarming stories, and essential tips on pet care and animal well-being. Our blog dives into everything from pet training and nutrition to heart-touching rescue stories, helping you become the best pet parent possible!</p>
            </div>
        </div>
</section>

    <div class="container-fluid fh5co-news" id="blogs">
        <div class="container">
            <br>
            <div class="row">
                <div class="col-12 text-center">
                    <ul class="blog-categories-list">
                        <li>
                            <a href="{{route('blogs')}}" class="{{empty($cat->id) ? 'active' : ''}}">All <span>({{$blogCount}})</span></a>
                        </li>
                        @foreach($categories as $val)
                            @if(count($val->blogs) != 0)
                                <li>
                                    <a href="{{URL::to('/blogs/'.$val->slug)}}" class="{{!empty($cat->id) && $cat->id == $val->id ? 'active' : ''}}">{{$val->name}} <span>({{count($val->blogs)}})</span></a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                    <hr>
                </div>
                @foreach($data as $val)
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

                
                  <div class="col-lg-12 blog-pagination">
                    <br>
                    {!! $data->withQueryString()->links('pagination::bootstrap-5') !!}
                  </div>
              </div>
            <br>
        </div>
    </div>


@endsection