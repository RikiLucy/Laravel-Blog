<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model //модель для комментариев
{
    public function create_comment($request, $title) {
        $date = date("F j, Y, g:i a");
        $comment = new Comment();
        $comment->text = strip_tags(nl2br($request->text), '<br /><br/><br>');
        $comment->date = $date;
        $comment->author = $request->author;
        $comment->article_id = $title;
        $comment->save();
    }
}
