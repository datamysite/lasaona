<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PropertyImages;
use Auth;

class Properties extends Model
{
    //
    protected $table = 'properties';

    public static function create(array $data){
        $p = new Properties;
        $p->name = $data['name'];
        $p->slug = $data['slug'];
        $p->builder_name = $data['builder_name'];
        $p->description = $data['description'];
        $p->property_features = $data['property_features'];
        $p->property_map = $data['property_map'];
        $p->created_by = Auth::guard('admin')->id();
        $p->save();


        return $p->id;
    }

    public function images(){
        return $this->hasMany(PropertyImages::class, 'property_id', 'id');
    }
}
