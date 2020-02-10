<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $guarded = ['id'];  // zabranis
    
    
     public static function getPublishedPosts(){
        return self::where('published', true)->with('user')->get();
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');   
    }

    public function tags(){
        $this->belongsToMany(Tag::class);
    }
}
