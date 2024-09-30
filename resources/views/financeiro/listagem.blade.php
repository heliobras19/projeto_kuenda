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
                    <h5 class="card-title">Gestão dos Boletos Gerados através da plataforma do ASAAS</h5>

                    <div class="my-4 d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-wrap">
                           
                            <div class="me-2 flex-grow-1">
                                <div class="d-flex align-items-baseline">
                                    <label class="me-2" for="">Mostrar </label>
                                    <select class="form-select me-2" aria-label="Mostrar registros">
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                    </select>
                                    <label for="">registos </label>
                                </div>
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
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Data da Geração</th>
                                <th scope="col">Data de Vencimento</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Data do Pagamento</th>
                                <th scope="col">Situação</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>	
                        


 
 
                        <tbody>
                            <tr>
                                <td>07/07/2024</td>
                                <td>15/08/2024</td>
                                <td>500,00</td>
                                <td>01/09/2024</td>
                                <td>Recebida</td>
                                <td><input type="button" value="Boleto" name="" id="" class="form-control btn-danger"></td>
                                <td><input type="button" value="Recibo" name="" id="" class="form-control btn-danger"></td>
                            </tr>
                            <tr>
                                <td>07/07/2024</td>
                                <td>15/08/2024</td>
                                <td>500,00</td>
                                <td>01/09/2024</td>
                                <td>Recebida</td>
                                <td><input type="button" value="Boleto" name="" id="" class="form-control btn-danger"></td>
                                <td><input type="button" value="Recibo" name="" id="" class="form-control btn-danger"></td>
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
