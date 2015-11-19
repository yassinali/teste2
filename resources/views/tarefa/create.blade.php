@extends('layout.master')
@section('content')
{!! Form::open(['route'=>'tarefa.store','method'=>'POST']) !!}
<div class="form-group">
    {!! Form::label('id','ID: ')!!}
    {!! Form::select('idMembro', 
        (['0' => 'Escolhe um nome'] + $iditems), 
            null, 
            ['class' => 'form-control']) !!}
    {!! Form::label('descricao','Descrição: ')!!}
    {!! Form::text('descricao',null,['class'=>'form-control'])!!}
    {!! Form::label('designacao','Designação: ')!!}
    {!! Form::text('designacao',null,['class'=>'form-control'])!!}
    {!! Form::label('prazo','Prazo: ')!!}
    {!! Form::text('prazo',null,['class'=>'form-control'])!!}
    
</div>
<div class="form-group">
    {!! Form::submit('Adicionar tarefa',['class'=>'btn btn-primary form-control'])!!}
</div>
{!! Form::close() !!}
@stop