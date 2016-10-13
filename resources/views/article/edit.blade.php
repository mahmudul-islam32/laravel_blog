@extends('app')

@section('content')

    <h1>Write a New Article</h1>

    <hr/>

    {!! Form::model($article,['method'=>'PATCH' ,'action' => ['ArticlesController@update',$article ->id]])!!}



    @include('article.form',['submitButton' =>'Edit Article'])




    {!! Form::close() !!}

   @include('errors.list')


@stop