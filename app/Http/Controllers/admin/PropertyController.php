<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Properties;
use App\Models\PropertyImages;

class PropertyController extends Controller
{
    public function index()
    {
        //$data['menu'] = 'blogs';

        $data['data'] = Properties::orderBy('id', 'desc')->paginate(10);

        return view('admin.property.index', ['data' => $data, 'menu' => 'property']);
    }

    public function load()
    {
        $p = 1;
        if (!empty($_GET['page'])) {
            $p = $_GET['page'];
        }
        $data = Properties::orderBy('id', 'desc')->paginate(10, ['*'], 'page', $p);

        return view('admin.property.load', ['data' => $data]);
    }


    public function create(Request $request)
    {
        $data = $request->all();
        $response = [];

        if (empty($data['name']) || empty($data['builder_name']) || empty($data['slug']) || empty($data['property_map']) || empty($data['description']) || empty($data['property_features'])) {
            $response['success'] = false;
            $response['errors'] = 'Please Fill all required fields.';
        } else {

            $property = Properties::where('name', $data['name'])->get();

            if (count($property) == 0) {

                $id = Properties::create($data);


                $i = 1;
                foreach ($request->file('images') as $img) {
                    $ext = $img->getClientOriginalExtension();
                    $newname = $id . $i . date('dmyhis') . '.' . $ext;

                    $img->move(public_path() . '/storage/properties', $newname);

                    $pi = new PropertyImages;
                    $pi->property_id = $id;
                    $pi->image = $newname;
                    $pi->save();

                    $i++;
                }

                $response['success'] = 'success';
                $response['message'] = 'Success! New Property Added.';
            } else {

                $response['success'] = false;
                $response['errors'] = 'Erorr, Property already exist.';
            }
        }

        echo json_encode($response);
    }

    public function update_blog(Request $request)
    {
        $data = $request->all();
        $response = [];

        if (empty($data['name']) || empty($data['builder_name'])) {
            $response['success'] = false;
            $response['errors'] = 'Please Fill all required fields.';
        } else {
            $id = base64_decode($data['property_id']);

            $p = Properties::find($id);
            $p->name = $data['name'];
            $p->slug = $data['slug'];
            $p->builder_name = $data['builder_name'];
            $p->description = $data['description'];
            $p->property_features = $data['property_features'];
            $p->property_map = $data['property_map'];
            $p->save();

            $response['success'] = 'success';
            $response['message'] = 'Successfully Updated.';
        }

        echo json_encode($response);
    }

    public function edit($id)
    {
        $id = base64_decode($id);

        $data = Properties::find($id);


        return view('admin.property.edit', ['data' => $data]);
    }



    public function delete($id)
    {
        $id = base64_decode($id);

        LatestUpdates::destroy($id);

        $response = 'success';

        return $response;
    }
}
