@extends('layouts.admin')
@section('title', 'Editar Perfil')
@section('content')

    <div class="pagetitle">
        <h1>Clientes</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Novo Cliente</li>
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
                        <form action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="codigo" class="col-md-4 col-lg-3 col-form-label">Código do Cliente</label>
                                <div class="">
                                    <input name="codigo" readonly type="text" class="form-control" id="codigo">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="nome" class="col-md-4 col-lg-3 col-form-label">Nome do Cliente</label>
                                <div class="">
                                    <input name="nome" type="text" class="form-control" id="nome">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="cep" class="col-md-4 col-lg-3 col-form-label">Cep</label>
                                <div class="">
                                    <input name="cep" type="text" class="form-control" id="cep">
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
                                <label for="cidade" class="col-md-4 col-lg-3 col-form-label">Cidade</label>
                                <div class="">
                                    <input name="cidade" type="text" class="form-control" id="cidade">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="endereco" class="col-md-4 col-lg-3 col-form-label">Endereço</label>
                                <div class="">
                                    <input name="endereco" type="text" class="form-control" id="endereco">
                                </div>
                            </div>

                            

                            <div class="mb-3">
                                <label for="telefone" class="col-md-4 col-lg-3 col-form-label">Telefone</label>
                                <div class="">
                                    <input name="telefone" type="text" class="form-control" id="telefone">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="fax" class="col-md-4 col-lg-3 col-form-label">Fax</label>
                                <div class="">
                                    <input name="fax" type="text" class="form-control" id="fax">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="col-md-4 col-lg-3 col-form-label">E-mail</label>
                                <div class="">
                                    <input name="email" type="email" class="form-control" id="email">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="site" class="col-md-4 col-lg-3 col-form-label">Site</label>
                                <div class="">
                                    <input name="site" type="text" class="form-control" id="site">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="logo" class="col-md-4 col-lg-3 col-form-label">Logo do Cliente</label>
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
