@extends('layouts.admin')
@section('title', 'Home')
@section('content')
    <div class="pagetitle">
        <h1>Candidatos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ '/home' }}">Candidatos</a></li>
                <li class="breadcrumb-item active">Listagem @if (session('status'))
                        {{ session('status') }}
                    @endif
                </li>
            </ol>
        </nav>
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
                        
                    

                    <!-- Table with hoverable rows -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">CPF</th>
                                <th scope="col">Candidato</th>
                                <th scope="col">Data de Nascimento</th>
                                <th scope="col">E-mail</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>		

                        <tbody>
                            <tr>
                                <th scope="row">038.513.454-10</th>
                                <td>ELIZABETE ORLANDO DE MEDEIROS</td>
                                <td>19/07/1982</td>
                                <td>bette.olinda@gmail.com</td>
                                <td><input type="button" value="D. Pessoais" name="" id="" class="form-control btn-danger"></td>
                                <td><input type="button" value="Inscrição" name="" id="" class="form-control btn-danger"></td>
                            </tr>
                            <tr>
                                <th scope="row">709.764.994-10</th>
                                <td>AYALA FARIAS PEIXOTO</td>
                                <td>12/01/1999</td>
                                <td>mandynhaalves24@gmail.com</td>
                                <td><input type="button" value="D. Pessoais" name="" id="" class="form-control btn-danger"></td>
                                <td><input type="button" value="Inscrição" name="" id="" class="form-control btn-danger"></td>
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
