@extends('layouts.admin')
@section('title', 'Home')
@section('content')
    <div class="pagetitle">
        <h1>Afrodescendentes</h1>
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap my-4">
                        <div class="mb-3 flex-grow-1 me-3">
                           <input type="button" value="Deferir Pedidos Respondidos" class="form-control btn btn-primary">
                        </div>
                        <div class="mb-3 flex-grow-1 ">
                            <input type="button" value="Indeferir Pedidos não Respondidos" class="form-control btn btn-danger">
                        </div>
                </div>
                    <div class="my-4 d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-wrap">
                            <div class="me-2 flex-grow-1">
                                <input type="button" class="form-control" value="Copiar">
                            </div>
                            <div class="me-2 flex-grow-1">
                                <input type="button" class="form-control" value="CSV">
                            </div>
                            <div class="me-2 flex-grow-1">
                                <input type="button" class="form-control" value="Excel">
                            </div>
                            <div class="me-2 flex-grow-1">
                                <input type="button" class="form-control" value="PDF">
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
                                <th scope="col">Inscrição</th>
                                <th scope="col">S. Inscrição</th>
                                <th scope="col">Candidato</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">Situaçã vagao</th>
                                <th scope="col">Respondido</th>
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
