@extends('layout.main')
@section('content')
<section id="main-content">
    <section class="wrapper">
         <div class="row">
             <div class="col-lg-9 main-chart">
                 <h1>Actualizacao de registo de filmes</h1>
 {!! Form::model($filme,['route'=>['filme.update',$filme->id],'method'=>'PUT']) !!}
<div class="form-group">
      {!! Form::label('titulo','Titulo: ')!!}
    {!! Form::text('titulo',null,['class'=>'form-control'])!!}
    {!! Form::label('id_categoria_fk','Categoria: ')!!}
    {!! Form::select('id_categoria_fk', 
        (['0' => 'Escolher uma categoria']), 
            null, 
            ['class' => 'form-control']) !!}
    {!! Form::label('sinopse','Sinopse: ')!!}
    {!! Form::text('sinopse',null,['class'=>'form-control'])!!}
    
</div>
<div class="form-group">
    {!! Form::submit('Actualizar filme',['class'=>'btn btn-primary form-control'])!!}
</div>
{!! Form::close() !!}
            </div>
        </div>
    </section>
</section>
@stop