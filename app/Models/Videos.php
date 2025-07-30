<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Playlists;

class Videos extends Model
{
    protected $table = 'videos';

    public static function create(array $data){
        $b = new Videos;
        $b->name = $data['name'];
        $b->iframe = $data['iframe'];
        $b->playlist_id = $data['playlist_id'];
        $b->save();

        return $b->id;
    }

     public static function video_update($id, array $data){
        $b = Videos::find($id);
        $b->name = $data['name'];
        $b->iframe = $data['iframe'];
        $b->playlist_id = $data['playlist_id'];
        $b->save();

        return $b->id;
    }

    public function playlist(){
        return $this->belongsTo(Playlists::class, 'playlist_id', 'id');
    }
}
