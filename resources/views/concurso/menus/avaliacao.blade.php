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
        {{-- Mensagem de sucesso --}}
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
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
                    

                    <div class="d-flex flex-wrap mb-3">
                        <div class="mb-3 flex-grow-1 me-3">
                           <input type="button"  data-bs-toggle="modal" data-bs-target="#modalProva" value="Cadastrar data e turno de avalição" class="form-control btn btn-danger">
                        </div>
                        <div class="mb-3 flex-grow-1 ">
                            <input type="button" value="Cadastrar cidades de avalição"  data-bs-toggle="modal" data-bs-target="#cidadeModal" class="form-control btn btn-danger">
                        </div>
                    </div>


                    <!-- Table with hoverable rows -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">Turno</th>
                                <th scope="col">Hora da prova</th>
                                <th scope="col">Abertura</th>
                                <th scope="col">Fechamento</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>	
                        <tbody> 
                           
                               @foreach ($turno as $item)
                                <tr>
                                   <td>{{$item->data}}</td>
                                   <td>{{$item->turno}}</td>
                                   <td>{{$item->hora_prova}}</td>
                                   <td>{{$item->hora_abre_portao}}</td>
                                   <td>{{$item->hora_fecha_portao}}</td>
                                    <td><form action="{{ route('turno-avaliacao.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este turno?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="bi bi-trash"></i> Excluir
                                    </button>
                                    </form></td>
                                </tr>
                               @endforeach
                            
                        </tbody>
                    </table>
                    <!-- End Table with hoverable rows -->


                     <!-- Table with hoverable rows -->
                     <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Estado</th>
                                <th scope="col">Cidade/UF</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>	
                        <tbody> 
                            @foreach ($cidade as $item)
                                <tr>
                                    <td>{{$item->estado}}</td>
                                    <td>{{$item->cidade}}</td>
                                    <td><form action="{{ route('cidades.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta cidade?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bi bi-trash"></i> Excluir
                                        </button>
                                    </form></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with hoverable rows -->
                    <!-- Botão para abrir o modal -->

<!-- Modal -->
<div class="modal fade" id="modalProva" tabindex="-1" aria-labelledby="modalProvaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalProvaLabel">Adicionar Prova</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formProva" action="{{route('turno-avaliacao.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="concurso_id"  class="form-label">Concurso ID</label>
                        <input type="hidden" value="{{$id}}" name="concurso_id" id="concurso_id" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="data" class="form-label">Data</label>
                        <input type="date" name="data" id="data" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="turno" class="form-label">Turno</label>
                        <select name="turno" id="turno" class="form-control" required>
                            <option value="">Selecione o turno</option>
                            <option value="PADRÃO">PADRÃO</option>
                            <option value="MATUTINO">MATUTINO</option>
                            <option value="VESPERTINO">VESPERTINO</option>
                            <option value="NOTURNO">NOTURNO</option>
                            <option value="MANHÃ">MANHÃ</option>
                            <option value="TARDE">TARDE</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="hora_prova" class="form-label">Hora da Prova</label>
                        <input type="time" name="hora_prova" id="hora_prova" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="hora_abre_portao" class="form-label">Hora de Abertura do Portão</label>
                        <input type="time" name="hora_abre_portao" id="hora_abre_portao" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="hora_fecha_portao" class="form-label">Hora de Fechamento do Portão</label>
                        <input type="time" name="hora_fecha_portao" id="hora_fecha_portao" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="cor_relatorio" class="form-label">Cor do Relatório</label>
                        <select class="input-text" name="cor_relatorio">
                                <option value="" selected="selected">Selecione a Cor</option>
                                <option value="#002060">Azul</option>
                                <option value="#cf0707">Vermelho</option>
                                <option value="#167010">Verde</option>
                                <option value="#661070">Roxo</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary" id="salvarProva">Salvar</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="cidadeModal" tabindex="-1" role="dialog" aria-labelledby="cidadeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cidadeModalLabel">Adicionar/Editar Cidade</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="cidadeForm" method="POST" action="{{ route('cidades.store') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="estado">Estado</label>
                            <select name="estado" id="estado" class="form-select" required>
                                <option value="">Selecione o estado</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" required>
                    </div>
                      <input type="hidden" value="{{$id}}" name="concurso_id" id="concurso_id" class="form-control" required>
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
