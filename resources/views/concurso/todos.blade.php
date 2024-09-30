@extends('layouts.admin')
@section('title', 'Home')
@section('content')
    <div class="pagetitle">
        <h1>Concursos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ '/home' }}">Concursos</a></li>
                <li class="breadcrumb-item active">Todos @if (session('status'))
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
                    <div class="my-4">
                        <input type="search" class="form-control">
                    </div>

                    <!-- Table with hoverable rows -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Status</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Modalidade</th>
                                <th scope="col">Edital</th>
                                <th scope="col">Inscrição</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>	
                        <tbody>
                        @foreach ($concursos as $item)
                            <tr>
                                <th>{{$item->id}}</th>
                                <td>{{$item->status}}</td>
                                <td>{{$item->cliente->nome}}</td>
                                <td>{{$item->modalidade}}</td>
                                <td>{{$item->edital_numero}}</td>
                                <td>{{$item->data_inicio}} - {{$item->data_fim}}</td>
                                <td><input type="button" value="Visualizar" name="" id="" class="form-control btn btn-danger"></td>
                            
                            </tr>
                        @endforeach 
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
