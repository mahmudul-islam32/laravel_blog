<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Requests\ArticleRequest;
use App\Article;
use App\Tag;


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
        $tags=Tag::lists('name','id');
        return view('article.create',compact('tags'));
    }

    public function store(ArticleRequest $request)
    {


        $article = Article::create($request->all());
        $tagId=$request->input('tag_list');
        $article->tags()->attach($tagId);

        return redirect('articles');
    }

    public function edit( $id )
    {
        $tags=Tag::lists('name','id');

        $article = Article::findorfail($id);

        return view('article.edit', compact('article','tags'));


    }

    public function update($id, ArticleRequest $request)
    {
        $article = Article::findorfail($id);
        $article->update($request->all());


        return redirect('articles');


    }
}