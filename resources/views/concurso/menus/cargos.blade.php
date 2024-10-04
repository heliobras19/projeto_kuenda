@extends('layouts.admin')
@section('title', 'Home')
@section('content')
    <div class="pagetitle">
        <h1>Cargos</h1>
        
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
                          <a class="nav-link" href="{{ route('concurso.correcao',['id' => 'Kuenda']) }}">Correção</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.recursos',['id' => 'Kuenda']) }}">Recursos</a>                              
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
                            <a class="nav-link" href="{{ route('concurso.necessidade_prova',['id' => 'Kuenda']) }}">Necessidade Prova</a>                              
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.indigenas',['id' => 'Kuenda']) }}">Indígena</a>                              
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.cota_adicional',['id' => 'Kuenda']) }}">Cota adicional</a>                              
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.pedidos_isencao',['id' => 'Kuenda']) }}">Pedidos de isenção</a>                              
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.cadastro_relatorios',['id' => 'Kuenda']) }}">Relatórios</a>                              
                        </li>
                      </ul>
                    </div>
                    
                    <div class="my-4">
                        <input type="button" value="Cadastrar Novo Cargo" name="" id="" class="form-control btn-danger">
                    </div>

                    <div class="my-4 d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-wrap">
                           
                            <div class="me-2 flex-grow-1">
                                <div class="d-flex align-items-baseline">
                                    <label class="me-2" for="">Mostrar </label>
                                    <select class="form-select me-2" aria-label="Mostrar registros">
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                    </select>
                                    <label for="">registos </label>
                                </div>
                            </div>

                        </div>
                        <div class="me-2">
                            <div class="d-flex align-items-center justify-center">
                                <label for="" class="form-label"></label>
                                <input type="search" class="form-control" placeholder="Search">
                            </div>
                        </div>
                    </div>

                    <!-- Table with hoverable rows -->
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">Nível de Escolaridade</th>
                                <th scope="col">Valor Ins.</th>
                                <th scope="col">Vagas</th>
                                <th scope="col">Local Provas</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>	
                        <tbody>
                           
                        </tbody>
                    </table>
                    <!-- End Table with hoverable rows -->

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
