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

    public function kasturijha(){
        $data['nav'] = 'home';
        $data['mm'] = 'kj';
        $data['blogs'] = Blogs::orderBy('created_at', 'desc')->limit(3)->get();
        $data['updates'] = LatestUpdates::orderBy('created_at', 'desc')->limit(3)->get();

        $data['videos_lol'] = Videos::where('playlist_id', '1')->orderBy('id', 'desc')->limit(9)->get();
        $data['videos_lolj'] = Videos::where('playlist_id', '2')->orderBy('id', 'desc')->limit(9)->get();

        return view('web.kasturijha')->with($data);
    }

    public function lol(){
        $data['nav'] = 'home';
        $data['mm'] = 'lol';
        $data['blogs'] = Blogs::orderBy('created_at', 'desc')->limit(3)->get();
        $data['updates'] = LatestUpdates::orderBy('created_at', 'desc')->limit(3)->get();
        $data['videos'] = Videos::where('playlist_id', '1')->orderBy('id', 'desc')->limit(9)->get();

        return view('web.lol')->with($data);
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
}
