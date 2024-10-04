@extends('layouts.admin')
@section('title', 'Editar Perfil')
@section('content')

    <div class="pagetitle">
        <h1>Concurso</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Novo Concurso</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3">
                        <form action="{{ route('concurso.store') }}" method="POST">
                            @csrf

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
                                  <a class="nav-link" href="{{ route('concurso.correcao',['id' => 'Kuenda']) }}">Correção</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('concurso.recursos',['id' => 'Kuenda']) }}">Recursos</a>                              
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
                            

                            <div class="mb-3">
                                <label for="entidade" class="col-md-4 col-lg-3 col-form-label">Entidade</label>
                                <div class="">
                                    <select name="entidade" id="entidade" class="form-select">
                                       @foreach ($clientes as $item)
                                            <option value="{{$item->id}}">{{$item->nome}}</option>
                                       @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="municipio" class="col-md-4 col-lg-3 col-form-label">Município</label>
                                <div class="">
                                    <input name="municipio" type="text" class="form-control" id="municipio">
                                </div>
                            </div>

                             <div class="mb-3">
                                <label for="estado" class="col-md-4 col-lg-3 col-form-label">Estado</label>
                                <div class="">
                                    <select name="estado" id="estado" class="form-select">
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
                            </div>

                            <div class="mb-3">
                                <label for="descricao" class="col-md-4 col-lg-3 col-form-label">Descrição</label>
                                <div class="">
                                   <textarea name="descricao" class="form-control" id="descricao" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap mb-3">
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="edital_numero" class="form-label">Nº Edital</label>
                                    <input name="edital_numero" type="text" class="form-control" id="edital_numero">
                                </div>
                            
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="modalidade" class="form-label">Modalidade</label>
                                    <select name="modalidade"  class="form-control" id="modalidade">
                                        <option>Concurso publico</option>
                                        <option>Emprego publico</option>
                                        <option>Processo seletivo</option>
                                        <option>Concurso publico</option>
                                        <option>Seleção publica</option>
                                        <option>Vestibular</option>
                                    </select>
                                </div>
                            
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status"  class="form-control" id="status">
                                        <option>Aberto</option>
                                        <option>Cancelado</option>
                                        <option>Encerrado</option>
                                        <option>Suspenso</option>
                                    </select>
                                </div>
                            
                                <div class="mb-3 flex-grow-1">
                                    <label for="situacao" class="form-label">Situação</label>
                                    <select name="situacao"  class="form-control" id="status">
                                        <option>Visivel</option>
                                        <option>Invisivel</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="descricao_inicial" class="col-md-4 col-lg-3 col-form-label">Descrição Inicial</label>
                                <div class="">
                                   <textarea name="descricao_inicial" class="form-control" id="descricao_inicial" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="descricao_publicacoes" class="col-md-4 col-lg-3 col-form-label">Descrição Publicações</label>
                                <div class="">
                                   <textarea name="descricao_publicacoes" class="form-control" id="descricao_publicacoes" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div>
                                <h2>Inscrições</h2>
                            </div>

                            <div class="mb-3">
                                <label for="tipo_inscricao" class="col-md-4 col-lg-3 col-form-label">Tipo de Inscrição</label>
                                 <select name="tipo_inscricao"  class="form-control" id="tipo_inscricao">
                                        <option>Internet</option>
                                        <option>Presencial</option>
                                    </select>
                            </div>

                            <div class="mb-3">
                                <label for="codigo_certame" class="col-md-4 col-lg-3 col-form-label">Código do Certame</label>
                                <input name="codigo_certame" type="text" id="codigo_certame" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="data_inicio" class="col-md-4 col-lg-3 col-form-label">Data de Início</label>
                                <input name="data_inicio" type="date" id="data_inicio" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="hora_inicio" class="col-md-4 col-lg-3 col-form-label">Hora de Início</label>
                                <input name="hora_inicio" type="time" id="hora_inicio" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="data_fim" class="col-md-4 col-lg-3 col-form-label">Data Final</label>
                                <input name="data_fim" type="date" id="data_fim" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="hora_fim" class="col-md-4 col-lg-3 col-form-label">Hora Final</label>
                                <input name="hora_fim" type="time" id="hora_fim" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="data_pror" class="col-md-4 col-lg-3 col-form-label">Data de Prorrogação</label>
                                <input name="data_pror" type="date" id="data_pror" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="hora_pror" class="col-md-4 col-lg-3 col-form-label">Hora de Prorrogação</label>
                                <input name="hora_pror" type="time" id="hora_pror" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="numero_inscricoes" class="col-md-4 col-lg-3 col-form-label">Número de Inscrições</label>
                                <input name="numero_inscricoes" type="text" id="numero_inscricoes" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="numero_inscricoes_turno" class="col-md-4 col-lg-3 col-form-label">Número de Inscrições por Turno</label>
                                <input name="numero_inscricoes_turno" type="text" id="numero_inscricoes_turno" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="data_limite_estatuto_idoso" class="col-md-4 col-lg-3 col-form-label">Data Limite do Estatuto do Idoso</label>
                                <input name="data_limite_estatuto_idoso" type="date" id="data_limite_estatuto_idoso" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="vagas_negros_pardos" class="col-md-4 col-lg-3 col-form-label">Vagas para Negros e Pardos</label>
                                <select name="vagas_negros_pardos" class="form-select" id="vagas_negros_pardos">
                                    <option value="1">SIM</option>
                                    <option value="0">NÃO</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="informar_dependentes" class="col-md-4 col-lg-3 col-form-label">Informar Nº de Dependentes</label>
                                <select name="informar_dependentes" class="form-select" id="informar_dependentes">
                                    <option value="1">SIM</option>
                                    <option value="0">NÃO</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="quantidade_tipo_prova" class="col-md-4 col-lg-3 col-form-label">Quantidade de Tipos de Prova</label>
                                <input name="quantidade_tipo_prova" type="number" id="quantidade_tipo_prova" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="data_final_isencao" class="col-md-4 col-lg-3 col-form-label">Data Final para Isenção</label>
                                <input name="data_final_isencao" type="date" id="data_final_isencao" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="hora_final_isencao" class="col-md-4 col-lg-3 col-form-label">Hora Final para Isenção</label>
                                <input name="hora_final_isencao" type="time" id="hora_final_isencao" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="numero_isencoes" class="col-md-4 col-lg-3 col-form-label">Número de Isenções</label>
                                <input name="numero_isencoes" type="number" id="numero_isencoes" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="permite_anexo_documentos" class="col-md-4 col-lg-3 col-form-label">Permite Anexo de Documentos</label>
                                <select name="permite_anexo_documentos" class="form-select" id="permite_anexo_documentos">
                                    <option value="1">SIM</option>
                                    <option value="0">NÃO</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="data_final_anexo" class="col-md-4 col-lg-3 col-form-label">Data Final para Anexos</label>
                                <input name="data_final_anexo" type="date" id="data_final_anexo" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="hora_final_anexo" class="col-md-4 col-lg-3 col-form-label">Hora Final para Anexos</label>
                                <input name="hora_final_anexo" type="time" id="hora_final_anexo" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="permite_anexo_documentos_pcd" class="col-md-4 col-lg-3 col-form-label">Permite Anexo de Documentos PCD</label>
                                <select name="permite_anexo_documentos_pcd" class="form-select" id="permite_anexo_documentos_pcd">
                                    <option value="1">SIM</option>
                                    <option value="0">NÃO</option>
                                </select>
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
