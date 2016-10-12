@extends('app')

@section('content')

            <h1>{{ $article->title }}</h1>

            <div class="body">
                <h2>{{ $article->body }}</h2>

            </div>
@stop