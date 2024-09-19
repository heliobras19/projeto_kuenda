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

    <section class="section profile">
        <div class="row">
            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3">
                        <form>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Código do Cliente </label>
                                <div class="">
                                    <input name="password" readonly type="text" class="form-control"
                                        id="">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Nome do Cliente </label>
                                <div class="">
                                    <input name="password" type="text" class="form-control"
                                        id="">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Estado </label>
                                <div class="">
                                    <select name="" id="" class="form-select">
                                        <option value="">Selecione a entidade</option>
                                    </select>
                                   
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Cidade </label>
                                <div class="">
                                    <select name="" id="" class="form-select">
                                        <option value="">Selecione a entidade</option>
                                    </select>
                                   
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Cidade </label>
                                <div class="">
                                    <input name="password" type="text" class="form-control"
                                        id="">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Endereço </label>
                                <div class="">
                                    <input name="password" type="text" class="form-control"
                                        id="">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Cep </label>
                                <div class="">
                                    <input name="password" type="text" class="form-control"
                                        id="">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Telefone </label>
                                <div class="">
                                    <input name="password" type="text" class="form-control"
                                        id="">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Fax </label>
                                <div class="">
                                    <input name="password" type="text" class="form-control"
                                        id="">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">E-mail </label>
                                <div class="">
                                    <input name="password" type="text" class="form-control"
                                        id="">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Site </label>
                                <div class="">
                                    <input name="password" type="text" class="form-control"
                                        id="">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Logo do Cliente </label>
                                <div class="">
                                    <input name="password" type="file" class="form-control"
                                        id="">
                                </div>
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
