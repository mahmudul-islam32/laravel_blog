<?php

namespace App\Http\Controllers;



use App\Http\Requests;
use App\Article;
use Carbon\Carbon;
use Request;

class ArticlesController extends Controller
{
    public function index(){

        $articles =Article::all();
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

    public function store(){

        $input=Request::all();

        $input['published_at'] =Carbon::now();
        Article::create($input);

       return redirect('articles');
    }
}