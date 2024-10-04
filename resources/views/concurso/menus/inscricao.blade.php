@extends('layouts.admin')
@section('title', 'Home')
@section('content')
    <div class="pagetitle">
        <h1>Cadastro de Candidatos</h1>
        
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
                          <a class="nav-link" href="{{ route('concurso.correcao',['id' => $id]) }}">Correção</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.recursos',['id' => $id]) }}">Recursos</a>                              
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
                            <a class="nav-link" href="{{ route('concurso.necessidade_prova',['id' => $id]) }}">Necessidade Prova</a>                              
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.indigenas',['id' => $id]) }}">Indígena</a>                              
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.cota_adicional',['id' => $id]) }}">Cota adicional</a>                              
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.pedidos_isencao',['id' => $id]) }}">Pedidos de isenção</a>                              
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.cadastro_relatorios',['id' => $id]) }}">Relatórios</a>                              
                        </li>
                      </ul>
                    </div>
                    
                        <div class="d-flex flex-wrap my-4">
                            <div class="me-2 flex-grow-1">
                                <input type="text" class="form-control">
                            </div>
                        <div class="me-2">
                                <input type="input" class="form-control btn btn-danger" value="Pesquisar">
                            
                        </div>

                        </div>

                        <div class="my-4">
                            <label for="">Total de Candidatos: 0</label>
                        </div>
                        
                    

                    <!-- Table with hoverable rows -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Inscrição</th>
                                <th scope="col">Candidato</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">CPF</th>
                                <th scope="col">Data</th>
                                <th scope="col">Homologado</th>
                                <th scope="col">D. Pessoais</th>
                                <th scope="col">Inscrição</th>
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
