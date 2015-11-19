@extends('layout.master')
@section('content')
<a href="adicionarmembro">Novo membro</a>             
<table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nome</th>
                                                <th>Cargo</th>
                                                <th>username</th>
                                                <th>Accoes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ($membro as $membro)
                                            <tr>
                                                <td>{{$membro->id}}</td>
                                                <td>{{$membro->nome}}</td>
                                                <td>{{$membro->cargo}}</td>
                                                <td></td>
                                                <td><a href="#{{$membro->id}}">Ver</a></td>
                                            </tr>
                                             @endforeach
                                        </tbody>
@stop                                       
                      