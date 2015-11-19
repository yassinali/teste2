@extends('layout.master')
@section('content')

{!! Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PUT']) !!}
<div class="form-group">
    {!! Form::label('nome','Nome: ')!!}
    {!! Form::text('name',null,['class'=>'form-control'])!!}
    {!! Form::label('email','email: ')!!}
    {!! Form::text('email',null,['class'=>'form-control'])!!}
    {!! Form::label('senha','Senha: ')!!}
    {!! Form::password('password',['class'=>'form-control','placeholder'=>'Escrever a senha'])!!}
</div>
<div class="form-group">
    {!! Form::submit('Adicionar utilizador',['class'=>'btn btn-primary form-control'])!!}
</div>
{!! Form::close() !!}

{!! Form::open(['route'=>['usuario.destroy',$user->id],'method'=>'DELETE']) !!}
<div class="form-group">
    {!! Form::submit('Apagar utilizador',['class'=>'btn btn-danger form-control'])!!}
</div>
{!! Form::close() !!}
@stop