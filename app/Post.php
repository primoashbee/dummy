<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function comment(){
        return $this->hasMany('App\Comment','posts_id');
    }
}
