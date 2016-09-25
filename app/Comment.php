<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['author', 'text'];
    static public function getComments($id){
        $comments = Comment::where('id_article','=', $id)->get();
        return $comments;
    }
}
