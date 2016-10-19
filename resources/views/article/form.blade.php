
{!! Form::hidden('user_id',1) !!}

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


    {!! Form::submit($submitButton, null,
        array(
              'class'=>'btn btn-primary form-control'
              )) !!}
</div>