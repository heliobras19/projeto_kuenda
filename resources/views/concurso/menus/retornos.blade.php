@extends('layouts.admin')
@section('title', 'Home')
@section('content')
    <div class="pagetitle">
        <h1>Cadastro de Recursos</h1>
        
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">
            <div class="card">
                <div class="card-body">

                    <div class="mb-3">
                        <ul class="nav nav-tabs">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="{{ route('concurso.consultar',['id' => $id]) }}">Concurso</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('concurso.avaliacao',['id' => $id]) }}">Locais, Data de Avaliação</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('concurso.publicacao',['id' => $id]) }}">Publicações</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.boletos',['id' => $id]) }}">Boletos</a>                              
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('concurso.cargos',['id' => $id]) }}">Cargos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.recursos',['id' => $id]) }}">Cadastro de Recursos</a>                              
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('concurso.retornos',['id' => $id]) }}">Retornos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.inscricao',['id' => $id]) }}">Inscrição/D. Pessoais</a>                              
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('concurso.consultar',['id' => $id]) }}">Correção</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.consultar',['id' => $id]) }}">Recursos</a>                              
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('concurso.consultar',['id' => $id]) }}">Perguntas adicionais</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.afrodescendencia',['id' => $id]) }}">Afrodescendente</a>                              
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.pcd',['id' => $id]) }}">PCD</a>                              
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.consultar',['id' => $id]) }}">Necessidade Prova</a>                              
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.consultar',['id' => $id]) }}">Indígena</a>                              
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.consultar',['id' => $id]) }}">Cota adicional</a>                              
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.consultar',['id' => $id]) }}">Pedidos de isenção</a>                              
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.consultar',['id' => $id]) }}">Relatórios</a>                              
                        </li>
                      </ul>
                    </div>
                    
                    <div class="my-4">
                        <input type="button" value="Deferir todas inscrições Ativas" name="" id="" class="form-control btn-danger">
                    </div>
                    <div class="my-4">
                        <input type="file" class="form-control">
                    </div>

                    <div class="my-4">
                        <input type="button" value="Deferir Pagamentos Após o Vencimento" name="" id="" class="form-control btn-danger">
                    </div>
                    <!-- Table with hoverable rows -->
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">Nome do Arquivo</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>	
                        <tbody>
                           
                        </tbody>
                    </table>
                    <!-- End Table with hoverable rows -->

                    <div class="my-4">
                        <input type="button" value="Relatório" name="" id="" class="form-control btn-primary">
                    </div>

                </div>
            </div>


            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>

        </div>
    </section>

@endsection
