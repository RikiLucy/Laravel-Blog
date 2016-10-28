<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Article;
use \App\Comment;
use \App\Category;

use App\Http\Requests;
//use Illuminate\Http\Response;
use Illuminate\Support\Facades\Response;

class BlogController extends Controller
{
    public function getIndex(){
        return view('index', [
            'article' => Article::getArticles(),
            'categorie' => Category::orderBy('id', 'desc')->get() // для сайд бара
        ]);
    }

    public function getArticle($title){
        return view('article', [
            'article' => Article::getArticlesByTitle($title),
            'comment' => Article::getArticlesByTitle($title)->comments,
            'category' => Article::getCategoryByTitle($title)
        ]);

    }
    public function postArticle(Request $request, $title){
        $secret = "6Ld_ggoUAAAAAPVxX94S6_d4u95uJngIEOgj9dNu";
        $response = $_POST['g-recaptcha-response'];
        $remoteip = $request->ip();
        $url = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");
        $url = json_decode($url, true);
        date_default_timezone_set('GMT');
        $date = date("F j, Y, g:i a");
        if($url['success'] == true){
        $comment = new Comment();
        $comment->text = strip_tags(nl2br($request->text), '<br /><br/><br>');
        $comment->date = $date;
        $comment->author = strip_tags($request->author);
        $comment->article_id = $title;
        $comment->save();
        $response = [
            'text' => strip_tags(nl2br($request->text), '<br /><br/><br>'),
            'author' => strip_tags($request->author),
            'date' => $date
        ];
        return Response::json( $response );
        }else{
            $response = [
                'text' => 'Вы не прошли капчу',
                'author' => 'Admin',
                'date' => $date
            ];
            return Response::json( $response );
        }
        //return redirect('/{title}');
    }
    public function getCategory($name){
        return view('index', [
            'article' => Article::getArticlesByCategory($name),
            'categorie' => Category::orderBy('id', 'desc')->get() // для сайд бара
        ]);

    }


}
