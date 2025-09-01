@extends('web.includes.master')
@section('addStyle')
    <style>
        .haru-page-title-section .haru-breadcrumb-wrapper {
            padding-bottom: 2%;
        }
        .haru-page-title-section .haru-page-title-wrapper {
            padding-top: 6%;
        }
        .vc_custom_1533714072840 {
            padding-top: 1% !important;
            padding-bottom: 1% !important;
            background-color: #f8f8f8 !important;
        }
        .haru-page-title-section .haru-page-title-wrapper .page-title-inner .block-center-inner h2{
          font-size: 25px !important;
          padding-right: 415px;
        }
        .haru-page-title-section{
          padding: 45px 0;
              margin-bottom: 65px;
        }
        .single-content .single-wrapper article .post-thumbnail-wrapper{
            margin-top: 12px;
        }
        @media (max-width: 991px) {
            .haru-page-title-section .haru-page-title-wrapper .page-title-inner .block-center-inner h2{
              font-size: 15px !important;
                padding-right: 30px;
                text-transform: capitalize;
                line-height: 22px;
            }
        }
    </style>
@endsection
@section('content')

<main id="main" class="site-main" role="main">
    <div class="haru-page-title-section" style="background-image: url({{URL::to('/public/images')}}/page-bg.jpg);">
        <section class="haru-page-title-wrapper page-title-wrap-bg">
            <div class="container">
                <div class="page-title-inner">
                    <div class="block-center-inner">
                        <h2>{{$data->heading}}</h2>
                    </div>
                </div>
            </div>
        </section>
                
        <div class="haru-breadcrumb-wrapper breadcrumb-archive-product-wrap">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="{{route('home')}}" class="home">Home</a></li>
                    <li><a href="{{route('blogs')}}" class="home">Blogs</a></li>
                    <li><span>{{$data->heading}}</span></li>
                </ul>            
            </div>
        </div>
    </div>

    <div class="haru-archive-blog">
        <div class="container ">
            <div class="row">
                    
                <div class="single-content col-md-9   col-sm-12 col-xs-12" bis_skin_checked="1">
                    <div class="single-wrapper" bis_skin_checked="1">
                        <article id="post-173" class="post-173 post type-post status-publish format-image has-post-thumbnail hentry category-lifestyle tag-director tag-film-maker tag-film-studio post_format-post-format-image clearfix">
                            <div class="post-wrapper" bis_skin_checked="1">
                                <div class="post-meta-wrapper" bis_skin_checked="1">
            
                                    <div class="post-meta-info" bis_skin_checked="1">
                                        <h3 class="post-title">{{$data->heading}}</h3>
                                        <div class="post-info" bis_skin_checked="1">
                                            <div class="post-meta-author" bis_skin_checked="1"><span class="post-by">by</span>
                                                <a href="" rel="nofollow" bis_skin_checked="1">{{$data->author->name}}</a>        
                                            </div>/
                                            <div class="post-meta-date" bis_skin_checked="1">{{date('F d, Y', strtotime($data->created_at))}}</div>
                                            
                                        </div>
                                    </div>        
                                </div>

                                <div class="post-thumbnail-wrapper" bis_skin_checked="1">
                                    <div class="post-thumbnail" bis_skin_checked="1">
                                        <img class="img-responsive" src="{{URL::to('public/storage/blogs/'.$data->banner)}}" alt="{{$data->banner_alt}}">
                                    </div>                
                                    <div class="post-meta-category" bis_skin_checked="1">
                                        <a href="{{URL::to('/blogs/'.$data->category->slug)}}" bis_skin_checked="1">{{$data->category->name}}</a>
                                    </div>
                                </div>
                                
                                <div class="post-content-wrapper" bis_skin_checked="1">
                                    <div class="post-content" bis_skin_checked="1">
                                        {!! $data->description !!}
                                    </div>
            
                                    <div class="post-other-meta clearfix" bis_skin_checked="1">

                                        <div class="post-social-share" bis_skin_checked="1">
                                            <div class="social-share-wrapper" bis_skin_checked="1">
            
                                                <ul class="social-share">
                                                    <li class="social-label">
                                                        Share:                 
                                                    </li>
                                                    <li>
                                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ URL::current() }}" target="_blank" aria-label="Linkedin" class="share-linkedin">
                                                            <i class="fa fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ URL::current() }}&amp;src=sdkpreparse" target="_blank" data-href="https://developers.facebook.com/docs/plugins/" data-layout="" data-size="" class="share-facebook">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(URL::current()) }}&text={{ urlencode($data->heading) }}" target="_blank" aria-label="twitter" class="share-twitter">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://api.whatsapp.com/send?text={{ urlencode(URL::current()) }}" target="_blank" data-action="share/whatsapp/share" class="share-whatsapp">
                                                            <i class="fa fa-whatsapp"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" data-link="{{ URL::current() }}" class="share-copy">
                                                            <i class="fa fa-copy"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                      
                    </div>
                </div>
                
                <div class="archive-sidebar right-sidebar col-md-3 col-sm-12 col-xs-12">
                    <aside id="search-4" class="widget widget_search">
                        <form role="search" method="get" class="search-form" action="https://demo.harutheme.com/formota/">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" placeholder="Search..." value="" name="s">
                            </label>
                            <button type="submit" class="search-submit"><span>Search</span></button>
                        </form>
                    </aside>
                    <!-- <aside id="media_image-2" class="widget widget_media_image">
                        <img width="300" height="165" src="{{URL::to('/public/images/gallery/10.jpg')}}" class="image wp-image-2016  attachment-medium size-medium" alt="LasaOna" style="max-width: 100%; height: auto;" decoding="async" loading="lazy" srcset="{{URL::to('/public/images/gallery/10.jpg')}} 300w, {{URL::to('/public/images/gallery/10.jpg')}} 400w" sizes="(max-width: 300px) 100vw, 300px">
                    </aside> -->
                    <aside id="haru-banner-2" class="widget widget-banner">
                        <h4 class="widget-title"><span>Categories</span></h4>  
                    </aside>
                    @foreach($blog_categories as $val)
                        <aside class="widget widget-banner">            
                            <div class="banner-widget-wrap style_1">
                                <div class="banner-content-wrap">
                                    <a href="{{route('blog.category', $val->slug)}}" target="_self">
                                        <img src="{{URL::to('/public/images/categories/'.$val->slug.'.jpg')}}" alt="Category - {{$val->name}}">
                                        <div class="banner-content-inner">
                                            <div class="banner-content">
                                                <h1 class="banner-title">{{$val->name}}</h1>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </aside>
                    @endforeach
                    <br>
                    <aside id="haru_widget_post_thumbnail-4" class="widget widget-post-thumbnail">
                        <h4 class="widget-title"><span>Trending Posts</span></h4>
                        <ul class="posts-thumbnail-list thumb_right">
                            @foreach($recent as $val)
                                <li class="clearfix">
                                    <div class="posts-thumbnail-image">
                                        <a href="{{route('blogs.detail', [$val->slug])}}">
                                            <img width="150" height="150" src="{{URL::to('public/storage/blogs/'.$val->banner)}}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="{{$val->banner_alt}}" decoding="async" loading="lazy">
                                        </a>
                                    </div>
                                    <div class="posts-thumbnail-content">
                                        <h4>
                                            <a href="{{route('blogs.detail', [$val->slug])}}" class="two-lines" title="">
                                                {{$val->heading}}
                                            </a>
                                        </h4>
                                        <div class="posts-thumbnail-meta">
                                            <span class="views-count"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($val->created_at)->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            
                        </ul>
                    </aside>               
                </div>                        
            </div>
        </div>
    </div>
</main>

@endsection

@section('footer')
    @include('web.includes.footer')
@endsection