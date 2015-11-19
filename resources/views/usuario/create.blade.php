@extends('layout.master')
@section('content')

{!! Form::open(['route'=>'usuario.store','method'=>'POST']) !!}
<div class="form-group">
    {!! Form::label('nome','Nome: ')!!}
    {!! Form::text('nome',null,['class'=>'form-control'])!!}
    {!! Form::label('email','email: ')!!}
    {!! Form::text('email',null,['class'=>'form-control'])!!}
    {!! Form::label('senha','Senha: ')!!}
    {!! Form::password('password',['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::submit('Adicionar utilizador',['class'=>'btn btn-primary form-control'])!!}
</div>
{!! Form::close() !!}
@stop