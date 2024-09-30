@extends('layouts.admin')
@section('title', 'Home')
@section('content')
    <div class="pagetitle">
        <h1>Cadastro de Recursos</h1>
        
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="my-4">
                        <input type="button" value="Cadastrar Novo Recurso" name="" id="" class="form-control btn-danger">
                    </div>
                    <div class="my-4">
                        <input type="search" class="form-control">
                    </div>
                    <!-- Table with hoverable rows -->
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Tipo de Recurso</th>
                                <th scope="col">Data Inicial</th>
                                <th scope="col">Data Final</th>
                                <th scope="col">Somente dias Úteis</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>	
                        <tbody>
                           
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
