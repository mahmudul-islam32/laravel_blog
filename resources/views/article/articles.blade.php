@extends('app')

@section('content')
<h1>Articles</h1>
    @foreach($articles as $article)
    <article>
        <h1><a href="/articles/{{$article->id}}">{{ $article->title }}</a></h1>

        <div class="body">
            <h2>{{ $article->body }}</h2>

        </div>

    </article>
    @endforeach

@stop