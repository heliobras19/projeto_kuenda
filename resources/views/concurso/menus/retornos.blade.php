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
                        <input type="button" value="Deferir todas inscrições Ativas" name="" id="" class="form-control btn-danger">
                    </div>
                    <div class="my-4">
                        <input type="file" class="form-control">
                    </div>

                    <div class="my-4">
                        <input type="button" value="Deferir Pagamentos Após o Vencimento" name="" id="" class="form-control btn-danger">
                    </div>
                    <!-- Table with hoverable rows -->
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">Nome do Arquivo</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>	
                        <tbody>
                           
                        </tbody>
                    </table>
                    <!-- End Table with hoverable rows -->

                    <div class="my-4">
                        <input type="button" value="Relatório" name="" id="" class="form-control btn-primary">
                    </div>

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
