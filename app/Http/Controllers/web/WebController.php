<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\LatestUpdates;
use App\Models\Videos;

class WebController extends Controller
{
    public function index(){
        $data['nav'] = 'home';
        $data['blogs'] = Blogs::orderBy('created_at', 'desc')->limit(3)->get();
        $data['updates'] = LatestUpdates::orderBy('created_at', 'desc')->limit(3)->get();

        $data['videos'] = Videos::where('playlist_id', '2')->orderBy('id', 'desc')->limit(9)->get();
        return view('web.index')->with($data);
    }

    public function about(){
        $data['nav'] = 'about';
        $data['blogs'] = Blogs::orderBy('created_at', 'desc')->limit(3)->get();
        $data['updates'] = LatestUpdates::orderBy('created_at', 'desc')->limit(3)->get();

        $data['videos'] = Videos::where('playlist_id', '2')->orderBy('id', 'desc')->limit(9)->get();
        return view('web.about')->with($data);
    }

    public function contact(){
        $data['nav'] = 'contact';
        $data['blogs'] = Blogs::orderBy('created_at', 'desc')->limit(3)->get();
        $data['updates'] = LatestUpdates::orderBy('created_at', 'desc')->limit(3)->get();

        $data['videos'] = Videos::where('playlist_id', '2')->orderBy('id', 'desc')->limit(9)->get();
        return view('web.contact')->with($data);
    }

    public function music(){
        $data['nav'] = 'contact';

        $data['blogs'] = Blogs::orderBy('created_at', 'desc')->limit(3)->get();
        $data['updates'] = LatestUpdates::orderBy('created_at', 'desc')->limit(3)->get();

        $data['videos'] = Videos::where('playlist_id', '2')->orderBy('id', 'desc')->limit(9)->get();

        return view('web.music')->with($data);
    }

    //Real - Estate

        public function realEstate(){
            $data['nav'] = 'real-estate';
            $data['blogs'] = Blogs::orderBy('created_at', 'desc')->limit(3)->get();
            $data['updates'] = LatestUpdates::orderBy('created_at', 'desc')->limit(3)->get();

            $data['videos'] = Videos::where('playlist_id', '2')->orderBy('id', 'desc')->limit(9)->get();
            return view('web.real-estate.index')->with($data);
        }
        public function realEstateDetail(){
            $data['nav'] = 'real-estate';
            $data['blogs'] = Blogs::orderBy('created_at', 'desc')->limit(3)->get();
            $data['updates'] = LatestUpdates::orderBy('created_at', 'desc')->limit(3)->get();

            $data['videos'] = Videos::where('playlist_id', '2')->orderBy('id', 'desc')->limit(9)->get();
            return view('web.real-estate.detail')->with($data);
        }
}
