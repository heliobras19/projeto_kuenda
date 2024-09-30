@extends('layouts.admin')
@section('title', 'Home')
@section('content')
    <div class="pagetitle">
        <h1>Avaliação de Local e Data</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Concursos</a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">
            <div class="card">
                <div class="card-body">

                    <div class="mb-3">
                        <ul class="nav nav-tabs">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="{{ route('concurso.consultar',['id' => 'Kuenda']) }}">Concurso</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('concurso.avaliacao',['id' => 'Kuenda']) }}">Locais, Data de Avaliação</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('concurso.publicacao',['id' => 'Kuenda']) }}">Publicações</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.boletos',['id' => 'Kuenda']) }}">Boletos</a>                              
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('concurso.cargos',['id' => 'Kuenda']) }}">Cargos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.recursos',['id' => 'Kuenda']) }}">Cadastro de Recursos</a>                              
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('concurso.retornos',['id' => 'Kuenda']) }}">Retornos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.inscricao',['id' => 'Kuenda']) }}">Inscrição/D. Pessoais</a>                              
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('concurso.consultar',['id' => 'Kuenda']) }}">Correção</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.consultar',['id' => 'Kuenda']) }}">Recursos</a>                              
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('concurso.consultar',['id' => 'Kuenda']) }}">Perguntas adicionais</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.afrodescendencia',['id' => 'Kuenda']) }}">Afrodescendente</a>                              
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.pcd',['id' => 'Kuenda']) }}">PCD</a>                              
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.consultar',['id' => 'Kuenda']) }}">Necessidade Prova</a>                              
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.consultar',['id' => 'Kuenda']) }}">Indígena</a>                              
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.consultar',['id' => 'Kuenda']) }}">Cota adicional</a>                              
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.consultar',['id' => 'Kuenda']) }}">Pedidos de isenção</a>                              
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('concurso.consultar',['id' => 'Kuenda']) }}">Relatórios</a>                              
                        </li>
                      </ul>
                    </div>
                    

                    <div class="d-flex flex-wrap mb-3">
                        <div class="mb-3 flex-grow-1 me-3">
                           <input type="button" value="Cadastrar data e turno de avalição" class="form-control btn btn-danger">
                        </div>
                        <div class="mb-3 flex-grow-1 ">
                            <input type="button" value="Cadastrar cidades de avalição" class="form-control btn btn-danger">
                        </div>
                </div>


                    <!-- Table with hoverable rows -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Data</th>
                                <th scope="col">Turno</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>	
                        <tbody> 
                            <tr>
                                <th></th>
                                <td></td>
                                <td></td>
                                <td><input type="button" value="Visualizar" name="" id="" class="form-control btn btn-danger"></td>
                            
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Table with hoverable rows -->


                     <!-- Table with hoverable rows -->
                     <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Cidade/UF</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>	
                        <tbody> 
                            <tr>
                                <td></td>
                                <td></td>
                                <td><input type="button" value="Visualizar" name="" id="" class="form-control btn btn-danger"></td>
                            
                            </tr>
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
