@extends('layouts.admin')
@section('title', 'Home')
@section('content')
    <div class="pagetitle">
        <h1>Publicações</h1>
        
    </div><!-- End Page Title -->

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
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
                    
                    <div class="my-4">
                        <input type="button" value="Cadastrar Novo Edital" data-toggle="modal" data-target="#editModal" name="" id="" class="form-control btn-danger">
                    </div>

                    <div class="my-4 d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-wrap">
                        </div>
                        <div class="me-2">
                            <div class="d-flex align-items-center justify-center">
                            </div>
                        </div>
                    </div>

                    <!-- Table with hoverable rows -->
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Descrição</th>
                                <th scope="col">Arquivo</th>
                                <th scope="col">Tamanho</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>	
                        <tbody>
                           @foreach ($publicacao as $item)
                                <tr>
                                    <td>{{ $item->descricao }}</td>
                                    <td>
                                        <a href="{{ Storage::url($item->path) }}" target="_blank">{{ basename($item->path) }}</a>
                                    </td>
                                    <td>{{ $item->path ? Storage::size($item->path) / 1024 . ' KB' : 'N/A' }}</td>
                                    <td>
                                        <a href="{{ Storage::url($item->path) }}" class="btn btn-primary" target="_blank">Visualizar</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('publicacao.destroy', $item->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with hoverable rows -->

                </div>


            <!-- Modal -->
 <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Adicionar/Edital</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editForm" method="POST" action="{{ route('publicacao.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input type="hidden" class="form-control" value="{{$id}}" name="concurso_id" id="concurso_id" required>
                                <label for="tipo_edital" class="form-label">Tipo de Edital</label>
                                <input type="text" class="form-control" name="tipo_edital" id="tipo_edital" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição</label>
                            <textarea class="form-control" name="descricao" id="descricao" rows="3" required></textarea>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="situacao" class="form-label">Situação</label>
                                <select class="form-control" name="situacao" id="situacao" required>
                                    <option value="1">Ativo</option>
                                    <option value="0">Inativo</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="codigo_ato" class="form-label">Código do Ato</label>
                                <input type="text" class="form-control" name="codigo_ato" id="codigo_ato" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="path" class="form-label"> Arquivo</label>
                                <input type="file" class="form-control" name="path" id="path" required>
                            </div>
                            <div class="col-md-6">
                                <label for="tipo_publicacao" class="form-label">Tipo de Publicação</label>
                                <select name="tipo_publicacao" class="form-control" required>
                                    <option>Edital</option>
                                    <option>Prova</option>
                                    <option>Localize sala</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="data_visualizacao" class="form-label">Data de Visualização</label>
                                <input type="date" class="form-control" name="data_visualizacao" id="data_visualizacao" required>
                            </div>
                            <div class="col-md-6">
                                <label for="hora_visualizacao" class="form-label">Hora de Visualização</label>
                                <input type="time" class="form-control" name="hora_visualizacao" id="hora_visualizacao" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="data_publicacao" class="form-label">Data de Publicação</label>
                                <input type="date" class="form-control" name="data_publicacao" id="data_publicacao" required>
                            </div>
                            <div class="col-md-6">
                                <label for="visivel_ate" class="form-label">Visível Até</label>
                                <input type="date" class="form-control" name="visivel_ate" id="visivel_ate" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
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
