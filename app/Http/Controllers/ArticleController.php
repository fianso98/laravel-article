<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller
{
    function index(){
        $articles=Article::All();
        return view('articles',compact('articles'));
    }
    function getSlug($slug){
        $articles=Article::where('slug','=',$slug)->get();
        return view('articles',compact('articles'));
    }
    function add(Request $request){
        $article = new Article;

        $article->title = $request->input('title');
        $article->body = $request->input('content');
        $article->category = $request->input('category');
        $article->slug = str_slug($request->input('title'));

        $article->save();
        return redirect('articles');
    }
}
