@extends('layout.master')
@section('content')
<a href="tarefa/create">Nova tarefa</a>  
<table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>E-mail</th>
                                                <th>Acções</th>
                                            </tr>
                                        </thead>
                                        <tbody>
@foreach ($tarefas as $tr)
 <tr>    
    <td>{{$tr->idMembro}}</td>
    <td>{{$tr->descricao}}</td>
    <td>{{$tr->designacao}}</td>
    <td>{{$tr->prazo}}</td>
   <td></td>
        </tr>                                               
     @endforeach
</tbody>
@stop