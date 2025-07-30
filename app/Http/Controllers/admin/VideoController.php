<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Videos;
use App\Models\Playlists;

class VideoController extends Controller
{
    public function index()
    {
        $data['menu'] = 'videos';
        $data['data'] = Videos::orderBy('created_at', 'desc')->paginate(10);
        $data['playlists'] = Playlists::get();

        return view('admin.videos.index')->with($data);
    }

    public function load()
    {
        $p = 1;
        if (!empty($_GET['page'])) {
            $p = $_GET['page'];
        }
        $data = Videos::orderBy('created_at', 'desc')->paginate(10, ['*'], 'page', $p);

        return view('admin.videos.load', ['data' => $data]);
    }

    public function search($val)
    {
        $response = [];
        $data = Videos::when($val !== '--empty--', function ($q) use ($val) {
            return $q->where('title', 'like', '%' . $val . '%');
        })->get();

        return view('admin.videos.load', ['data' => $data]);
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $response = [];
        //dd($data);
        if (empty($data['name']) || empty($data['playlist_id'])) {
            $response['success'] = false;
            $response['errors'] = 'Please Fill all required fields.';
        } else {

            $blog = Videos::where('name', $data['name'])->where('playlist_id', $data['playlist_id'])->get();

            if (count($blog) == 0) {

                $id = Videos::create($data);


                $response['success'] = 'success';
                $response['message'] = 'Success! New Video Added.';
            } else {

                $response['success'] = false;
                $response['errors'] = 'Erorr, Video already exist.';
            }
        }

        echo json_encode($response);
    }

    public function update_blog(Request $request)
    {
        $data = $request->all();
        $response = [];

        if (empty($data['name']) || empty($data['playlist_id'])) {
            $response['success'] = false;
            $response['errors'] = 'Please Fill all required fields.';
        } else {

            $id = Videos::video_update(base64_decode($data['video_id']), $data);


            $response['success'] = 'success';
            $response['message'] = 'Success! Video Successfully Updated.';
        }

        echo json_encode($response);
    }


    public function edit($id)
    {
        $id = base64_decode($id);

        $data = Videos::find($id);
        $data['playlists'] = Playlists::get();


        return view('admin.videos.edit', ['data' => $data]);
    }



    public function delete($id)
    {
        $id = base64_decode($id);

        Videos::destroy($id);

        $response = 'success';

        return $response;
    }
}
