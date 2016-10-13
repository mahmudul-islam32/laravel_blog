<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use Carbon\Carbon;



class ArticlesController extends Controller
{
    public function index()
    {

        $articles = Article::latest('published_at')->published()->get();
        return view('article.articles', compact('articles'));
    }

    public function show($id)
    {

        $article = Article::findOrfail($id);

        return view('article.show', compact('article'));


    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Requests\CreateArticleRequest $request)
    {

        Article::create($request->all());


        return redirect('articles');
    }

    public function edit($id)
    {

        $article = Article::findorfail($id);

        return view('article.edit', compact('article'));


    }

    public function update($id, Request $request)
    {
        $article = Article::findorfail($id);
        $article->update($request->all());


        return redirect('articles');


    }
}