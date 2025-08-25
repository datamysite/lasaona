<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\adminAuth;

//sitemap
Route::get('/update-sitemap', function () {
    Artisan::call('app:generate-sitemap');
    $response['success'] = 'success';
    $response['message'] = 'Success! Sitemap Successfully Updated.';
    
    return response()->json($response, 200);
});

Route::get('/clear-cache', function () {
    Artisan::call('key:generate');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    $response['success'] = 'success';
    $response['message'] = 'Success! cache Successfully Updated.';
    
    return response()->json($response, 200);
});

//Web

Route::namespace('App\Http\Controllers\web')->group(function(){
    Route::get('/', 'WebController@index')->name('home');
    Route::get('/about-me', 'WebController@about')->name('about');
    Route::get('/contact-me', 'WebController@contact')->name('contact');
    Route::get('/music', 'WebController@music')->name('music');
    Route::get('/privacy-policy', 'WebController@privacy')->name('privacy');
    Route::get('/terms-and-conditions', 'WebController@terms')->name('terms');

    //Real-Estate
    Route::get('/real-estate', 'WebController@realEstate')->name('real-estate');
    Route::get('/real-estate/{slug}', 'WebController@realEstateDetail')->name('real-estate.detail');


    //Blogs
    Route::get('/blogs', 'BlogController@index')->name('blogs');
    Route::get('/blogs/categories/{slug}', 'BlogController@category')->name('blog.category');
    Route::get('/blog/{slug}', 'BlogController@details')->name('blogs.detail');

    //Enquiry
    Route::post('/enquiry', 'EnquiryController@index')->name('enquiry.submit');
});


//Administration

Route::prefix('admin/panel')->namespace('App\Http\Controllers\admin')->group(function () {

    //Authentication
    Route::get('/login', 'LoginController@index')->name('admin.login');
    Route::post('/login', 'LoginController@authenticate');
    Route::get('/logout', 'LoginController@logout')->name('admin.logout');


    //Authenticated
    Route::middleware([adminAuth::class])->group(function () {
        Route::get('/', 'MainController@index')->name('admin.dashboard');


        
        //Blogs
        Route::prefix('blogs')->group(function () {

            Route::get('/', 'BlogController@index')->name('admin.blog');
            Route::get('/load', 'BlogController@load')->name('admin.blog.load');
            Route::get('/search/{val}', 'BlogController@search');
            Route::post('/create', 'BlogController@create')->name('admin.blog.create');
            Route::get('/delete/{id}', 'BlogController@delete');
            Route::get('/edit/{id}', 'BlogController@edit');
            Route::post('/update', 'BlogController@update_blog')->name('admin.blog.update');

        });


        Route::prefix('author')->group(function () {

            Route::get('/', 'AuthorController@index')->name('admin.author');
            Route::post('/create', 'AuthorController@create')->name('admin.author.create');
            Route::get('/load', 'AuthorController@load')->name('admin.author.load');
            Route::get('/edit/{id}', 'AuthorController@edit');
            Route::get('/delete/{id}', 'AuthorController@delete');
        });


        //SEO Tools
        Route::prefix('seo')->group(function () {
            Route::prefix('meta')->group(function () {
                Route::get('/', 'SeoController@meta')->name('admin.seo.meta');
                Route::post('/check', 'SeoController@meta_check')->name('admin.seo.meta.check');
                Route::post('/update', 'SeoController@meta_update')->name('admin.seo.meta.update');
            });
            Route::prefix('snippet')->group(function () {
                Route::get('/', 'SeoController@snippet')->name('admin.seo.snippet');
                Route::get('/load', 'SeoController@snippet_load')->name('admin.seo.snippet.load');
                Route::post('/create', 'SeoController@snippet_create')->name('admin.seo.snippet.create');
                Route::get('/delete/{id}', 'SeoController@snippet_delete');
                Route::get('/edit/{id}', 'SeoController@snippet_edit');
                Route::post('/update', 'SeoController@snippet_update')->name('admin.seo.snippet.update');
            });
        });

        //Property
        Route::prefix('property')->group(function () {

            Route::get('/', 'PropertyController@index')->name('admin.property');
            Route::get('/load', 'PropertyController@load')->name('admin.property.load');
            Route::get('/search/{val}', 'PropertyController@search');
            Route::post('/create', 'PropertyController@create')->name('admin.property.create');
            Route::get('/delete/{id}', 'PropertyController@delete');
            Route::get('/edit/{id}', 'PropertyController@edit');
            Route::post('/update', 'PropertyController@update_blog')->name('admin.property.update');

        });

        
        //Episodes
        Route::prefix('videos')->group(function () {

            Route::get('/', 'VideoController@index')->name('admin.videos');
            Route::get('/load', 'VideoController@load')->name('admin.videos.load');
            Route::get('/search/{val}', 'VideoController@search');
            Route::post('/create', 'VideoController@create')->name('admin.videos.create');
            Route::get('/delete/{id}', 'VideoController@delete');
            Route::get('/edit/{id}', 'VideoController@edit');
            Route::post('/update', 'VideoController@update_blog')->name('admin.videos.update');

        });


        //Newsletter
        Route::prefix('newsletter')->group(function () {
            Route::get('/', 'NewsletterController@index')->name('admin.newsletter');
            Route::get('/load', 'NewsletterController@load')->name('admin.newsletter.load');
            Route::post('/filter', 'NewsletterController@user_filter')->name('admin.newsletter.filter');
            Route::post('/export', 'NewsletterController@user_export')->name('admin.newsletter.export');
        });
    });
});
