<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];

    public function post(){
        return $this->belongsTo(Post::class);
    }




    public static function getComments(){
        $comments = Comment::all(); // self::all();

    }
}
