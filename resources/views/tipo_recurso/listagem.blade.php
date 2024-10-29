@extends('layouts.admin')
@section('title', 'Home')
@section('content')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <div class="pagetitle">
        <h1>Tipo de Recursos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ '/home' }}">Tipo de Recursos</a></li>
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
                            <div class="me-2 flex-grow-1">
                                <a type="button"  class="form-control btn btn-danger" data-toggle="modal" data-target="#myModal">Cadastrar Novo</a>
                            </div>

                        </div>
                        <div class="me-2">
                            <div class="d-flex align-items-center justify-center">
                                <label for="" class="form-label"></label>
                                <input type="search" class="form-control" placeholder="Search">
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Tipo de Recurso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('tipo_recurso.store')}}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="input1">Código:</label>
                    <input type="text" class="form-control" id="input1" readonly>
                </div>
                <div class="form-group">
                    <label for="input2">Tipo de Recurso</label>
                    <input name="tipo_recurso" type="text" class="form-control" id="input2">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <input type="submit" class="btn btn-primary">Salvar</button> 
            </div>
            </form>
        </div>
    </div>
</div>
                    <!-- Table with hoverable rows -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Candidato</th>
                                <th scope="col">Acompanhar</th>
                                
                            </tr>
                        </thead>		
                        
                        <tbody>
                            @foreach ($tipo as $key => $item)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$item->tipo_recurso}}</td>
                                    <td><input type="button" value="Visualizar" name="" id="" class="form-control btn-danger" data-toggle="modal" data-target="#myModal"></td>
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
