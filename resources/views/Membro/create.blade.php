@extends('layout.master')
@section('content')
<h1>Formulario</h1>
<p style="color:red">{{$errors->first('nome')}}</p>
<p style="color:red">{{$errors->first('cargo')}}</p>
<p style="color:red">{{$errors->first('username')}}</p>
{!! Form::open(['url'=>'listamembros']) !!}
<div class="form-group">
    {!! Form::label('nome','Nome: ')!!}
    {!! Form::text('nome',null,['class'=>'form-control'])!!}
    {!! Form::label('cargo','Cargo: ')!!}
    {!! Form::text('cargo',null,['class'=>'form-control'])!!}
    {!! Form::label('username','Username: ')!!}
    {!! Form::text('username',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::submit('Adicionar funcionario',['class'=>'btn btn-primary form-control'])!!}
</div>
{!! Form::close() !!}
@stop()