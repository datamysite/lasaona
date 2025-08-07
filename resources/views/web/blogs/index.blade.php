@extends('web.includes.master')
@section('addStyle')
    <style>
        .haru-page-title-section .haru-breadcrumb-wrapper {
            padding-bottom: 0%;
        }
        .haru-page-title-section .haru-page-title-wrapper {
            padding-top: 6%;
        }
        .vc_custom_1533714072840 {
            padding-top: 1% !important;
            padding-bottom: 1% !important;
            background-color: #f8f8f8 !important;
        }
    </style>
@endsection
@section('content')

<main id="main" class="site-main" role="main">
    <div class="haru-page-title-section" style="background-image: url({{URL::to('/public/images')}}/bg-page-title.jpg);">
        <section class="haru-page-title-wrapper page-title-wrap-bg">
            <div class="container">
                <div class="page-title-inner">
                    <div class="block-center-inner">
                        <h2>Blogs</h2>
                    </div>
                </div>
            </div>
        </section>
                
        <div class="haru-breadcrumb-wrapper breadcrumb-archive-product-wrap">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="{{route('home')}}" class="home">Home</a></li>
                    <li><span>Blogs</span></li>
                </ul>            
            </div>
        </div>
    </div>

    <div class="haru-archive-blog">
        <div class="container ">
            <div class="row">
                    
                <!-- Archive content -->
                <div class="archive-content col-md-9  col-sm-12 col-xs-12">
                    <div class="archive-content-layout layout-style-large-image"> 
                        <div class="row">
                            @foreach($data as $val)
                                <article id="post-173" class="large-image col-md-6 col-sm-12 col-xs-12 post-173 post type-post status-publish format-image has-post-thumbnail sticky hentry category-lifestyle tag-director tag-film-maker tag-film-studio post_format-post-format-image clearfix">
                                    <div class="post-wrapper clearfix">
                                        <div class="post-thumbnail-wrapper">
                                            <div class="post-thumbnail">
                                                <a href="{{route('blogs.detail', [$val->slug])}}" target="_blank" class="post-thumbnail-overlay">
                                                    <img class="img-responsive" src="{{URL::to('public/storage/blogs/'.$val->banner)}}" alt="{{$val->banner_alt}}">
                                                </a>
                                            </div>                
                                            <div class="post-category">
                                                <a href="{{URL::to('/blogs/'.$val->category->slug)}}" target="_blank" rel="category tag">{{$val->category->name}}</a>                
                                            </div>
                                        </div>
                                        <div class="post-content-wrapper">
                                            <div class="post-detail">
                                                <h3 class="post-title">
                                                    <a href="{{route('blogs.detail', [$val->slug])}}" target="_blank" rel="bookmark">{{$val->heading}}</a>
                                                </h3>
                                                <div class="post-meta-info">
                                                    <div class="post-meta-author">
                                                        <span class="post-by">by</span>
                                                        <a href="{{route('blogs.detail', [$val->slug])}}" target="_blank">{{$val->author->name}}</a>
                                                    </div>/
                                                    <div class="post-meta-date">{{date('F d, Y', strtotime($val->created_at))}}</div>
                                                </div>
                                                <div class="post-excerpt two-lines">
                                                    {{$val->short_description}}             
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>

                        <div class="archive-paging default">
                            <ul class="page-numbers">
                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="https://demo.harutheme.com/formota/blog/page/2/">2</a></li>
                                <li><span class="page-numbers dots">…</span></li>
                                <li><a class="page-numbers" href="https://demo.harutheme.com/formota/blog/page/10/">10</a></li>
                                <li><a class="next page-numbers" href="https://demo.harutheme.com/formota/blog/page/2/">Next</a></li>
                            </ul>
                        </div>    
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
                    <aside id="media_image-2" class="widget widget_media_image">
                        <img width="300" height="165" src="https://demo.harutheme.com/formota/wp-content/uploads/2018/07/banner-81-300x165.jpg" class="image wp-image-2016  attachment-medium size-medium" alt="" style="max-width: 100%; height: auto;" decoding="async" loading="lazy" srcset="https://demo.harutheme.com/formota/wp-content/uploads/2018/07/banner-81-300x165.jpg 300w, https://demo.harutheme.com/formota/wp-content/uploads/2018/07/banner-81.jpg 400w" sizes="(max-width: 300px) 100vw, 300px">
                    </aside>
                    <aside id="haru-banner-2" class="widget widget-banner">
                        <h4 class="widget-title"><span>Categories</span></h4>            
                        <div class="banner-widget-wrap style_1">
                            <div class="banner-content-wrap">
                                <a href="#" target="_self">
                                    <img src="https://demo.harutheme.com/formota/wp-content/uploads/2018/07/banner-82.jpg" alt="Categories">
                                    <div class="banner-content-inner">
                                        <div class="banner-content">
                                            <h1 class="banner-title">Interviews</h1>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </aside>
                    <aside id="haru-banner-3" class="widget widget-banner">            
                        <div class="banner-widget-wrap style_1">
                            <div class="banner-content-wrap">
                                <a href="#" target="_self">
                                    <img src="https://demo.harutheme.com/formota/wp-content/uploads/2018/07/banner-83.jpg" alt="">
                                    <div class="banner-content-inner">
                                        <div class="banner-content">
                                            <h1 class="banner-title">Reviews</h1>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </aside>
                    <aside id="haru-banner-4" class="widget widget-banner">            
                        <div class="banner-widget-wrap style_1">
                            <div class="banner-content-wrap">
                                <a href="#" target="_self">
                                    <img src="https://demo.harutheme.com/formota/wp-content/uploads/2018/07/banner-84.jpg" alt="">
                                    <div class="banner-content-inner">
                                        <div class="banner-content">
                                            <h1 class="banner-title">Videos</h1>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </aside>
                    <aside id="haru-banner-5" class="last-banner widget widget-banner">            
                        <div class="banner-widget-wrap style_1">
                            <div class="banner-content-wrap">
                                <a href="#" target="_self">
                                    <img src="https://demo.harutheme.com/formota/wp-content/uploads/2018/07/banner-85.jpg" alt="">
                                    <div class="banner-content-inner">
                                        <div class="banner-content">
                                            <h1 class="banner-title">Topics</h1>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </aside>
                    <aside id="haru_widget_post_thumbnail-4" class="widget widget-post-thumbnail">
                        <h4 class="widget-title"><span>Trending Posts</span></h4>
                        <ul class="posts-thumbnail-list thumb_right">
                            <li class="clearfix">
                                <div class="posts-thumbnail-image">
                                    <a href="https://demo.harutheme.com/formota/more-green-tree-will-more-healthy/">
                                        <img width="150" height="150" src="https://demo.harutheme.com/formota/wp-content/uploads/2018/01/single-blog-18-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" title="More green tree will more healthy" decoding="async" loading="lazy">
                                    </a>
                                </div>
                                <div class="posts-thumbnail-content">
                                    <h4>
                                        <a href="" title="">
                                            More green tree will more healthy
                                        </a>
                                    </h4>
                                    <div class="posts-thumbnail-meta">
                                        <span class="views-count"><i class="fa fa-clock-o"></i>5 days ago</span>
                                    </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="posts-thumbnail-image">
                                    <a href="https://demo.harutheme.com/formota/more-green-tree-will-more-healthy/">
                                        <img width="150" height="150" src="https://demo.harutheme.com/formota/wp-content/uploads/2018/01/single-blog-18-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" title="More green tree will more healthy" decoding="async" loading="lazy">
                                    </a>
                                </div>
                                <div class="posts-thumbnail-content">
                                    <h4>
                                        <a href="" title="">
                                            More green tree will more healthy
                                        </a>
                                    </h4>
                                    <div class="posts-thumbnail-meta">
                                        <span class="views-count"><i class="fa fa-clock-o"></i>5 days ago</span>
                                    </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="posts-thumbnail-image">
                                    <a href="https://demo.harutheme.com/formota/more-green-tree-will-more-healthy/">
                                        <img width="150" height="150" src="https://demo.harutheme.com/formota/wp-content/uploads/2018/01/single-blog-18-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" title="More green tree will more healthy" decoding="async" loading="lazy">
                                    </a>
                                </div>
                                <div class="posts-thumbnail-content">
                                    <h4>
                                        <a href="" title="">
                                            More green tree will more healthy
                                        </a>
                                    </h4>
                                    <div class="posts-thumbnail-meta">
                                        <span class="views-count"><i class="fa fa-clock-o"></i>5 days ago</span>
                                    </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="posts-thumbnail-image">
                                    <a href="https://demo.harutheme.com/formota/more-green-tree-will-more-healthy/">
                                        <img width="150" height="150" src="https://demo.harutheme.com/formota/wp-content/uploads/2018/01/single-blog-18-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" title="More green tree will more healthy" decoding="async" loading="lazy">
                                    </a>
                                </div>
                                <div class="posts-thumbnail-content">
                                    <h4>
                                        <a href="" title="">
                                            More green tree will more healthy
                                        </a>
                                    </h4>
                                    <div class="posts-thumbnail-meta">
                                        <span class="views-count"><i class="fa fa-clock-o"></i>5 days ago</span>
                                    </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="posts-thumbnail-image">
                                    <a href="https://demo.harutheme.com/formota/more-green-tree-will-more-healthy/">
                                        <img width="150" height="150" src="https://demo.harutheme.com/formota/wp-content/uploads/2018/01/single-blog-18-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" title="More green tree will more healthy" decoding="async" loading="lazy">
                                    </a>
                                </div>
                                <div class="posts-thumbnail-content">
                                    <h4>
                                        <a href="" title="">
                                            More green tree will more healthy
                                        </a>
                                    </h4>
                                    <div class="posts-thumbnail-meta">
                                        <span class="views-count"><i class="fa fa-clock-o"></i>5 days ago</span>
                                    </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="posts-thumbnail-image">
                                    <a href="https://demo.harutheme.com/formota/more-green-tree-will-more-healthy/">
                                        <img width="150" height="150" src="https://demo.harutheme.com/formota/wp-content/uploads/2018/01/single-blog-18-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" title="More green tree will more healthy" decoding="async" loading="lazy">
                                    </a>
                                </div>
                                <div class="posts-thumbnail-content">
                                    <h4>
                                        <a href="" title="">
                                            More green tree will more healthy
                                        </a>
                                    </h4>
                                    <div class="posts-thumbnail-meta">
                                        <span class="views-count"><i class="fa fa-clock-o"></i>5 days ago</span>
                                    </div>
                                </div>
                            </li>
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