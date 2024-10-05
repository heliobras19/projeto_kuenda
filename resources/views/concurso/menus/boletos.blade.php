@extends('layouts.admin')
@section('title', 'Editar Perfil')
@section('content')

    <div class="pagetitle">
        <h1>Boletos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Concurso</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <section class="section profile">
        <div class="row">
            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3">
                        <div class="mb-3">
                            <ul class="nav nav-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="{{ route('concurso.consultar',['id' => 1]) }}">Concurso</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('concurso.avaliacao',['id' =>1]) }}">Locais, Data de Avaliação</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('concurso.publicacao',['id' =>1]) }}">Publicações</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('concurso.boletos',['id' =>1]) }}">Boletos</a>                              
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('concurso.cargos',['id' =>1]) }}">Cargos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('concurso.recursos',['id' =>1]) }}">Cadastro de Recursos</a>                              
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('concurso.retornos',['id' =>1]) }}">Retornos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('concurso.inscricao',['id' =>1]) }}">Inscrição/D. Pessoais</a>                              
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('concurso.correcao',['id' =>1]) }}">Correção</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('concurso.recursos',['id' =>1]) }}">Recursos</a>                              
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('concurso.consultar',['id' =>1]) }}">Perguntas adicionais</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('concurso.afrodescendencia',['id' =>1]) }}">Afrodescendente</a>                              
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('concurso.pcd',['id' =>1]) }}">PCD</a>                              
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('concurso.necessidade_prova',['id' =>1]) }}">Necessidade Prova</a>                              
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('concurso.indigenas',['id' =>1]) }}">Indígena</a>                              
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('concurso.cota_adicional',['id' =>1]) }}">Cota adicional</a>                              
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('concurso.pedidos_isencao',['id' =>1]) }}">Pedidos de isenção</a>                              
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('concurso.consultar',['id' =>1]) }}">Relatórios</a>                              
                            </li>
                          </ul>
                        </div>

                        <!-- Modal -->
<div class="modal fade" id="modalBoleto" tabindex="-1" aria-labelledby="modalBoletoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalBoletoLabel">Adicionar Boleto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formBoleto" action="{{route('turno-avaliacao.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="codigo" class=" col-form-label">Banco</label>
                        <select name="carteira"  class="form-control" id="carteira">
                            <option>BANCO DO BRASIL S.A</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="nome" class=" col-form-label">Cedente</label>
                        <div class="">
                            <input name="nome" type="text" class="form-control" id="nome">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="cep" class=" col-form-label">CNPJ Cedente</label>
                        <div class="">
                            <input name="cep" type="text" class="form-control" id="cep">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="cidade" class=" col-form-label">Endereço de Cedente</label>
                        <div class="">
                            <input name="cidade" type="text" class="form-control" id="cidade">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="endereco" class=" col-form-label">Agência</label>
                        <div class="">
                            <input name="endereco" type="text" class="form-control" id="endereco">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="telefone" class=" col-form-label">Conta</label>
                        <div class="">
                            <input name="telefone" type="text" class="form-control" id="telefone">
                        </div>
                    </div>
                    <div class="d-flex flex-wrap mb-3">
                        <div class="mb-3 me-3 flex-grow-1">
                            <label for="fax" class=" col-form-label">Conv. Com. Eletronico</label>
                            <div class="">
                                <input name="fax" type="text" class="form-control" id="fax">
                            </div>
                        </div>

                        <div class="mb-3 me-3 flex-grow-1">
                            <label for="email" class="col-form-label">Convênio de Cobrança</label>
                            <div class="">
                                <input name="email" type="email" class="form-control" id="email">
                            </div>
                        </div>
                    </div>
                    

                    <div class="d-flex flex-wrap mb-3">
                        <div class="mb-3 me-3 flex-grow-1">
                            <label for="carteira" class="form-label">Carteira</label>
                            <select name="carteira"  class="form-control" id="carteira">
                                <option>Selecione a carteira</option>
                            </select>
                        </div>
                    
                        <div class="mb-3 me-3 flex-grow-1">
                            <label for="variacao" class="form-label">Variação</label>
                            <input name="variacao" type="text" class="form-control" id="variacao">
                        </div>
                    
                        <div class="mb-3 me-3 flex-grow-1">
                            <label for="vencimento" class="form-label">Vencimento</label>
                            <input name="vencimento" type="date" class="form-control" id="vencimento">
                        </div>
                    
                        <div class="mb-3 flex-grow-1">
                            <label for="dias_vencimento" class="form-label">Dias de Vencimento</label>
                            <input name="dias_vencimento" type="number" class="form-control" id="dias_vencimento">
                        </div>
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

                        <form action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="my-4">
                                <input type="button" value="Novo Boleto"  data-bs-toggle="modal" data-bs-target="#modalBoleto" name="" id="" class="form-control btn-danger">
                            </div>

                            <div class="my-4">
                                <input type="button" value="Pesquisar" name="" id="" class="form-control btn-danger">
                            </div>

                            <div class="mb-3">
                                <label for="codigo" class="col-md-4 col-lg-3 col-form-label">Banco</label>
                                <select name="carteira"  class="form-control" id="carteira">
                                    <option>BANCO DO BRASIL S.A</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="nome" class="col-md-4 col-lg-3 col-form-label">Cedente</label>
                                <div class="">
                                    <input name="nome" type="text" class="form-control" id="nome">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="cep" class="col-md-4 col-lg-3 col-form-label">CNPJ Cedente</label>
                                <div class="">
                                    <input name="cep" type="text" class="form-control" id="cep">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="cidade" class="col-md-4 col-lg-3 col-form-label">Endereço de Cedente</label>
                                <div class="">
                                    <input name="cidade" type="text" class="form-control" id="cidade">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="endereco" class="col-md-4 col-lg-3 col-form-label">Agência</label>
                                <div class="">
                                    <input name="endereco" type="text" class="form-control" id="endereco">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="telefone" class="col-md-4 col-lg-3 col-form-label">Conta</label>
                                <div class="">
                                    <input name="telefone" type="text" class="form-control" id="telefone">
                                </div>
                            </div>
                            <div class="d-flex flex-wrap mb-3">
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="fax" class=" col-form-label">Conv. Com. Eletronico</label>
                                    <div class="">
                                        <input name="fax" type="text" class="form-control" id="fax">
                                    </div>
                                </div>
    
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="email" class="col-form-label">Convênio de Cobrança</label>
                                    <div class="">
                                        <input name="email" type="email" class="form-control" id="email">
                                    </div>
                                </div>
                            </div>
                            

                            <div class="d-flex flex-wrap mb-3">
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="carteira" class="form-label">Carteira</label>
                                    <select name="carteira"  class="form-control" id="carteira">
                                        <option>Selecione a carteira</option>
                                    </select>
                                </div>
                            
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="variacao" class="form-label">Variação</label>
                                    <input name="variacao" type="text" class="form-control" id="variacao">
                                </div>
                            
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="vencimento" class="form-label">Vencimento</label>
                                    <input name="vencimento" type="date" class="form-control" id="vencimento">
                                </div>
                            
                                <div class="mb-3 flex-grow-1">
                                    <label for="dias_vencimento" class="form-label">Dias de Vencimento</label>
                                    <input name="dias_vencimento" type="number" class="form-control" id="dias_vencimento">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="logo" class="col-md-4 col-lg-3 col-form-label">developer_application_key</label>
                                <div class="">
                                    <input name="logo" type="file" class="form-control" id="logo">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="logo" class="col-md-4 col-lg-3 col-form-label">client_secret</label>
                                <div class="">
                                    <input name="logo" type="file" class="form-control" id="logo">
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                                <button type="reset" class="btn btn-secondary">Cancelar</button>
                            </div>
                        </form><!-- End Form -->

                    </div>
                </div>

            </div>
        </div>
    </section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    // Função para buscar os dados de endereço com base no CEP
    $('#cep').on('blur', function() {
        var cep = $(this).val().replace(/\D/g, ''); // Remove caracteres não numéricos

        if (cep !== "") {
            // Validação simples de CEP (deve ter 8 dígitos)
            var validacep = /^[0-9]{8}$/;

            if (validacep.test(cep)) {
                // Consulta o ViaCEP
                $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {
                    if (!("erro" in dados)) {
                        // Preenche o estado e cidade com os valores retornados
                        $('#estado').val(dados.uf); // Estado (sigla)
                        $('#cidade').val(dados.localidade); // Cidade
                    } else {
                        // CEP não encontrado
                        alert("CEP não encontrado.");
                        $('#estado').val('');
                        $('#cidade').val('');
                    }
                });
            }
        }
    });
});
</script>

@endsection
