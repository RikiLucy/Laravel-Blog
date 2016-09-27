<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model //модель для комментариев
{
    //protected $fillable = ['author', 'text', 'date'];
    static public function getComments($id){
        $comments = Comment::where('id_article','=', $id)->get();
        return $comments;
    }
}
