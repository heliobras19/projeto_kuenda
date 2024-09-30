@extends('layouts.admin')
@section('title', 'Home')
@section('content')
    <div class="pagetitle">
        <h1>Cadastro de Candidatos</h1>
        
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    
                        <div class="d-flex flex-wrap my-4">
                            <div class="me-2 flex-grow-1">
                                <input type="text" class="form-control">
                            </div>
                        <div class="me-2">
                                <input type="input" class="form-control btn btn-danger" value="Pesquisar">
                            
                        </div>

                        </div>

                        <div class="my-4">
                            <label for="">Total de Candidatos: 0</label>
                        </div>
                        
                    

                    <!-- Table with hoverable rows -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Inscrição</th>
                                <th scope="col">Candidato</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">CPF</th>
                                <th scope="col">Data</th>
                                <th scope="col">Homologado</th>
                                <th scope="col">D. Pessoais</th>
                                <th scope="col">Inscrição</th>
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
