<?php

namespace App\Http\Controllers;



use App\Http\Requests;
use App\Article;
use Carbon\Carbon;


class ArticlesController extends Controller
{
    public function index(){

        $articles =Article::latest('published_at')->published()->get();
        return view('article.articles',compact('articles'));
    }

    public function show($id){

        $article =Article::findOrfail($id);

        return view('article.show',compact('article'));


    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Requests\CreateArticleRequest $request){

       Article::create($request->all());


       return redirect('articles');
    }
}
