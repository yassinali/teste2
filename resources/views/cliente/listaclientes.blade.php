@extends('layout.main')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <h4><i class="fa fa-angle-right"></i>Lista de todos os clientes</h4>
                        <hr>
                        <thead>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i>Nome</th>
                                <th>Idade</th>
                                <th><i class="fa fa-bookmark"></i>Bairro</th>
                                <th><i class=" fa fa-edit"></i>Bi/Nuit</th>
                                <th>Acções <a  href="{!!URL::to('cliente/create')!!}"> Novo cliente</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cliente as $clientes)
                            <tr>
                                <td>{{$clientes->nome}}</td>
                                <td>{{$clientes->idade}}</td>
                                <td>{{$clientes->bairro}}</td>
                                <td>{{$clientes->bi}}</td>
                                <td>
                                    <button class="btn btn-primary btn-xs">
                                        {!!link_to_route('cliente.show', $title = 'Fazer empréstimo', $parameters = $clientes->id, $attributes = ['class'=>'btn-primary'])!!}
                                    </button>
                                    <button class="btn btn-primary btn-xs">
                                        {!!link_to_route('cliente.edit', $title = 'Editar', $parameters = $clientes->id, $attributes = ['class'=>'btn-primary'])!!}
                                    </button>
                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- /content-panel -->
            </div><!-- /col-md-12 -->
        </div><!-- /row -->
    </section>
</section>
@stop