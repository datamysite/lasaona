<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\Categories;

class BlogController extends Controller
{
    public function index(){
        $data['nav'] = 'blogs';
        if(!empty($_GET['page'])){
            $data['nofollow'] = '1';
        }
        $data['blogCount'] = Blogs::where('status', '1')->count();
        $data['data'] = Blogs::where('status', '1')->orderBy('id', 'desc')->paginate(9);
        $data['categories'] = Categories::all();
        //dd($data);
        return view('web.blogs.index')->with($data);
    }

    public function details($blog_slug){
        $data['nav'] = 'blogs';
        
        $data['data'] = Blogs::where('slug', $blog_slug)->where('status', '1')->first();

        $data['recent'] = Blogs::where('status', '1')->orderBy('id', 'desc')->skip(3)->take(14)->get();

        $data['related'] = Blogs::where('slug', '!=', $blog_slug)->orderBy('id', 'desc')->limit(3)->get();
        if(empty($data['data']->id)){
            return redirect(route('blogs'));
        }
        return view('web.blogs.details')->with($data);
    }

    public function category($slug){
        $data['nav'] = 'blogs';
        if(!empty($_GET['page'])){
            $data['nofollow'] = '1';
        }
        $data['cat'] = Categories::where('slug', $slug)->first();
        if(!empty($data['cat']->id)){
            $data['blogCount'] = Blogs::where('status', '1')->count();
            $data['data'] = Blogs::where('status', '1')->where('category_id', $data['cat']->id)->orderBy('id', 'desc')->paginate(9);
        $data['categories'] = Categories::all();
            //dd($data);
            return view('web.blogs.index')->with($data);
        }else{
            return redirect(route('blogs'));
        }
    }
}
