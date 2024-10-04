@extends('layouts.admin')
@section('title', 'Editar Perfil')
@section('content')

    <div class="pagetitle">
        <h1>Concurso</h1>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3">
                        <form action="{{ route('concurso.update') }}" method="POST">
                            @csrf

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
                            

                            <div class="mb-3">
                                <label for="entidade" class="col-md-4 col-lg-3 col-form-label">Entidade</label>
                                <div class="">
                                <select name="entidade" id="entidade" class="form-select">
                                        @foreach ($clientes as $item)
                                        <option value="{{ $item->id }}" {{ $item->id == old('entidade', $concurso->entidade ?? '') ? 'selected' : '' }}>{{ $item->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="municipio" class="col-md-4 col-lg-3 col-form-label">Município</label>
                                <div class="">
                                    <input name="municipio" value="{{old('municipio', $concurso->municipio)}}" type="text" class="form-control" id="municipio">
                                </div>
                            </div>

                             <div class="mb-3">
                                <label for="estado" class="col-md-4 col-lg-3 col-form-label">Estado</label>
                                <div class="">
                                   <select name="estado" id="estado" class="form-select">
                                        <option value="">Selecione o estado</option>
                                        <option value="AC" {{ $concurso->estado == 'AC' ? 'selected' : '' }}>Acre</option>
                                        <option value="AL" {{ $concurso->estado == 'AL' ? 'selected' : '' }}>Alagoas</option>
                                        <option value="AP" {{ $concurso->estado == 'AP' ? 'selected' : '' }}>Amapá</option>
                                        <option value="AM" {{ $concurso->estado == 'AM' ? 'selected' : '' }}>Amazonas</option>
                                        <option value="BA" {{ $concurso->estado == 'BA' ? 'selected' : '' }}>Bahia</option>
                                        <option value="CE" {{ $concurso->estado == 'CE' ? 'selected' : '' }}>Ceará</option>
                                        <option value="DF" {{ $concurso->estado == 'DF' ? 'selected' : '' }}>Distrito Federal</option>
                                        <option value="ES" {{ $concurso->estado == 'ES' ? 'selected' : '' }}>Espírito Santo</option>
                                        <option value="GO" {{ $concurso->estado == 'GO' ? 'selected' : '' }}>Goiás</option>
                                        <option value="MA" {{ $concurso->estado == 'MA' ? 'selected' : '' }}>Maranhão</option>
                                        <option value="MT" {{ $concurso->estado == 'MT' ? 'selected' : '' }}>Mato Grosso</option>
                                        <option value="MS" {{ $concurso->estado == 'MS' ? 'selected' : '' }}>Mato Grosso do Sul</option>
                                        <option value="MG" {{ $concurso->estado == 'MG' ? 'selected' : '' }}>Minas Gerais</option>
                                        <option value="PA" {{ $concurso->estado == 'PA' ? 'selected' : '' }}>Pará</option>
                                        <option value="PB" {{ $concurso->estado == 'PB' ? 'selected' : '' }}>Paraíba</option>
                                        <option value="PR" {{ $concurso->estado == 'PR' ? 'selected' : '' }}>Paraná</option>
                                        <option value="PE" {{ $concurso->estado == 'PE' ? 'selected' : '' }}>Pernambuco</option>
                                        <option value="PI" {{ $concurso->estado == 'PI' ? 'selected' : '' }}>Piauí</option>
                                        <option value="RJ" {{ $concurso->estado == 'RJ' ? 'selected' : '' }}>Rio de Janeiro</option>
                                        <option value="RN" {{ $concurso->estado == 'RN' ? 'selected' : '' }}>Rio Grande do Norte</option>
                                        <option value="RS" {{ $concurso->estado == 'RS' ? 'selected' : '' }}>Rio Grande do Sul</option>
                                        <option value="RO" {{ $concurso->estado == 'RO' ? 'selected' : '' }}>Rondônia</option>
                                        <option value="RR" {{ $concurso->estado == 'RR' ? 'selected' : '' }}>Roraima</option>
                                        <option value="SC" {{ $concurso->estado == 'SC' ? 'selected' : '' }}>Santa Catarina</option>
                                        <option value="SP" {{ $concurso->estado == 'SP' ? 'selected' : '' }}>São Paulo</option>
                                        <option value="SE" {{ $concurso->estado == 'SE' ? 'selected' : '' }}>Sergipe</option>
                                        <option value="TO" {{ $concurso->estado == 'TO' ? 'selected' : '' }}>Tocantins</option>
                                    </select>

                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="descricao" class="col-md-4 col-lg-3 col-form-label">Descrição</label>
                                <div class="">
                                   <textarea name="descricao" class="form-control" id="descricao" cols="30" rows="10">{{old('descricao', $concurso->descricao ?? '')}}</textarea>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap mb-3">
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="edital_numero" class="form-label">Nº Edital</label>
                                    <input name="edital_numero" type="text" class="form-control" id="edital_numero" value="{{old('edital_numero', $concurso->edital_numero ?? '')}}">
                                </div>
                            
                             <div class="mb-3 me-3 flex-grow-1">
                                <label for="modalidade" class="form-label">Modalidade</label>
                                <select name="modalidade" class="form-control" id="modalidade">
                                    <option {{ $concurso->modalidade == 'Concurso publico' ? 'selected' : '' }}>Concurso publico</option>
                                    <option {{ $concurso->modalidade == 'Emprego publico' ? 'selected' : '' }}>Emprego publico</option>
                                    <option {{ $concurso->modalidade == 'Processo seletivo' ? 'selected' : '' }}>Processo seletivo</option>
                                    <option {{ $concurso->modalidade == 'Concurso publico' ? 'selected' : '' }}>Concurso publico</option>
                                    <option {{ $concurso->modalidade == 'Seleção publica' ? 'selected' : '' }}>Seleção publica</option>
                                    <option {{ $concurso->modalidade == 'Vestibular' ? 'selected' : '' }}>Vestibular</option>
                                </select>
                            </div>

                            <div class="mb-3 me-3 flex-grow-1">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-control" id="status">
                                    <option {{ $concurso->status == 'Aberto' ? 'selected' : '' }}>Aberto</option>
                                    <option {{ $concurso->status == 'Cancelado' ? 'selected' : '' }}>Cancelado</option>
                                    <option {{ $concurso->status == 'Encerrado' ? 'selected' : '' }}>Encerrado</option>
                                    <option {{ $concurso->status == 'Suspenso' ? 'selected' : '' }}>Suspenso</option>
                                </select>
                            </div>

                            <div class="mb-3 flex-grow-1">
                                <label for="situacao" class="form-label">Situação</label>
                                <select name="situacao" class="form-control" id="situacao">
                                    <option {{ $concurso->situacao == 'Visivel' ? 'selected' : '' }}>Visivel</option>
                                    <option {{ $concurso->situacao == 'Invisivel' ? 'selected' : '' }}>Invisivel</option>
                                </select>
                            </div>

                            </div>

                          <div class="mb-3">
    <label for="descricao_inicial" class="col-md-4 col-lg-3 col-form-label">Descrição Inicial</label>
    <div class="">
        <textarea name="descricao_inicial" class="form-control" id="descricao_inicial" cols="30" rows="10">{{ old('descricao_inicial', $concurso->descricao_inicial) }}</textarea>
    </div>
</div>

<div class="mb-3">
    <label for="descricao_publicacoes" class="col-md-4 col-lg-3 col-form-label">Descrição Publicações</label>
    <div class="">
        <textarea name="descricao_publicacoes" class="form-control" id="descricao_publicacoes" cols="30" rows="10">{{ old('descricao_publicacoes', $concurso->descricao_publicacoes) }}</textarea>
    </div>
</div>

<div>
    <h2>Inscrições</h2>
</div>

                            <div class="mb-3">
                                <label for="tipo_inscricao" class="col-md-4 col-lg-3 col-form-label">Tipo de Inscrição</label>
                                <select name="tipo_inscricao" class="form-control" id="tipo_inscricao">
                                    <option {{ old('tipo_inscricao', $concurso->tipo_inscricao) == 'Internet' ? 'selected' : '' }}>Internet</option>
                                    <option {{ old('tipo_inscricao', $concurso->tipo_inscricao) == 'Presencial' ? 'selected' : '' }}>Presencial</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="codigo_certame" class="col-md-4 col-lg-3 col-form-label">Código do Certame</label>
                                <input name="codigo_certame" type="text" id="codigo_certame" class="form-control" value="{{ old('codigo_certame', $concurso->codigo_certame) }}">
                            </div>

                            <div class="mb-3">
                                <label for="data_inicio" class="col-md-4 col-lg-3 col-form-label">Data de Início</label>
                                <input name="data_inicio" type="date" id="data_inicio" class="form-control" value="{{ old('data_inicio', $concurso->data_inicio) }}">
                            </div>

                            <div class="mb-3">
                                <label for="hora_inicio" class="col-md-4 col-lg-3 col-form-label">Hora de Início</label>
                                <input name="hora_inicio" type="time" id="hora_inicio" class="form-control" value="{{ old('hora_inicio', $concurso->hora_inicio) }}">
                            </div>

<div class="mb-3">
    <label for="data_fim" class="col-md-4 col-lg-3 col-form-label">Data Final</label>
    <input name="data_fim" type="date" id="data_fim" class="form-control" value="{{ old('data_fim', $concurso->data_fim) }}">
</div>

<div class="mb-3">
    <label for="hora_fim" class="col-md-4 col-lg-3 col-form-label">Hora Final</label>
    <input name="hora_fim" type="time" id="hora_fim" class="form-control" value="{{ old('hora_fim', $concurso->hora_fim) }}">
</div>

<div class="mb-3">
    <label for="data_pror" class="col-md-4 col-lg-3 col-form-label">Data de Prorrogação</label>
    <input name="data_pror" type="date" id="data_pror" class="form-control" value="{{ old('data_pror', $concurso->data_pror) }}">
</div>

<div class="mb-3">
    <label for="hora_pror" class="col-md-4 col-lg-3 col-form-label">Hora de Prorrogação</label>
    <input name="hora_pror" type="time" id="hora_pror" class="form-control" value="{{ old('hora_pror', $concurso->hora_pror) }}">
</div>

<div class="mb-3">
    <label for="numero_inscricoes" class="col-md-4 col-lg-3 col-form-label">Número de Inscrições</label>
    <input name="numero_inscricoes" type="text" id="numero_inscricoes" class="form-control" value="{{ old('numero_inscricoes', $concurso->numero_inscricoes) }}">
</div>

<div class="mb-3">
    <label for="numero_inscricoes_turno" class="col-md-4 col-lg-3 col-form-label">Número de Inscrições por Turno</label>
    <input name="numero_inscricoes_turno" type="text" id="numero_inscricoes_turno" class="form-control" value="{{ old('numero_inscricoes_turno', $concurso->numero_inscricoes_turno) }}">
</div>

<div class="mb-3">
    <label for="data_limite_estatuto_idoso" class="col-md-4 col-lg-3 col-form-label">Data Limite do Estatuto do Idoso</label>
    <input name="data_limite_estatuto_idoso" type="date" id="data_limite_estatuto_idoso" class="form-control" value="{{ old('data_limite_estatuto_idoso', $concurso->data_limite_estatuto_idoso) }}">
</div>

<div class="mb-3">
    <label for="vagas_negros_pardos" class="form-label">Vagas para Negros e Pardos</label>
    <select name="vagas_negros_pardos" class="form-select" id="vagas_negros_pardos">
        <option value="1" {{ old('vagas_negros_pardos', $concurso->vagas_negros_pardos) == 1 ? 'selected' : '' }}>SIM</option>
        <option value="0" {{ old('vagas_negros_pardos', $concurso->vagas_negros_pardos) == 0 ? 'selected' : '' }}>NÃO</option>
    </select>
</div>

                           

                          <div class="mb-3">
    <label for="informar_dependentes" class="col-md-4 col-lg-3 col-form-label">Informar Nº de Dependentes</label>
    <select name="informar_dependentes" class="form-select" id="informar_dependentes">
        <option value="1" {{ old('informar_dependentes', $concurso->informar_dependentes) == 1 ? 'selected' : '' }}>SIM</option>
        <option value="0" {{ old('informar_dependentes', $concurso->informar_dependentes) == 0 ? 'selected' : '' }}>NÃO</option>
    </select>
</div>

<div class="mb-3">
    <label for="quantidade_tipo_prova" class="col-md-4 col-lg-3 col-form-label">Quantidade de Tipos de Prova</label>
    <input name="quantidade_tipo_prova" type="number" id="quantidade_tipo_prova" class="form-control" value="{{ old('quantidade_tipo_prova', $concurso->quantidade_tipo_prova) }}">
</div>

<div class="mb-3">
    <label for="data_final_isencao" class="col-md-4 col-lg-3 col-form-label">Data Final para Isenção</label>
    <input name="data_final_isencao" type="date" id="data_final_isencao" class="form-control" value="{{ old('data_final_isencao', $concurso->data_final_isencao) }}">
</div>

<div class="mb-3">
    <label for="hora_final_isencao" class="col-md-4 col-lg-3 col-form-label">Hora Final para Isenção</label>
    <input name="hora_final_isencao" type="time" id="hora_final_isencao" class="form-control" value="{{ old('hora_final_isencao', $concurso->hora_final_isencao) }}">
</div>

<div class="mb-3">
    <label for="numero_isencoes" class="col-md-4 col-lg-3 col-form-label">Número de Isenções</label>
    <input name="numero_isencoes" type="number" id="numero_isencoes" class="form-control" value="{{ old('numero_isencoes', $concurso->numero_isencoes) }}">
</div>

<div class="mb-3">
    <label for="permite_anexo_documentos" class="col-md-4 col-lg-3 col-form-label">Permite Anexo de Documentos</label>
    <select name="permite_anexo_documentos" class="form-select" id="permite_anexo_documentos">
        <option value="1" {{ old('permite_anexo_documentos', $concurso->permite_anexo_documentos) == 1 ? 'selected' : '' }}>SIM</option>
        <option value="0" {{ old('permite_anexo_documentos', $concurso->permite_anexo_documentos) == 0 ? 'selected' : '' }}>NÃO</option>
    </select>
</div>

<div class="mb-3">
    <label for="data_final_anexo" class="col-md-4 col-lg-3 col-form-label">Data Final para Anexos</label>
    <input name="data_final_anexo" type="date" id="data_final_anexo" class="form-control" value="{{ old('data_final_anexo', $concurso->data_final_anexo) }}">
</div>

<div class="mb-3">
    <label for="hora_final_anexo" class="col-md-4 col-lg-3 col-form-label">Hora Final para Anexos</label>
    <input name="hora_final_anexo" type="time" id="hora_final_anexo" class="form-control" value="{{ old('hora_final_anexo', $concurso->hora_final_anexo) }}">
</div>

<div class="mb-3">
    <label for="permite_anexo_documentos_pcd" class="col-md-4 col-lg-3 col-form-label">Permite Anexo de Documentos PCD</label>
    <select name="permite_anexo_documentos_pcd" class="form-select" id="permite_anexo_documentos_pcd">
        <option value="1" {{ old('permite_anexo_documentos_pcd', $concurso->permite_anexo_documentos_pcd) == 1 ? 'selected' : '' }}>SIM</option>
        <option value="0" {{ old('permite_anexo_documentos_pcd', $concurso->permite_anexo_documentos_pcd) == 0 ? 'selected' : '' }}>NÃO</option>
    </select>
</div>
 </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
