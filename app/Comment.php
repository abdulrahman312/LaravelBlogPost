<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'is_active',
        'author',
        'email',
        'body',
        'photo_id'
    ];

    public function replies(){

        return $this->hasMany('App\CommentReply');

    }

    public function photo(){

        return $this->belongsTo("App\Photo");

    }

    public function post(){

        return $this->belongsTo('App\Post');

    }

    public function replyCount($commentId){

        $count = CommentReply::where('comment_id', $commentId)->count();

        return $count;

    }
}
