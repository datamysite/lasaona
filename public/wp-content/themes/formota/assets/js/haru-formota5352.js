/**
 * @package    HaruTheme
 * @version    1.0.0
 * @author     Administrator <admin@harutheme.com>
 * @copyright  Copyright (c) 2017, HaruTheme
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       http://harutheme.com
*/

(function ($) {
    "use strict";
    var HaruFormota = {
        init: function() {
            HaruFormota.base.init();
            HaruFormota.video.init();
            HaruFormota.actor.init();
            HaruFormota.director.init();
            HaruFormota.teammember.init();
            HaruFormota.blog.init();
        }
    };
    
    HaruFormota.base = {
        init: function() {
            HaruFormota.base.galleryCreative();
            HaruFormota.base.timeline();
            HaruFormota.base.shortcodeImagesGallery();
            HaruFormota.base.shortcodeCounter();
            HaruFormota.base.shortcodeVideo();
            HaruFormota.base.postAjaxOrder();
        },
        beforeAjax: function() {
            $('.haru-ajax-overflow').addClass('active');
        },
        afterAjax: function() {
            $('.haru-ajax-overflow').removeClass('active');
        },
        galleryCreative: function() {
            setTimeout(function(){
                $('.gallery-creative-shortcode-wrap').each(function(){
                    var $this = $(this);
                    var $container      = $(this).find('.gallery-list'); // parent element of .item
                    var masonry_options = {
                        'gutter' : 0
                    };
                    var $columns = parseInt($this.attr('data-columns'));
                    var $padding = $this.attr('data-padding');

                    $container.isotope({
                        itemSelector : '.gallery-item', // .item
                        transitionDuration : '0.4s',
                        masonry : masonry_options,
                        layoutMode : 'packery',
                    });

                    imagesLoaded($this,function(){
                        $container.isotope('layout');
                    });

                    HaruFormota.base.packeryPadding($this, $padding, $columns);

                    $(window).resize(function(){
                        setTimeout(function(){
                            $container.isotope('layout');
                            HaruFormota.base.packeryPadding($this, $padding, $columns);
                        }, 300);
                    });

                    // Popup gallery
                    $('.gallery-link').magnificPopup({
                        type: 'image',
                        gallery: {
                            enabled: true
                        }
                    });
                });
            }, 300);
        },
        packeryPadding: function(element, $padding, $columns) {
            if( element.hasClass('packery') && (typeof $padding !== 'undefined') && ($padding != 0) && ($(window).width() > 767) ) { // Use padding
                var gallery_wrapper_width = $(element).find('.gallery-list').width();
                var padding_total = Number($columns) * Number($padding) * 2;; // Column from gallery-packery.php file
                // console.log(gallery_wrapper_width);
                // console.log(padding_total);

                var gallery_item_height = (gallery_wrapper_width - padding_total) / $columns;
                console.log(gallery_item_height);
                // Small squared

                // Landscape
                $(element).find('.gallery-item.landscape').each(function() {
                    $(this).css({"height": gallery_item_height});
                    $('img',this).css({"height": gallery_item_height});
                });
                // Portrait
                $(element).find('.gallery-item.portrait').each(function() {
                    $(this).css({"height": (Number(gallery_item_height) + Number($padding)) * 2 });
                    $('img',this).css({"height": (Number(gallery_item_height) + Number($padding)) * 2 });
                });
                // Big Squared
                $(element).find('.gallery-item.big_squared').each(function() {
                    $(this).css({"height": (Number(gallery_item_height) + Number($padding)) * 2 });
                    $('img',this).css({"height": (Number(gallery_item_height) + Number($padding)) * 2 });
                });
            }
        },
        timeline: function() {
            $('.timeline-shortcode-wrap.carousel').each(function() {
                var timeline_content    = $(this).find("#timeline-content");
                var timeline_thumb    = $(this).find("#timeline-thumb");

                timeline_content.slick();
                timeline_thumb.slick();            
            });
        },
        shortcodeImagesGallery: function() {
            $('.images-gallery-shortcode-wrap').each(function(){
                var $this = $(this);
                var $columns = parseInt($this.attr('data-columns'));

                // Slick
                if ($this.hasClass('slick')) {
                    $this.find('.slider-for').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        centerMode: true,
                        centerPadding: '60px',
                        variableWidth: true,
                        arrows: true,
                        fade: false,
                        asNavFor: $('.slider-nav', $this),
                        responsive: [{
                                breakpoint: 1199,
                                settings: {
                                    variableWidth: false
                                }
                            },
                            {
                                breakpoint: 991,
                                settings: {
                                    variableWidth: false
                                }
                            },
                            {
                                breakpoint: 767,
                                settings: {
                                    variableWidth: false
                                }
                            }
                        ]
                    });
                    $this.find('.slider-nav').slick({
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        arrows: true,
                        asNavFor: $('.slider-for', $this),
                        dots: false,
                        infinite: true,
                        centerMode: true,
                        centerPadding: '0px',
                        focusOnSelect: true,
                        responsive: [{
                                breakpoint: 991,
                                settings: {
                                    slidesToShow: 3
                                }
                            },
                            {
                                breakpoint: 767,
                                settings: {
                                    slidesToShow: 3
                                }
                            }
                        ]
                    });
                }

                // Slick 2
                if ($this.hasClass('slick_2')) {
                    $this.find('.slider-for').on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
                        // currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
                        var i = (currentSlide ? currentSlide : 0) + 1;
                        $this.find('.slide-count-wrap').text(i + '/' + slick.slideCount);
                    });
                    $this.find('.slider-for').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        centerMode: true,
                        centerPadding: '60px',
                        variableWidth: true,
                        arrows: true,
                        fade: false,
                        dotsClass: 'custom_paging',
                        responsive: [{
                                breakpoint: 1199,
                                settings: {
                                    variableWidth: false
                                }
                            },
                            {
                                breakpoint: 991,
                                settings: {
                                    variableWidth: false
                                }
                            },
                            {
                                breakpoint: 767,
                                settings: {
                                    variableWidth: false
                                }
                            }
                        ]
                    });
                }
            });
        },
        shortcodeCounter: function() {
            $('.counter-shortcode-wrap').each(function(){
                var $this = $(this);

                // Appear
                if (!$(".gr-animated").length) return;

                $(".gr-animated").appear();

                $(document.body).on("appear", ".gr-animated", function () {
                    $(this).addClass("go");
                });

                $(document.body).on("disappear", ".gr-animated", function () {
                    $(this).removeClass("go");
                });

                // Counter
                if (!$(".gr-number-counter").length) return;
                $(".gr-number-counter").appear(); // require jquery-appear

                $('body').on("appear", ".gr-number-counter", function () {
                    var counter = $(this);
                    if (!counter.hasClass("count-complete")) {
                        counter.countTo({
                            speed: 1500,
                            refreshInterval: 100,
                            onComplete: function () {
                                counter.addClass("count-complete");
                            }
                        });
                    }
                });
                
                $('body').on("disappear", ".gr-number-counter", function () {
                    $(this).removeClass("count-complete");
                });
            });
        },
        shortcodeVideo: function() {
            $('.video-popup-link').magnificPopup({
                type: 'iframe',
                iframe: {
                    markup: '<div class="mfp-iframe-scaler">'+
                            '<div class="mfp-close"></div>'+
                            '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                            '<div class="mfp-title">Some caption</div>'+
                          '</div>'
                },
                callbacks: {
                    markupParse: function(template, values, item) {
                        values.title = item.el.attr('title');
                    }   
                }
            });
        },
        postAjaxOrder: function () {
            var posts_ajax_order_data = []; // Use this for product ajax order shortcode

            $('.haru-posts-ajax-order').each(function(){
                var $this = $(this);

                $this.find('.posts-tabs .tab-item').on('click', function() {
                    if ( $(this).hasClass('current') || $(this).parents('.haru-posts-ajax-order').find('.posts-content').hasClass('loading') ){
                        return;
                    }
                    var element       = $(this).parents('.haru-posts-ajax-order');
                    var element_id    = element.attr('id');
                    var atts          = element.data('atts');
                    var post_order = $(this).data('post_order');
                    
                    element.find('.posts-tabs .tab-item').removeClass('current');
                    $(this).addClass('current');
                    
                    /* Check cache */
                    var tab_data_index = element_id + '-' + post_order.toString().split(',').join('-');
                    if ( posts_ajax_order_data[tab_data_index] != undefined ){
                        element.find('.posts-content .posts-list').remove();
                        element.find('.posts-content').append( posts_ajax_order_data[tab_data_index] );
                        
                        return;
                    }

                    element.find('.posts-content').addClass('loading');

                    $.ajax({
                        type : "POST",
                        timeout : 30000,
                        url : haru_framework_ajax_url,
                        data : {
                            action: 'haru_get_post_content_in_order_tab', 
                            atts: atts, 
                            post_order: post_order
                        },
                        error: function(xhr,err) {
                            
                        },
                        success: function(response) {
                            if ( response ) {       
                                element.find('.posts-content .posts-list').remove();
                                element.find('.posts-content').append( response ).find('li.post-item').css('opacity',0).animate({opacity: 1},500);

                                /* Save cache */
                                posts_ajax_order_data[tab_data_index] = response;

                            }
                            element.find('.posts-content').removeClass('loading');
                        }
                    });
                });

                // Click first tab when page load
                $('.haru-posts-ajax-order').each(function() {
                    $(this).find('.posts-tabs .tab-item:first').trigger('click');
                });
            });
        },
    };

    HaruFormota.video = {
        init: function() {
            HaruFormota.video.thumbnailHover();
            HaruFormota.video.shortcodeVideo(); // Video gallery work
            HaruFormota.video.shortcodeVideoSlideshow();
            HaruFormota.video.shortcodeVideoCreative();
            HaruFormota.video.shortcodeVideoAjax();
            HaruFormota.video.shortcodeVideoModal(); // Video single
            HaruFormota.video.displayVideoPlayerDirect();
            HaruFormota.video.videoLoadMore();
            HaruFormota.video.videoInfiniteScroll();
            HaruFormota.video.singleVideoSlideshow();
            HaruFormota.video.singleVideoGallery();
            HaruFormota.video.singleVideoGalleryPopup();
        },
        thumbnailHover: function() {
            $('.video-thumbnail-slideshow').each(function(){
                var $self = $(this).parents('.video-item');
                var speed = $(this).data('speed');
                var currentIndex = 0,
                    items = $('img', $self),
                    itemAmt = items.length;

                if ( itemAmt == 1 ) {
                    return;
                }

                function cycleItems(currentIndex) {
                    var item = $('img', $self).eq(currentIndex);
                    items.hide();
                    item.css('display','block'); // item.fadeIn();
                }

                $self.mouseenter(function(){
                    var autoSlide = setInterval(function() {
                        currentIndex += 1;
                        if ( currentIndex > itemAmt - 1 ) {
                            currentIndex = 0;
                            // Go to first & stop
                            clearInterval(autoSlide);
                        }
                        cycleItems(currentIndex);
                    }, speed);

                    $self.mouseleave(function(){
                        clearInterval(autoSlide);
                        // Show first thumb
                        $.each(items, function( index, item ) {
                            if ( item == items[0] ) {
                                $(item).css('display','block');
                            } else {
                                $(item).hide();
                            }
                        });
                    });
                });
            });

            $('.video-thumbnail-video:not(.video-autoplay)').each(function(){
                var $self = $(this).parents('.video-item');

                $self.hover(function(){
                    let video = $('video', this).get(0);
                    video.play();
                    video.muted = true;
                }, function() {
                    let video = $('video', this).get(0);
                    video.pause();
                });
            });
        },
        shortcodeVideo: function() {
            var default_filter = [];
            var array_filter = []; // Push filter to an array to process when don't have filter

            $('.video-shortcode-wrapper').each(function(index, value) {
                // Process filter each shortcode
                $(this).find('.video-filter li').first().find('> a').addClass('selected');
                default_filter[index] = $(this).find('.video-filter li').first().find('a').attr('data-option-value');

                var self = $(this);
                var $container = $(this).find('.video-list'); // parent element of .item
                var $filter = $(this).find('.video-filter a');
                var masonry_options = {
                    'gutter': 0
                };

                array_filter[index] = $filter;

                // Add to process products layout style
                var layoutMode = 'fitRows';
                if (($(this).hasClass('masonry'))) {
                    var layoutMode = 'masonry';
                }

                for (var i = 0; i < array_filter.length; i++) {
                    if (array_filter[i].length == 0) {
                        default_filter = '';
                    }
                    $container.isotope({
                        itemSelector: '.video-item', // .item
                        transitionDuration: '0.4s',
                        masonry: masonry_options,
                        layoutMode: layoutMode,
                        filter: default_filter[i]
                    });
                }

                imagesLoaded(self, function() {
                    $container.isotope('layout');

                    HaruFormota.video.shortcodeVideoModal();
                    HaruFormota.video.thumbnailHover();
                });

                $(window).resize(function() {
                    $container.isotope('layout');
                });

                $filter.on('click touchstart', function(e) {
                    e.stopPropagation();
                    e.preventDefault();

                    var $this = $(this);
                    // Don't proceed if already selected
                    if ($this.hasClass('selected')) {
                        // return false;
                    }
                    var filters = $this.closest('ul.video-filter');
                    filters.find('.selected').removeClass('selected');
                    filters.find('.current-active').removeClass('current-active');

                    $this.addClass('selected');
                    $this.closest('li').addClass('selected'); // 
                    $this.closest('ul').addClass('current-active');
                    // 
                    
                    $this.parents('li').find('> a').addClass('selected');
                    $this.parents('li').addClass('selected'); // 
                    $this.parents('ul').addClass('current-active');

                    var options = {
                            layoutMode: layoutMode,
                            transitionDuration: '0.4s',
                            packery: {
                                horizontal: true
                            },
                            masonry: masonry_options
                        },
                        key = filters.attr('data-option-key'),
                        value = $this.attr('data-option-value');
                    value = value === 'false' ? false : value;
                    console.log(value);
                    options[key] = value;

                    $container.isotope(options);
                });
            });
        },
        shortcodeVideoSlideshow: function() {
            $('.video-slideshow-shortcode-wrapper').each(function() {
                var $this = $(this);
                var dots       = $(this).attr('data-dots') == 'true' ? true : false;
                // Slick
                if ($this.hasClass('slick') ) {
                    $this.find('.video-list').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                        infinite: true,
                        centerMode: true,
                        centerPadding: '0',
                        dots: dots,
                        variableWidth: true,
                        responsive: [
                            {
                                breakpoint: 991,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1
                                }
                            },
                            {
                                breakpoint: 767,
                                settings: {
                                    variableWidth: true
                                }
                            }
                        ]
                    });
                }
                // Slick 2
                if ( $this.hasClass('slick_2') ) {
                    $this.find('.slider-for').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                        infinite: true,
                        centerMode: true,
                        centerPadding: '0',
                        fade: true,
                        dots: dots,
                        variableWidth: false,
                        asNavFor: $('.slider-nav', $this),
                        responsive: [
                            {
                                breakpoint: 991,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1
                                }
                            },
                            {
                                breakpoint: 767,
                                settings: {
                                    variableWidth: false
                                }
                            }
                        ]
                    });
                    $this.find('.slider-nav').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        asNavFor: $('.slider-for', $this),
                        dots: false,
                        centerMode: false,
                        centerPadding: '0px',
                        focusOnSelect: true,
                        variableWidth: true,
                        responsive: [{
                                breakpoint: 991,
                                settings: {
                                    slidesToShow: 1
                                }
                            },
                            {
                                breakpoint: 767,
                                settings: {
                                    slidesToShow: 1,
                                    variableWidth: false
                                }
                            }
                        ]
                    });
                }
            });
        },
        shortcodeVideoCreative: function() {
            $('.video-creative-shortcode-wrapper').each(function() {
                var $this = $(this);
                
                $('.video-item', $this).each(function() {
                    $(this).on('mouseenter', function() {
                        $(this).addClass('active');
                        $(this).siblings().addClass('in-active').removeClass('active');
                    });
                    $(this).on('mouseleave', function() {
                        $(this).removeClass('active');
                        $(this).siblings().removeClass('in-active');
                    });
                });
            });
        },
        shortcodeVideoAjax: function() {
            var video_ajax_category_data = []; // Use this for video ajax category shortcode

            $('.video-shortcode-ajax').each(function() {
                var $this = $(this);

                $this.find('.video-filter .filter-item').on('click', function() {
                    // Check if already click or loading
                    if ( $(this).hasClass('selected') || $(this).parents('.video-shortcode-ajax').find('.video-list').hasClass('loading') ){
                        return;
                    }

                    var element         = $(this).parents('.video-shortcode-ajax');
                    var category        = $(this).data('category');
                    var atts            = element.data('atts');
                    var is_filter_all   = $(this).hasClass('filter-all') ? 1 : 0;
                    var paging          = $(this).parents('.video-shortcode-ajax').find('.videos-ajax-paging');
                    

                    element.find('.video-filter .filter-item').removeClass('selected');
                    $(this).addClass('selected');

                    // Check cache
                    var tab_data_index = category.toString().split(',').join('-');
                    if ( video_ajax_category_data[tab_data_index] != undefined ){
                        element.find('.video-list .videos').remove();
                        element.find('.videos-ajax-paging').remove();
                        element.find('.video-list').append( video_ajax_category_data[tab_data_index] );

                        HaruFormota.video.shortcodeVideoAjaxGrid( element );
                        HaruFormota.video.shortcodeVideoAjaxLoadMore( element );
                        HaruFormota.video.shortcodeVideoModal();
                        HaruFormota.video.thumbnailHover();

                        return;
                    }

                    // Load content via ajax
                    element.find('.video-list').addClass('loading');

                    $.ajax({
                        type : "POST",
                        timeout : 30000,
                        url : haru_framework_ajax_url,
                        data : {
                            action: 'haru_get_video_ajax', 
                            atts: atts, 
                            category: category, 
                            is_filter_all: is_filter_all
                        },
                        error: function(xhr,err) {
                            console.log('Have something wrong! Please try again!');
                        },
                        success: function(response) {
                            if ( response ) {       
                                element.find('.video-list .videos').remove();
                                element.find('.videos-ajax-paging').remove();
                                element.find('.video-list').append( response ).find('.video-item').css( 'opacity', 0 ).animate({ opacity: 1 }, 500);

                                /* Save cache */
                                video_ajax_category_data[tab_data_index] = response;

                                /* Generate isotope */
                                if ( $this.hasClass('grid') ) {
                                    HaruFormota.video.shortcodeVideoAjaxGrid( element );
                                } 
                                if ( $this.hasClass('slider') ) { 
                                    // Do something
                                }

                                HaruFormota.video.shortcodeVideoModal();
                                HaruFormota.video.thumbnailHover();
                            }
                            element.find('.video-list').removeClass('loading');

                            HaruFormota.video.shortcodeVideoAjaxLoadMore( element );
                        }
                    });
                });

                // Click first tab when page load
                $('.video-shortcode-ajax').each(function() {
                    $(this).find('.video-filter .filter-item:first').trigger('click');
                });

            });
        },
        shortcodeVideoAjaxLoadMore: function( element ) {
            $('.video-ajax-load-more').off().on('click', function(e) {
                e.preventDefault();

                var element_paging  = $(this).parents('.videos-ajax-paging');
                var category        = $(this).data('category');
                var atts            = $(this).data('atts');
                var current_page    = $(this).data('current_page');
                var is_filter_all   = $(this).hasClass('filter-all') ? 1 : 0;

                $.ajax({
                    url: haru_framework_ajax_url,
                    type: "POST",
                    data: {
                        action: 'haru_video_ajax_loadmore',
                        atts: atts, 
                        category: category,
                        current_page: current_page
                    },
                    dataType: "html",
                    beforeSend: function() {
                        element_paging.prepend('<span class="ajax-button-loading fa fa-spinner fa-spin"></span>');
                        element_paging.addClass('loading');
                    }
                }).success(function(response) {
                    element_paging.removeClass('loading');

                    if ( response ) {
                        var paging_button = $(response).find('div.videos-ajax-paging .video-ajax-load-more');

                        var $items_response = $(response).find('div.video-item').css({
                            opacity: 0
                        });

                        element.find('.video-list .videos').append($items_response);
                        $items_response.imagesLoaded(function() {
                            $items_response.animate({
                                opacity: 1
                            });

                            element.find('.video-list .videos').isotope('appended', $items_response);
                            setTimeout(function() {
                                element.find('.video-list .videos').isotope('layout');
                            }, 400);

                            HaruFormota.video.shortcodeVideoModal();
                            HaruFormota.video.thumbnailHover();
                        });

                        element_paging.html(paging_button);
  
                        HaruFormota.video.shortcodeVideoAjaxLoadMore( element );
                        /* Save cache - Later */
                    }
                });
            });
        },
        shortcodeVideoAjaxGrid: function(element) {
            if ( element.find('.video-list .video-item').length > 0 ) {
                setTimeout(function(){
                    element.find('.video-list .videos').isotope({
                        itemSelector : '.video-item',
                        layoutMode: 'fitRows'
                    });
                    imagesLoaded(element, function() {
                        element.find('.video-list .videos').isotope('layout');
                    });
                }, 100);
            }
        },
        shortcodeVideoModal: function() {
            $('.view-video-button').off().on('click', function(e) {
                e.preventDefault();
                var video_id = $(this).data('id');
                var player_js = $(this).attr('data-player');
                var server = $(this).attr('data-server');

                $.ajax({
                    url: haru_framework_ajax_url,
                    type: "POST",
                    data: {
                        action: 'haru_video_modal',
                        video_id: video_id
                    },
                    dataType: "html",
                    beforeSend: function() {
                        HaruFormota.base.beforeAjax()
                    }
                }).success(function(result) {
                    HaruFormota.base.afterAjax();

                    $.magnificPopup.open({
                        type: "inline",
                        mainClass: 'mfp-zoom-in mfp-video-popup',
                        zoom: {
                            enabled: true, // By default it's false, so don't forget to enable it
                            duration: 300, // duration of the effect, in milliseconds
                            easing: 'ease-in-out', // CSS transition easing function
                            // The "opener" function should return the element from which popup will be zoomed in
                            // and to which popup will be scaled down
                            // By defailt it looks for an image tag:
                            opener: function(openerElement) {
                                // openerElement is the element on which popup was initialized, in this case its <a> tag
                                // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                                // return openerElement.is('img') ? openerElement : openerElement.find('img');
                                return openerElement.is('video') ? openerElement : openerElement.find('video');
                            }
                        },
                        items: {
                            src: result
                        },
                        callbacks: {
                            open: function() {
                                HaruFormota.video.displayVideoPlayer(video_id, player_js, server);
                            }
                        }
                    });
                });
            });
        },
        isMobileOS: function() {
            var check = false;

            (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);

            return check;
        },
        displayVideoPlayer: function(video_id, player_js, server) {
            // Process for unmute video button
            if ( HaruFormota.video.isMobileOS() ) {
                $('body').addClass('haru-mobile');
            }

            // Do not use Player JS
            if( player_js == 'none' ) {
                setTimeout(function() {
                    // Youtube
                    if ( server == 'youtube' ) {
                        setTimeout(function() {
                            // Do something like autoplay
                        }, 300);
                    }
                    // Vimeo
                    if ( server == 'vimeo' ) {
                        setTimeout(function() {
                            // Do something like autoplay
                        }, 300);
                    }
                    // Local
                    if ( server == 'url' ) {
                        var player;

                        if (!player) {
                            player = $('#video-player').mediaelementplayer({
                                stretching: 'responsive',
                                features: ['playpause', 'progress', 'current', 'duration', 'volume', 'fullscreen'],
                                // pluginPath: "/path/to/shims/",
                                // When using jQuery's `mediaelementplayer`, an `instance` argument
                                // is available in the `success` callback
                                success: function(mediaElement, originalNode, instance) {
                                    // Hidden play button
                                    // $self.css('display', 'none');
                                    // Do something
                                    mediaElement.load();
                                    setTimeout(function() {
                                        mediaElement.play();
                                    }, 300);

                                    mediaElement.addEventListener('playing', function(){
                                        // Do something
                                        $('.video-mediaelement-unmute').on('click', function() {
                                            mediaElement.setMuted(false);
                                            mediaElement.setVolume(0.5);

                                            $(this).hide(300);
                                        });
                                    });
                                }
                            });
                        }
                    }
                }, 300);
            }
            // 
        },
        displayVideoPlayerDirect: function() {
            // Process for unmute video button
            if ( HaruFormota.video.isMobileOS() ) {
                $('body').addClass('haru-mobile');
            }

            $('.video-player-direct').off().on('click', function(e) {
                e.preventDefault();
                var $self = $(this);
                var player_js = $(this).attr('data-player');
                var server = $(this).attr('data-server');

                // Do not use Player JS
                if( player_js == 'none' ) {
                    // Youtube
                    if ( server == 'youtube' ) {
                        $self.parent().parent().addClass('played');
                    }
                    // Vimeo
                    if ( server == 'vimeo' ) {
                        $self.parent().parent().addClass('played');
                    }
                    // Dailymotion
                    if ( server == 'dailymotion' ) {
                        // Do something like autoplay
                        $self.parent().parent().addClass('played');
                    }
                    // Twitch
                    if ( server == 'twitch' ) {
                        // Do something like autoplay
                        $self.parent().parent().addClass('played');
                    }
                    // Dailymotion
                    if ( server == 'facebook' ) {
                        // Do something like autoplay
                        $self.parent().parent().addClass('played');
                    }
                    // Local
                    if ( server == 'url' ) {
                        setTimeout(function() {
                            var player;

                            if (!player) {
                                player = $('#video-player').mediaelementplayer({
                                    stretching: 'responsive',
                                    features: ['playpause', 'progress', 'current', 'duration', 'volume', 'fullscreen'],
                                    // pluginPath: "/path/to/shims/",
                                    // When using jQuery's `mediaelementplayer`, an `instance` argument
                                    // is available in the `success` callback
                                    success: function(mediaElement, originalNode, instance) {
                                        // Hidden play button
                                        $self.css('display', 'none');
                                        // Do something
                                        mediaElement.load();
                                        setTimeout(function() {
                                            mediaElement.play();
                                        }, 300);

                                        mediaElement.addEventListener('playing', function(){
                                            // Do something
                                            $('.video-mediaelement-unmute').on('click', function() {
                                                mediaElement.setMuted(false);
                                                mediaElement.setVolume(0.5);

                                                $(this).hide(300);
                                            });
                                        });
                                    }
                                });
                            }
                        }, 300);
                        $self.parent().parent().addClass('played');
                    }
                }
            });
        },
        videoLoadMore: function() {
            $('.video-shortcode-paging-wrapper .video-load-more').off().on('click', function(event) {
                event.preventDefault();

                var $this = $(this).button('loading');
                var link = $(this).attr('data-href');
                var shortcode_wrapper = '.video-shortcode-wrapper';
                var contentWrapper = '.video-shortcode-wrapper .video-list'; // parent element of .item
                var element = '.video-item'; // .item

                $.get(link, function(data) {
                    var next_href = $('.video-load-more', data).attr('data-href');
                    var $newElems = $(element, data).css({
                        opacity: 0
                    });

                    $(contentWrapper).append($newElems);
                    $newElems.imagesLoaded(function() {
                        $newElems.animate({
                            opacity: 1
                        });

                        $(contentWrapper).isotope('appended', $newElems);
                        setTimeout(function() {
                            $(contentWrapper).isotope('layout');
                        }, 400);

                        HaruFormota.video.shortcodeVideoModal();
                        HaruFormota.video.thumbnailHover();
                    });


                    if (typeof(next_href) == 'undefined') {
                        $this.parent().remove();
                    } else {
                        $this.button('reset');
                        $this.attr('data-href', next_href);
                    }

                });
            });
        },
        videoInfiniteScroll: function() {
            var shortcode_wrapper = '.video-shortcode-wrapper';
            var contentWrapper = '.video-shortcode-wrapper .video-list'; // parent element of .item
            $('.video-list', shortcode_wrapper).infinitescroll({
                navSelector: "#infinite_scroll_button",
                nextSelector: "#infinite_scroll_button a",
                itemSelector: ".video-item", // .item
                loading: {
                    'selector': '#infinite_scroll_loading',
                    'img': haru_framework_theme_url + '/assets/images/ajax-loader.gif',
                    'msgText': 'Loading...',
                    'finishedMsg': ''
                }
            }, function(newElements, data, url) {
                var $newElems = $(newElements).css({
                    opacity: 0
                });
                $newElems.imagesLoaded(function() {
                    $newElems.animate({
                        opacity: 1
                    });

                    $(contentWrapper).isotope('appended', $newElems);
                    setTimeout(function() {
                        $(contentWrapper).isotope('layout');
                    }, 400);

                    HaruFormota.video.shortcodeVideoModal();
                    HaruFormota.video.thumbnailHover();
                });

            });
        },
        singleVideoSlideshow: function() {
            $('.single-video-gallery .video-images').each(function() {
                var $this = $(this);

                // Slick
                $this.slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    infinite: true,
                    centerMode: true,
                    centerPadding: '20%',
                    variableWidth: true,
                    responsive: [
                        {
                            breakpoint: 991,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerPadding: '10%',
                            }
                        },
                        {
                            breakpoint: 767,
                            settings: {
                                variableWidth: false,
                                centerPadding: '10%',
                            }
                        }
                    ]
                });
            });
        },
        singleVideoGallery: function() {
            $('.haru-single-video .video-gallery').each(function(index, value) {
                var self = $(this);
                var $container = $(this).find('.video-images:not(.list)'); // parent element of .item
                var masonry_options = {
                    'gutter': 0
                };

                // Add to process products layout style
                var layoutMode = 'masonry';

                $container.isotope({
                    itemSelector: '.image-item', // .item
                    transitionDuration: '0.4s',
                    masonry: masonry_options,
                    layoutMode: layoutMode
                });

                imagesLoaded(self, function() {
                    $container.isotope('layout');
                });

                $(window).resize(function() {
                    $container.isotope('layout');
                });
            });
        },
        singleVideoGalleryPopup: function() {
            $('.video-images').magnificPopup({ // video-images, .actor-images, .director-images
                delegate: 'a',
                gallery: {
                    enabled: true
                },
                type: 'image'
                // other options
            });
        },
    };

    HaruFormota.actor = {
        init: function() {            
            HaruFormota.actor.singleActorGallery();
            HaruFormota.actor.singleActorGalleryPopup();
            HaruFormota.actor.shortcodeActor(); // Actor Grid
            HaruFormota.actor.actorLoadMore();
            HaruFormota.actor.actorInfiniteScroll();
        },
        singleActorGallery: function() {
            $('.haru-single-actor .actor-gallery').each(function(index, value) {
                var self = $(this);
                var $container = $(this).find('.actor-images:not(.list)'); // parent element of .item
                var masonry_options = {
                    'gutter': 0
                };

                // Add to process products layout style
                var layoutMode = 'masonry';

                $container.isotope({
                    itemSelector: '.image-item', // .item
                    transitionDuration: '0.4s',
                    masonry: masonry_options,
                    layoutMode: layoutMode
                });

                imagesLoaded(self, function() {
                    $container.isotope('layout');
                });

                $(window).resize(function() {
                    $container.isotope('layout');
                });
            });
        },
        singleActorGalleryPopup: function() {
            $('.actor-images').magnificPopup({ // video-images, .actor-images, .director-images
                delegate: 'a',
                gallery: {
                    enabled: true
                },
                type: 'image'
                // other options
            });
        },
        shortcodeActor: function() {
            var default_filter = [];
            var array_filter = []; // Push filter to an array to process when don't have filter

            $('.actor-shortcode-wrapper').each(function(index, value) {
                // Process filter each shortcode
                $(this).find('.actor-filter li').first().find('a').addClass('selected');
                default_filter[index] = $(this).find('.actor-filter li').first().find('a').attr('data-option-value');

                var self = $(this);
                var $container = $(this).find('.actor-list'); // parent element of .item
                var $filter = $(this).find('.actor-filter a');
                var masonry_options = {
                    'gutter': 0
                };

                array_filter[index] = $filter;

                // Add to process products layout style
                var layoutMode = 'fitRows';
                if (($(this).hasClass('masonry'))) {
                    var layoutMode = 'masonry';
                }

                for (var i = 0; i < array_filter.length; i++) {
                    if (array_filter[i].length == 0) {
                        default_filter = '';
                    }
                    $container.isotope({
                        itemSelector: '.actor-item', // .item
                        transitionDuration: '0.4s',
                        masonry: masonry_options,
                        layoutMode: layoutMode,
                        filter: default_filter[i]
                    });
                }

                imagesLoaded(self, function() {
                    $container.isotope('layout');
                });

                $(window).resize(function() {
                    $container.isotope('layout');
                });

                $filter.on('click touchstart', function(e) {
                    e.stopPropagation();
                    e.preventDefault();

                    var $this = $(this);
                    // Don't proceed if already selected
                    if ($this.hasClass('selected')) {
                        return false;
                    }
                    var filters = $this.closest('ul');
                    filters.find('.selected').removeClass('selected');
                    $this.addClass('selected');

                    var options = {
                            layoutMode: layoutMode,
                            transitionDuration: '0.4s',
                            packery: {
                                horizontal: true
                            },
                            masonry: masonry_options
                        },
                        key = filters.attr('data-option-key'),
                        value = $this.attr('data-option-value');
                    value = value === 'false' ? false : value;
                    options[key] = value;

                    $container.isotope(options);
                });
            });
        },
        actorLoadMore: function() {
            $('.actor-shortcode-paging-wrapper .actor-load-more').off().on('click', function(event) {
                event.preventDefault();

                var $this = $(this).button('loading');
                var link = $(this).attr('data-href');
                var shortcode_wrapper = '.actor-shortcode-wrapper';
                var contentWrapper = '.actor-shortcode-wrapper .actor-list'; // parent element of .item
                var element = '.actor-item'; // .item

                $.get(link, function(data) {
                    var next_href = $('.actor-load-more', data).attr('data-href');
                    var $newElems = $(element, data).css({
                        opacity: 0
                    });

                    $(contentWrapper).append($newElems);
                    $newElems.imagesLoaded(function() {
                        $newElems.animate({
                            opacity: 1
                        });

                        $(contentWrapper).isotope('appended', $newElems);
                        setTimeout(function() {
                            $(contentWrapper).isotope('layout');
                        }, 400);

                        HaruFormota.actor.init();
                    });


                    if (typeof(next_href) == 'undefined') {
                        $this.parent().remove();
                    } else {
                        $this.button('reset');
                        $this.attr('data-href', next_href);
                    }

                });
            });
        },
        actorInfiniteScroll: function() {
            var shortcode_wrapper = '.actor-shortcode-wrapper';
            var contentWrapper = '.actor-shortcode-wrapper .actor-list'; // parent element of .item
            $('.actor-list', shortcode_wrapper).infinitescroll({
                navSelector: "#infinite_scroll_button",
                nextSelector: "#infinite_scroll_button a",
                itemSelector: ".actor-item", // .item
                loading: {
                    'selector': '#infinite_scroll_loading',
                    'img': haru_framework_theme_url + '/assets/images/ajax-loader.gif',
                    'msgText': 'Loading...',
                    'finishedMsg': ''
                }
            }, function(newElements, data, url) {
                var $newElems = $(newElements).css({
                    opacity: 0
                });
                $newElems.imagesLoaded(function() {
                    $newElems.animate({
                        opacity: 1
                    });

                    $(contentWrapper).isotope('appended', $newElems);
                    setTimeout(function() {
                        $(contentWrapper).isotope('layout');
                    }, 400);

                    HaruFormota.actor.init();
                });

            });
        }
    };

    HaruFormota.director = {
        init: function() {
            HaruFormota.director.singleDirectorGallery();            
            HaruFormota.director.singleDirectorGalleryPopup();
            HaruFormota.director.shortcodeDirector(); // Director Grid
            HaruFormota.director.directorLoadMore();
            HaruFormota.director.directorInfiniteScroll();
        },
        singleDirectorGallery: function() {
            $('.haru-single-director .director-gallery').each(function(index, value) {
                var self = $(this);
                var $container = $(this).find('.director-images:not(.list)'); // parent element of .item
                var masonry_options = {
                    'gutter': 0
                };

                // Add to process products layout style
                var layoutMode = 'masonry';

                $container.isotope({
                    itemSelector: '.image-item', // .item
                    transitionDuration: '0.4s',
                    masonry: masonry_options,
                    layoutMode: layoutMode
                });

                imagesLoaded(self, function() {
                    $container.isotope('layout');
                });

                $(window).resize(function() {
                    $container.isotope('layout');
                });
            });
        },
        singleDirectorGalleryPopup: function() {
            $('.director-images').magnificPopup({ // video-images, .actor-images, .director-images
                delegate: 'a',
                gallery: {
                    enabled: true
                },
                type: 'image'
                // other options
            });
        },
        shortcodeDirector: function() {
            var default_filter = [];
            var array_filter = []; // Push filter to an array to process when don't have filter

            $('.director-shortcode-wrapper').each(function(index, value) {
                // Process filter each shortcode
                $(this).find('.director-filter li').first().find('a').addClass('selected');
                default_filter[index] = $(this).find('.director-filter li').first().find('a').attr('data-option-value');

                var self = $(this);
                var $container = $(this).find('.director-list'); // parent element of .item
                var $filter = $(this).find('.director-filter a');
                var masonry_options = {
                    'gutter': 0
                };

                array_filter[index] = $filter;

                // Add to process products layout style
                var layoutMode = 'fitRows';
                if (($(this).hasClass('masonry'))) {
                    var layoutMode = 'masonry';
                }

                for (var i = 0; i < array_filter.length; i++) {
                    if (array_filter[i].length == 0) {
                        default_filter = '';
                    }
                    $container.isotope({
                        itemSelector: '.director-item', // .item
                        transitionDuration: '0.4s',
                        masonry: masonry_options,
                        layoutMode: layoutMode,
                        filter: default_filter[i]
                    });
                }

                imagesLoaded(self, function() {
                    $container.isotope('layout');
                });

                $(window).resize(function() {
                    $container.isotope('layout');
                });

                $filter.on('click touchstart', function(e) {
                    e.stopPropagation();
                    e.preventDefault();

                    var $this = $(this);
                    // Don't proceed if already selected
                    if ($this.hasClass('selected')) {
                        return false;
                    }
                    var filters = $this.closest('ul');
                    filters.find('.selected').removeClass('selected');
                    $this.addClass('selected');

                    var options = {
                            layoutMode: layoutMode,
                            transitionDuration: '0.4s',
                            packery: {
                                horizontal: true
                            },
                            masonry: masonry_options
                        },
                        key = filters.attr('data-option-key'),
                        value = $this.attr('data-option-value');
                    value = value === 'false' ? false : value;
                    options[key] = value;

                    $container.isotope(options);
                });
            });
        },
        directorLoadMore: function() {
            $('.director-shortcode-paging-wrapper .director-load-more').off().on('click', function(event) {
                event.preventDefault();

                var $this = $(this).button('loading');
                var link = $(this).attr('data-href');
                var shortcode_wrapper = '.director-shortcode-wrapper';
                var contentWrapper = '.director-shortcode-wrapper .director-list'; // parent element of .item
                var element = '.director-item'; // .item

                $.get(link, function(data) {
                    var next_href = $('.director-load-more', data).attr('data-href');
                    var $newElems = $(element, data).css({
                        opacity: 0
                    });

                    $(contentWrapper).append($newElems);
                    $newElems.imagesLoaded(function() {
                        $newElems.animate({
                            opacity: 1
                        });

                        $(contentWrapper).isotope('appended', $newElems);
                        setTimeout(function() {
                            $(contentWrapper).isotope('layout');
                        }, 400);

                        HaruCircle.director.init();
                    });


                    if (typeof(next_href) == 'undefined') {
                        $this.parent().remove();
                    } else {
                        $this.button('reset');
                        $this.attr('data-href', next_href);
                    }

                });
            });
        },
        directorInfiniteScroll: function() {
            var shortcode_wrapper = '.director-shortcode-wrapper';
            var contentWrapper = '.director-shortcode-wrapper .director-list'; // parent element of .item
            $('.director-list', shortcode_wrapper).infinitescroll({
                navSelector: "#infinite_scroll_button",
                nextSelector: "#infinite_scroll_button a",
                itemSelector: ".director-item", // .item
                loading: {
                    'selector': '#infinite_scroll_loading',
                    'img': haru_framework_theme_url + '/assets/images/ajax-loader.gif',
                    'msgText': 'Loading...',
                    'finishedMsg': ''
                }
            }, function(newElements, data, url) {
                var $newElems = $(newElements).css({
                    opacity: 0
                });
                $newElems.imagesLoaded(function() {
                    $newElems.animate({
                        opacity: 1
                    });

                    $(contentWrapper).isotope('appended', $newElems);
                    setTimeout(function() {
                        $(contentWrapper).isotope('layout');
                    }, 400);

                    HaruCircle.director.init();
                });

            });
        }
    };

    HaruFormota.teammember = {
        init: function() {
            HaruFormota.teammember.shortcodeTeammember();
            HaruFormota.teammember.teammemberLoadMore();
            HaruFormota.teammember.teammemberInfiniteScroll();
        },
        shortcodeTeammember: function() {
            var default_filter = [];
            var array_filter = []; // Push filter to an array to process when don't have filter

            $('.teammember-shortcode-wrap.grid').each(function(index, value) {
                // Process filter each shortcode
                $(this).find('.teammember-filter li').first().find('a').addClass('selected');
                default_filter[index] = $(this).find('.teammember-filter li').first().find('a').attr('data-option-value');

                var self = $(this);
                var $container = $(this).find('.teammember-list'); // parent element of .item
                var $filter = $(this).find('.teammember-filter a');
                var masonry_options = {
                    'gutter': 0
                };

                array_filter[index] = $filter;

                // Add to process members layout style
                var layoutMode = 'fitRows';
                if (($(this).hasClass('masonry'))) {
                    var layoutMode = 'masonry';
                }

                for (var i = 0; i < array_filter.length; i++) {
                    if (array_filter[i].length == 0) {
                        default_filter = '';
                    }
                    $container.isotope({
                        itemSelector: '.team-item', // .item
                        transitionDuration: '0.4s',
                        masonry: masonry_options,
                        layoutMode: layoutMode,
                        filter: default_filter[i]
                    });
                }

                imagesLoaded(self, function() {
                    $container.isotope('layout');
                });

                $(window).resize(function() {
                    $container.isotope('layout');
                });

                $filter.on('click', function(e) {
                    e.stopPropagation();
                    e.preventDefault();

                    var $this = $(this);
                    // Don't proceed if already selected
                    if ($this.hasClass('selected')) {
                        return false;
                    }
                    var filters = $this.closest('ul');
                    filters.find('.selected').removeClass('selected');
                    $this.addClass('selected');

                    var options = {
                            layoutMode: layoutMode,
                            transitionDuration: '0.4s',
                            packery: {
                                horizontal: true
                            },
                            masonry: masonry_options
                        },
                        key = filters.attr('data-option-key'),
                        value = $this.attr('data-option-value');
                    value = value === 'false' ? false : value;
                    options[key] = value;

                    $container.isotope(options);
                });
            });
        },
        teammemberLoadMore: function() {
            $('.teammember-shortcode-paging-wrapper .teammember-load-more').off().on('click', function(event) {
                event.preventDefault();

                var $this = $(this).button('loading');
                var link = $(this).attr('data-href');
                var shortcode_wrapper = '.teammember-shortcode-wrap';
                var contentWrapper = '.teammember-shortcode-wrap .teammember-list'; // parent element of .item
                var element = '.team-item'; // .item

                $.get(link, function(data) {
                    var next_href = $('.teammember-load-more', data).attr('data-href');
                    var $newElems = $(element, data).css({
                        opacity: 0
                    });

                    $(contentWrapper).append($newElems);
                    $newElems.imagesLoaded(function() {
                        $newElems.animate({
                            opacity: 1
                        });

                        $(contentWrapper).isotope('appended', $newElems);
                        setTimeout(function() {
                            $(contentWrapper).isotope('layout');
                        }, 400);

                        HaruFormota.teammember.init();
                    });


                    if (typeof(next_href) == 'undefined') {
                        $this.parent().remove();
                    } else {
                        $this.button('reset');
                        $this.attr('data-href', next_href);
                    }

                });
            });
        },
        teammemberInfiniteScroll: function() {
            var shortcode_wrapper = '.teammember-shortcode-wrap.grid';
            var contentWrapper = '.teammember-shortcode-wrap.grid .teammember-list'; // parent element of .item
            $('.teammember-list', shortcode_wrapper).infinitescroll({
                navSelector: "#infinite_scroll_button",
                nextSelector: "#infinite_scroll_button a",
                itemSelector: ".team-item", // .item
                loading: {
                    'selector': '#infinite_scroll_loading',
                    'img': haru_framework_theme_url + '/assets/images/ajax-loader.gif',
                    'msgText': 'Loading...',
                    'finishedMsg': ''
                }
            }, function(newElements, data, url) {
                var $newElems = $(newElements).css({
                    opacity: 0
                });
                $newElems.imagesLoaded(function() {
                    $newElems.animate({
                        opacity: 1
                    });

                    $(contentWrapper).isotope('appended', $newElems);
                    setTimeout(function() {
                        $(contentWrapper).isotope('layout');
                    }, 400);

                    HaruFormota.teammember.init();
                });

            });
        }
    };

    // Blog
    HaruFormota.blog = {
        init: function() {
            HaruFormota.blog.shortcodeBlog(); // Blog Grid
            HaruFormota.blog.blogLoadMore();
            HaruFormota.blog.blogInfiniteScroll();
        },
        shortcodeBlog: function() {
            $('.blog-shortcode-wrapper').each(function(index, value) {
                var self = $(this);
                var $container = $(this).find('.blog-list'); // parent element of .item
                var masonry_options = {
                    'gutter': 0
                };

                // Add to process products layout style
                var layoutMode = 'packery';

                $container.isotope({
                    itemSelector: '.blog-item', // .item
                    transitionDuration: '0.4s',
                    masonry: masonry_options,
                    layoutMode: layoutMode
                });

                imagesLoaded(self, function() {
                    $container.isotope('layout');
                });

                $(window).resize(function() {
                    $container.isotope('layout');
                });
            });
        },
        blogLoadMore: function() {
            $('.blog-shortcode-paging .blog-load-more').off().on('click', function(event) {
                event.preventDefault();

                var $this = $(this).button('loading');
                var link = $(this).attr('data-href');
                var shortcode_wrapper = '.blog-shortcode-wrapper';
                var contentWrapper = '.blog-shortcode-wrapper .blog-list'; // parent element of .item
                var element = '.blog-item:not(.featured-post)'; // .item

                $.get(link, function(data) {
                    var next_href = $('.blog-load-more', data).attr('data-href');
                    var $newElems = $(element, data).css({
                        opacity: 0
                    });

                    $(contentWrapper).append($newElems);
                    $newElems.imagesLoaded(function() {
                        $newElems.animate({
                            opacity: 1
                        });

                        $(contentWrapper).isotope('appended', $newElems);
                    });


                    if (typeof(next_href) == 'undefined') {
                        $this.parent().remove();
                    } else {
                        $this.button('reset');
                        $this.attr('data-href', next_href);
                    }

                });
            });
        },
        blogInfiniteScroll: function() {
            var shortcode_wrapper = '.blog-shortcode-wrapper';
            var contentWrapper = '.blog-shortcode-wrapper .blog-list'; // parent element of .item
            $('.blog-list', shortcode_wrapper).infinitescroll({
                navSelector: "#infinite_scroll_button",
                nextSelector: "#infinite_scroll_button a",
                itemSelector: ".blog-item:not(.featured-post)", // .item
                loading: {
                    'selector': '#infinite_scroll_loading',
                    'img': haru_framework_theme_url + '/assets/images/ajax-loader.gif',
                    'msgText': 'Loading...',
                    'finishedMsg': ''
                }
            }, function(newElements, data, url) {
                var $newElems = $(newElements).css({
                    opacity: 0
                });
                $newElems.imagesLoaded(function() {
                    $newElems.animate({
                        opacity: 1
                    });

                    $(contentWrapper).isotope('appended', $newElems);
                });

            });
        }
    };


    $(document).ready(function() {
        HaruFormota.init();
    });
})(jQuery);