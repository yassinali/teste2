@extends('layout.main')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <h4><i class="fa fa-angle-right"></i>Lista de filmes</h4>
                        <hr>
                        <thead>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i>Titulo</th>
                                <th>Categoria</th>
                                <th>Sinopse</th>
                                <th>Acções <a  href="{!!URL::to('filme/create')!!}"> Novo cliente</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($filme as $filmes)
                            <tr>
                                <td>{{$filmes->titulo}}</td>
                                <td>{{$filmes->id_categoria_fk}}</td>
                                <td>{{$filmes->sinopse}}</td>                                
                                <td>
                                    <button class="btn btn-primary btn-xs">
                                        {!!link_to_route('filme.edit', $title = 'Editar', $parameters = $filmes->id, $attributes = ['class'=>'btn-primary'])!!}
                                    </button>
                                    <button class="btn btn-primary btn-xs">
                                        {!!link_to_route('filme.edit', $title = 'Apagar', $parameters = $filmes->id, $attributes = ['class'=>'btn-primary'])!!}
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