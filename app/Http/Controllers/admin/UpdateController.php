<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LatestUpdates;

class UpdateController extends Controller
{
    public function index()
    {
        //$data['menu'] = 'blogs';

        $data['data'] = LatestUpdates::orderBy('id', 'desc')->paginate(10);

        return view('admin.updates.index', ['data' => $data, 'menu' => 'updates']);
    }

    public function load()
    {
        $p = 1;
        if (!empty($_GET['page'])) {
            $p = $_GET['page'];
        }
        $data = LatestUpdates::orderBy('id', 'desc')->paginate(10, ['*'], 'page', $p);

        return view('admin.updates.load', ['data' => $data]);
    }


    public function create(Request $request)
    {
        $data = $request->all();
        $response = [];

        if (empty($data['heading']) || empty($data['slug']) || empty($data['description']) || empty($data['read_time']) || empty($data['short_description']) || empty($data['author_id'])) {
            $response['success'] = false;
            $response['errors'] = 'Please Fill all required fields.';
        } else {

            $blog = Blogs::where('heading', $data['heading'])->get();

            if (count($blog) == 0) {

                $id = Blogs::create($data);



                //Meta Title -- Start

                    $meta_url = 'https://datamysite.com/'.$data['slug'];

                    $mt = new MetaTags;
                    $mt->url = $meta_url;
                    $mt->title = $data['heading'];
                    $mt->keywords = '';
                    $mt->description = $data['short_description'];
                    $mt->created_by = Auth::guard('admin')->id();
                    $mt->save();


                //Meta Title -- End


                if ($request->hasFile('coupon_image')) {
                    $file = $request->file('coupon_image');
                    $ext = $file->getClientOriginalExtension();
                    $newname = $id . date('dmyhis') . '.' . $ext;

                    $file->move(public_path() . '/storage/blogs', $newname);

                    $b = Blogs::find($id);
                    $b->banner = $newname;
                    $b->save();
                }

                $response['success'] = 'success';
                $response['message'] = 'Success! New Blog Added.';
            } else {

                $response['success'] = false;
                $response['errors'] = 'Erorr, Blog already exist.';
            }
        }

        echo json_encode($response);
    }

    public function update_blog(Request $request)
    {
        $data = $request->all();
        $response = [];

        if (empty($data['heading']) || empty($data['link'])) {
            $response['success'] = false;
            $response['errors'] = 'Please Fill all required fields.';
        } else {
            $id = base64_decode($data['blog_id']);

            $up = LatestUpdates::find($id);
            $up->heading = $data['heading'];
            $up->link = $data['link'];
            $up->save();


            if ($request->hasFile('edit_mblog_image')) {
                $file = $request->file('edit_mblog_image');
                $ext = $file->getClientOriginalExtension();
                $newname = $id . date('dmyhis') . '.' . $ext;

                $file->move(public_path() . '/storage/updates', $newname);

                $b = LatestUpdates::find($id);
                $b->banner = $newname;
                $b->save();
            }

            $response['success'] = 'success';
            $response['message'] = 'Successfully Updated.';
        }

        echo json_encode($response);
    }

    public function edit($id)
    {
        $id = base64_decode($id);

        $data = LatestUpdates::find($id);


        return view('admin.updates.edit', ['data' => $data]);
    }



    public function delete($id)
    {
        $id = base64_decode($id);

        LatestUpdates::destroy($id);

        $response = 'success';

        return $response;
    }
}
