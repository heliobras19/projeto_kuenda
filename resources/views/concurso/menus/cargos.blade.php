@extends('layouts.admin')
@section('title', 'Home')
@section('content')
    <div class="pagetitle">
        <h1>Cargos</h1>
        
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">
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
                    <a class="nav-link" href="{{ route('concurso.consultar',['id' => $id]) }}">Relatórios</a>                              
                </li>
              </ul>
            </div>


            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>{{ __('Lista de Cargos') }}</span>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cargoModal">
                        Adicionar Cargo
                    </button>
                </div>

                     <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Código</th>
                                <th>Cargo</th>
                                <th>Situação</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cargos as $cargo)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $cargo->codigo }}</td>
                                    <td>{{ $cargo->cargo }}</td>
                                    <td>{{ $cargo->situacao }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-warning">Editar</button>
                                        <button class="btn btn-sm btn-danger">Excluir</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

               <div class="modal fade" id="cargoModal" tabindex="-1" aria-labelledby="cargoModalLabel" aria-hidden="true">
                <div class="modal-dialog">
     <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="cargoModalLabel">Cadastrar Novo Cargo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{ route('cargos.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="codigo" class="form-label">Código</label>
                <input type="text" name="codigo" id="codigo" class="form-control">
            </div>

            <div class="mb-3">
                <label for="situacao" class="form-label">Situação</label>
                <input type="text" name="situacao" id="situacao" class="form-control" value="ATIVO">
            </div>

            <div class="mb-3">
                <label for="quantidade_questoes" class="form-label">Quantidade de Questões</label>
                <input type="number" name="quantidade_questoes" id="quantidade_questoes" class="form-control" value="0">
            </div>

            <div class="mb-3">
                <label for="codigo_interno" class="form-label">Código Interno</label>
                <input type="text" name="codigo_interno" id="codigo_interno" class="form-control">
            </div>

            <div class="mb-3">
                <label for="cargo" class="form-label">Cargo</label>
                <input type="text" name="cargo" id="cargo" class="form-control">
            </div>

            <div class="mb-3">
                <label for="nome_cargo_sistema" class="form-label">Nome do Cargo no Sistema</label>
                <input type="text" name="nome_cargo_sistema" id="nome_cargo_sistema" class="form-control">
            </div>

            <div class="mb-3">
                <label for="nome_area_sistema" class="form-label">Nome da Área no Sistema</label>
                <input type="text" name="nome_area_sistema" id="nome_area_sistema" class="form-control">
            </div>

            <div class="mb-3">
                <label for="nome_regiao_sistema" class="form-label">Nome da Região no Sistema</label>
                <input type="text" name="nome_regiao_sistema" id="nome_regiao_sistema" class="form-control">
            </div>

            <div class="mb-3">
                <label for="area_atuacao" class="form-label">Área de Atuação</label>
                <input type="text" name="area_atuacao" id="area_atuacao" class="form-control">
            </div>

            <div class="mb-3">
                <label for="escolaridade" class="form-label">Escolaridade</label>
                <input type="text" name="escolaridade" id="escolaridade" class="form-control">
            </div>

            <div class="mb-3">
                <label for="vagas" class="form-label">Vagas</label>
                <input type="number" name="vagas" id="vagas" class="form-control" value="0">
            </div>

            <div class="mb-3">
                <label for="vagas_pne" class="form-label">Vagas para PNE</label>
                <input type="number" name="vagas_pne" id="vagas_pne" class="form-control" value="0">
            </div>

            <div class="mb-3">
                <label for="vagas_afro" class="form-label">Vagas para Afrodescendentes</label>
                <input type="number" name="vagas_afro" id="vagas_afro" class="form-control" value="0">
            </div>

            <div class="mb-3">
                <label for="vagas_indigenas" class="form-label">Vagas para Indígenas</label>
                <input type="number" name="vagas_indigenas" id="vagas_indigenas" class="form-control" value="0">
            </div>

            <div class="mb-3">
                <label for="vagas_cota_adicional" class="form-label">Vagas de Cota Adicional</label>
                <input type="number" name="vagas_cota_adicional" id="vagas_cota_adicional" class="form-control" value="0">
            </div>

            <div class="mb-3">
                <label for="cadastro_reserva" class="form-label">Cadastro de Reserva</label>
                <input type="checkbox" name="cadastro_reserva" id="cadastro_reserva" class="form-check-input">
            </div>

            <div class="mb-3">
                <label for="vagas_cadastro_reserva" class="form-label">Vagas de Cadastro Reserva</label>
                <input type="number" name="vagas_cadastro_reserva" id="vagas_cadastro_reserva" class="form-control" value="0">
            </div>

            <div class="mb-3">
                <label for="salario_inicial" class="form-label">Salário Inicial</label>
                <input type="text" name="salario_inicial" id="salario_inicial" class="form-control" value="0.00">
            </div>

            <div class="mb-3">
                <label for="valor_inscricao" class="form-label">Valor da Inscrição</label>
                <input type="text" name="valor_inscricao" id="valor_inscricao" class="form-control" value="0.00">
            </div>

            <div class="mb-3">
                <label for="limite_inscritos" class="form-label">Limite de Inscritos</label>
                <input type="number" name="limite_inscritos" id="limite_inscritos" class="form-control" value="0">
            </div>

            <div class="mb-3">
                <label for="multiplos_cargos" class="form-label">Múltiplos Cargos</label>
                <input type="checkbox" name="multiplos_cargos" id="multiplos_cargos" class="form-check-input">
            </div>

            <div class="mb-3">
                <label for="devolucao_valor" class="form-label">Devolução de Valor</label>
                <input type="checkbox" name="devolucao_valor" id="devolucao_valor" class="form-check-input">
            </div>

            <div class="mb-3">
                <label for="anexa_titulos" class="form-label">Anexar Títulos</label>
                <input type="checkbox" name="anexa_titulos" id="anexa_titulos" class="form-check-input">
            </div>

            <div class="mb-3">
                <label for="nota_prova_titulos" class="form-label">Nota Prova de Títulos</label>
                <input type="text" name="nota_prova_titulos" id="nota_prova_titulos" class="form-control">
            </div>

            <div class="mb-3">
                <label for="prova_redacao" class="form-label">Prova de Redação</label>
                <input type="checkbox" name="prova_redacao" id="prova_redacao" class="form-check-input">
            </div>

            <div class="mb-3">
                <label for="nota_prova_discursiva" class="form-label">Nota Prova Discursiva 1</label>
                <input type="text" name="nota_prova_discursiva" id="nota_prova_discursiva" class="form-control">
            </div>

            <div class="mb-3">
                <label for="nota_prova_discursiva2" class="form-label">Nota Prova Discursiva 2</label>
                <input type="text" name="nota_prova_discursiva2" id="nota_prova_discursiva2" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</div>

                </div>

        </div>
    </section>

@endsection
