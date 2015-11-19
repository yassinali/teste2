@extends('layout.main')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-9 main-chart">
                <h2>Cliente: {{$cliente->nome}}</h2>
                <hr>
                <button class="btn btn-primary btn-xs">
                    {!!link_to_route('emprestimo.show', $title = 'Ficção', $parameters = 1, $attributes = ['class'=>'btn btn-primary'])!!}
                </button>
                <button class="btn btn-primary btn-xs">
                    {!!link_to_route('emprestimo.show', $title = 'Comédia', $parameters = 2, $attributes = ['class'=>'btn btn-primary'])!!}
                </button>
                <button class="btn btn-primary btn-xs">
                    {!!link_to_route('emprestimo.show', $title = 'Acção', $parameters = 3, $attributes = ['class'=>'btn btn-primary'])!!}
                </button>
            </div>
        </div>
    </section>
</section>
@stop