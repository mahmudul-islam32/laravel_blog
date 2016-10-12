@extends('app')

@section('content')

<h1>Write a New Article</h1>

<hr/>

{!! Form::open(['url' => 'articles']) !!}



<div class="form-group">

    {!! Form::label('title','Title:') !!}

    {!! Form::text('title', null,
        array('required',
              'class'=>'form-control',
              'placeholder'=>'Name*')) !!}
</div>

<div class="form-group">

    {!! Form::label('body','Body:') !!}

    {!! Form::textarea('body', null,
        array(
              'class'=>'form-control'
              )) !!}
</div>

<div class="form-group">


    {!! Form::submit('Add Article', null,
        array(
              'class'=>'btn btn-primary form-control'
              )) !!}
</div>






{!! Form::close() !!}


@stop