@extends('layouts.admin')
@section('title', 'Editar Perfil')
@section('content')

    <div class="pagetitle">
        <h1>Banca</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ '/home' }}">Banca</a></li>
                <li class="breadcrumb-item active">Nova @if (session('status'))
                        {{ session('status') }}
                    @endif
                </li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3">
                        <form>

                            <div class="d-flex flex-wrap">

                                <div class="mb-3 flex-grow-1 me-3">
                                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">CPF </label>
                                    <div class="">
                                        <input name="password" type="text" class="form-control"
                                            id="">
                                    </div>
                                </div>
    
                                <div class="mb-3 flex-grow-1">
                                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Situação </label>
                                    <div class="">
                                        <select name="" id="" class="form-select">
                                            <option value="">Selecione a situação</option>
                                        </select>
                                       
                                    </div>
                                </div>

                            </div>
                            

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Nome Completo </label>
                                <div class="">
                                    <input name="password" type="text" class="form-control"
                                        id="">
                                </div>
                            </div>

                            <div class="d-flex flex-wrap ">
                                    <div class="mb-3 flex-grow-1 me-3">
                                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Telefone </label>
                                        <div class="">
                                            <input name="password" type="text" class="form-control"
                                                id="">
                                        </div>
                                    </div>
                                    <div class="mb-3 flex-grow-1 ">
                                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">E-mail </label>
                                        <div class="">
                                            <input name="password" type="text" class="form-control"
                                                id="">
                                        </div>
                                    </div>
                            </div>
                            

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Informe a Senha:</label>
                                <div class="">
                                    <input name="password" type="text" class="form-control"
                                        id="">
                                </div>
                            </div>

                            

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                                <button type="submit" class="btn btn-secondary">Cancelar</button>
                            </div>
                        </form><!-- End Change Password Form -->

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
