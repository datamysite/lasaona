<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Models\Author;
use App\Models\BlogTags;

class Blogs extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    public static function create(array $data){
        $b = new Blogs;
        $b->heading = $data['heading'];
        $b->banner_alt = $data['banner_alt'];
        $b->slug = $data['slug'];
        $b->description = $data['description'];
        $b->read_time = $data['read_time'];
        $b->short_description = $data['short_description'];
        $b->author_id = $data['author_id'];
        $b->status = '1';
        $b->created_by = Auth::guard('admin')->id();
        $b->save();


        return $b->id;
    }


    public static function blog_update($id, array $data){
        $b = Blogs::find($id);
        $b->heading = $data['heading'];
        $b->banner_alt = $data['banner_alt'];
        $b->slug = $data['slug'];
        $b->description = $data['description'];
        $b->read_time = $data['read_time'];
        $b->short_description = $data['short_description'];
        $b->author_id = $data['author_id'];
        $b->save();

        return $b->id;
    }

    public function author(){
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }

    public function tags(){
        return $this->hasMany(BlogTags::class, 'blog_id', 'id');
    }
}
