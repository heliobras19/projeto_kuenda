@extends('layouts.admin')
@section('title', 'Home')
@section('content')
    <div class="pagetitle">
        <h1>Financeiro</h1>
        
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="my-4 d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-wrap">
                           
                            <div class="me-2 flex-grow-1">
                                <imput type="text" class="form-control btn btn-danger" value="10" />
                            </div>

                        </div>
                        <div class="me-2">
                            <div class="d-flex align-items-center justify-center">
                                <label for="" class="form-label"></label>
                                <input type="search" class="form-control" placeholder="Search">
                            </div>
                        </div>
                    </div>

                    <!-- Table with hoverable rows -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">CPF(Login)</th>
                                <th scope="col">Usuário</th>
                                <th scope="col">Situação</th>
                                <th scope="col">E-mail</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>	
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>014.987.860-57</td>
                                <td>magno holz</td>
                                <td>ATIVO</td>
                                <td>magno@mhinformatica.inf.br</td>
                                <td><input type="button" value="Visualizar" name="" id="" class="form-control btn-danger"></td>
                            </tr>
                            
                            
                        </tbody>
                    </table>
                    <!-- End Table with hoverable rows -->

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
