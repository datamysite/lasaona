<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Videos;

class Playlists extends Model
{
    
    protected $table = 'playlists';


    

    public function videos(){
        return $this->hasMany(Videos::class, 'playlist_id', 'id');
    }

    public function videos_desc(){
        return $this->hasMany(Videos::class, 'playlist_id', 'id')->orderBy('id', 'desc');
    }
}
