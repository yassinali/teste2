@extends('layout.master')
@section('content')
<a href="usuario/create">Novo utilizador</a>             
<table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>E-mail</th>
                                                <th>Acções</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ($users as $user)
                                            <tr>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                
            <td>{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
        </tr>
    @endforeach
 </tbody>
 {!! $users->render()!!}
@stop                                       
                      