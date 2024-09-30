@extends('layouts.admin')
@section('title', 'Editar Perfil')
@section('content')

    <div class="pagetitle">
        <h1>Usuário</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Novo Usuário</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3">
                        <form>

                            <div class="d-flex flex-wrap mb-3">
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="editNumber" class="form-label">Código do Usuário:</label>
                                    <input type="text" class="form-control" readonly>
                                    
                                </div>
                            
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="modality" class="form-label">CPF do Usuário: </label>
                                    <input type="text" class="form-control">
                                </div>
                            
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="status" class="form-label">Situação: </label>
                                    <select name="status" type="text" class="form-select" id="status">
                                        <option value="">Ativo</option>
                                        <option value="">Inativo</option>
                                    </select>
                                </div>
                            
                                <div class="mb-3 flex-grow-1">
                                    <label for="situation" class="form-label">Nível</label>
                                    <select name="situation" type="text" class="form-select" id="situation">
                                        <option value="">Usuário</option>
                                        <option value="">Administrador</option>
                                        <option value="">Cliente</option>
                                    </select>
                                </div>
                            </div>


                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Nome do Usuário </label>
                                <div class="">
                                    <input name="password" type="text" class="form-control"
                                        id="">
                                </div>
                            </div>

                            <div class="d-flex flex-wrap ">
                                <div class="mb-3 flex-grow-1 me-3">
                                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">E-mail </label>
                                    <div class="">
                                        <input name="password" type="text" class="form-control"
                                            id="">
                                    </div>
                                </div>
                                <div class="mb-3 flex-grow-1 ">
                                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Telefone </label>
                                    <div class="">
                                        <input name="password" type="text" class="form-control"
                                            id="">
                                    </div>
                                </div>
                        </div>

                        
                            

                            <div class="d-flex flex-wrap mb-3">
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="editNumber" class="form-label">Cadastro de Clientes:</label>
                                    <select name="editNumber" type="text" class="form-select" id="editNumber">
                                        <option value="">NÃO</option>
                                    </select>
                                    
                                </div>
                            
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="modality" class="form-label">Cadastro de Concurso</label>
                                    <select name="editNumber" type="text" class="form-select" id="editNumber">
                                        <option value="">NÃO</option>
                                    </select>
                                </div>
                            
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="status" class="form-label">Cadastro de Cargos</label>
                                    <select name="status" type="text" class="form-select" id="status">
                                        <option value="">NÃO</option>
                                    </select>
                                </div>
                            
                                <div class="mb-3 flex-grow-1">
                                    <label for="situation" class="form-label">Cadastro de Boletos:</label>
                                    <select name="situation" type="text" class="form-select" id="situation">
                                        <option value="">NÃO</option>
                                    </select>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap mb-3">
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="editNumber" class="form-label">Cadastro de Candidatos:</label>
                                    <select name="editNumber" type="text" class="form-select" id="editNumber">
                                        <option value="">NÃO</option>
                                    </select>
                                    
                                </div>
                            
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="modality" class="form-label">Cadastro de Notícias:</label>
                                    <select name="editNumber" type="text" class="form-select" id="editNumber">
                                        <option value="">NÃO</option>
                                    </select>
                                </div>
                            
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="status" class="form-label">Cadastro de Editais:</label>
                                    <select name="status" type="text" class="form-select" id="status">
                                        <option value="">NÃO</option>
                                    </select>
                                </div>
                            
                                <div class="mb-3 flex-grow-1">
                                    <label for="situation" class="form-label">Relatórios Gerenciais:</label>
                                    <select name="situation" type="text" class="form-select" id="situation">
                                        <option value="">NÃO</option>
                                    </select>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap mb-3">
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="editNumber" class="form-label">Arquivos do SISTAC</label>
                                    <select name="editNumber" type="text" class="form-select" id="editNumber">
                                        <option value="">NÃO</option>
                                    </select>
                                    
                                </div>
                            
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="modality" class="form-label">Cadastro de Recursos</label>
                                    <select name="editNumber" type="text" class="form-select" id="editNumber">
                                        <option value="">NÃO</option>
                                    </select>
                                </div>
                            
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="status" class="form-label">Correção</label>
                                    <select name="status" type="text" class="form-select" id="status">
                                        <option value="">NÃO</option>
                                    </select>
                                </div>
                            
                                <div class="mb-3 flex-grow-1">
                                    <label for="situation" class="form-label">Ensalamento</label>
                                    <select name="situation" type="text" class="form-select" id="situation">
                                        <option value="">NÃO</option>
                                    </select>
                                </div>
                            </div>
                            
                            
                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Senha:</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                                <button type="submit" class="btn btn-primary">Cancelar</button>
                            </div>
                        </form><!-- End Change Password Form -->

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
