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
                        <form>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Código do Concurso </label>
                                <div class="">
                                    <input name="password" type="text" class="form-control"
                                        id="">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Entidade </label>
                                <div class="">
                                    <input name="password" type="text" class="form-control"
                                        id="">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Município </label>
                                <div class="">
                                    <input name="password" type="text" class="form-control"
                                        id="">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Estado </label>
                                <div class="">
                                    <input name="password" type="text" class="form-control"
                                        id="">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Descrição </label>
                                <div class="">
                                   <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class=" d-flex row mb-3">
                                <div class="mb-3">
                                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Nº Edital </label>
                                    <div class="">
                                        <input name="password" type="text" class="form-control"
                                            id="">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Modalidade </label>
                                    <div class="">
                                        <input name="password" type="text" class="form-control"
                                            id="">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Status </label>
                                    <div class="">
                                        <input name="password" type="text" class="form-control"
                                            id="">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Situação </label>
                                    <div class="">
                                        <input name="password" type="text" class="form-control"
                                            id="">
                                    </div>
                                </div>

                            </divc>
                            
                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Descrição inicial </label>
                                <div class="">
                                   <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Descrição publicações </label>
                                <div class="">
                                   <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Change Password</button>
                            </div>
                        </form><!-- End Change Password Form -->

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
