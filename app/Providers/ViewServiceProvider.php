<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\SnippetCode;
use App\Models\MetaTags;
use App\Models\Categories;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Using Closure based composers...
        View::composer('*', function ($view) {

            $actual_link = '';
            if(isset($_SERVER['HTTP_HOST']) && !empty($_SERVER['HTTP_HOST'])){
                $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            }
            $data['actual_link'] = $actual_link;
            //dd($data);
            $al = explode('?', $actual_link);
            $data['actual_link'] = $al[0];
            $data['metaTags'] = MetaTags::where('url', $data['actual_link'])->first();

            $data['headSnippet'] = SnippetCode::where('position', 'Head')
                                                ->when(1>0, function($q) use ($data){
                                                    return $q->where('page_url', '')
                                                                ->orwhere('page_url', $data['actual_link']);
                                                })->get();
            $data['bodySnippet'] = SnippetCode::where('position', 'Body')
                                                ->when(1>0, function($q) use ($data){
                                                    return $q->where('page_url', '')
                                                                ->orwhere('page_url', $data['actual_link']);
                                                })->get();

            $data['blog_categories'] = Categories::has('blogs', '>', 0)->with('blogs')->orderBy('name')->get();
            
            $view->with($data);
        });
    }
}
