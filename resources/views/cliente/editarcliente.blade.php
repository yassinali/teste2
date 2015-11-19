@extends('layout.main')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-9 main-chart">
                Editar dados do cliente
                {!! Form::model($cliente,['route'=>['cliente.update',$cliente->id],'method'=>'PUT']) !!}
                <div class="form-group">
                    {!! Form::label('nome','Nome: ')!!}
                    {!! Form::text('nome',null,['class'=>'form-control'])!!}
                    {!! Form::label('idade','Idade: ')!!}
                    {!! Form::text('idade',null,['class'=>'form-control'])!!}
                    {!! Form::label('sexo','Sexo: ')!!}
                    {!! Form::text('sexo',null,['class'=>'form-control'])!!}
                    {!! Form::label('bairro','Bairro: ')!!}
                    {!! Form::text('bairro',null,['class'=>'form-control'])!!}
                    {!! Form::label('distrito','Distrito: ')!!}
                    {!! Form::text('distrito',null,['class'=>'form-control'])!!}
                    {!! Form::label('bi','Bi/Nuit: ')!!}
                    {!! Form::text('bi',null,['class'=>'form-control'])!!}

                </div>
                <div class="form-group">
                    {!! Form::submit('Gravar Alteracao',['class'=>'btn btn-primary form-control'])!!}
                </div>
                {!! Form::close() !!}
                {!! Form::open(['route'=>['cliente.destroy',$cliente->id],'method'=>'DELETE']) !!}
                <div class="form-group">
                    {!! Form::submit('Apagar cliente',['class'=>'btn btn-danger form-control'])!!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>
</section>
@stop