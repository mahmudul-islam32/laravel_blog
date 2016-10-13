@extends('app')

@section('content')

    <h1>Write a New Article</h1>

    <hr/>

    {!! Form::model($article,['method'=>'PATCH' ,'action' => ['ArticlesController@update',$article ->id]])!!}



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

        {!! Form::label('published_at','Published_on:') !!}

        {!! Form::input('date','published_at', date('Y-m-d'),
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

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach


        </ul>


    @endif


@stop