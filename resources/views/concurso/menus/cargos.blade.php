@extends('layouts.admin')
@section('title', 'Home')
@section('content')
<script src="https://unpkg.com/imask"></script>
    <div class="pagetitle">
        <h1>Cargos</h1>
        
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">
            <div class="mb-3">
                <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ route('concurso.consultar',['id' => $id]) }}">Concurso</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('concurso.avaliacao',['id' => $id]) }}">Locais, Data de Avaliação</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('concurso.publicacao',['id' => $id]) }}">Publicações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('concurso.boletos',['id' => $id]) }}">Boletos</a>                              
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('concurso.cargos',['id' => $id]) }}">Cargos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('concurso.recursos',['id' => $id]) }}">Cadastro de Recursos</a>                              
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('concurso.retornos',['id' => $id]) }}">Retornos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('concurso.inscricao',['id' => $id]) }}">Inscrição/D. Pessoais</a>                              
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('concurso.correcao',['id' => $id]) }}">Correção</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('concurso.recursos',['id' => $id]) }}">Recursos</a>                              
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('concurso.consultar',['id' => $id]) }}">Perguntas adicionais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('concurso.afrodescendencia',['id' => $id]) }}">Afrodescendente</a>                              
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('concurso.pcd',['id' => $id]) }}">PCD</a>                              
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('concurso.necessidade_prova',['id' => $id]) }}">Necessidade Prova</a>                              
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('concurso.indigenas',['id' => $id]) }}">Indígena</a>                              
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('concurso.cota_adicional',['id' => $id]) }}">Cota adicional</a>                              
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('concurso.pedidos_isencao',['id' => $id]) }}">Pedidos de isenção</a>                              
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('concurso.consultar',['id' => $id]) }}">Relatórios</a>                              
                </li>
              </ul>
            </div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>{{ __('Lista de Cargos') }}</span>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cargoModal">
                        Adicionar Cargo
                    </button>
                </div>

                     <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Cargo</th>
                                 <th>Valor inscrição</th>
                                <th>Salario inicial</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cargos as $cargo)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $cargo->cargo }}</td>
                                    <td>{{ 'R$ ' . number_format($cargo->valor_inscricao, 2, ',', '.') }}</td>
                                    <td>{{ 'R$ ' . number_format($cargo->salario_inicial, 2, ',', '.') }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-warning">Editar</button>
                                        <button class="btn btn-sm btn-danger">Excluir</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

               <div class="modal fade" id="cargoModal" tabindex="-1" aria-labelledby="cargoModalLabel" aria-hidden="true">
                <div class="modal-dialog">
     <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="cargoModalLabel">Cadastrar Novo Cargo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{ route('cargo_inscricao.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="codigo" class="form-label">Cargo <span style="color: orangered">*</span></label>
                <input type="text" name="cargo" id="cargo" class="form-control">
            </div>
            <input type="hidden" value="{{$id}}" name="concurso_id" />
            <div class="mb-3">
                <label for="escolaridade" class="form-label">Escolaridade  <span style="color: orangered">*</span></label>
                <select name="escolaridade" id="escolaridade" class="form-control" required>
                    <option value="">Aguardando o Nível de Escolaridade...</option>
                    <option value="ENSINO FUNDAMENTAL INCOMPLETO">ENSINO FUNDAMENTAL INCOMPLETO</option>
                    <option value="ENSINO FUNDAMENTAL">ENSINO FUNDAMENTAL</option>
                    <option value="ENSINO MÉDIO">ENSINO MÉDIO</option>
                    <option value="ENSINO MÉDIO/TÉCNICO">ENSINO MÉDIO/TÉCNICO</option>
                    <option value="ENSINO SUPERIOR">ENSINO SUPERIOR</option>
                </select>
            </div>

          <div class="row mb-3">
                <div class="col-md-6">
                    <label for="vagas" class="form-label">Quantidade de vagas  <span style="color: orangered">*</span></label>
                    <input type="number" name="vagas" id="vagas" class="form-control" value="0">
                </div>
                <div class="col-md-6">
                    <label for="limite_inscritos" class="form-label">Limite de inscrições</label>
                    <input type="number" name="limite_inscritos" id="limite_inscritos" class="form-control" value="0">
                </div>
        </div>

            <div class="mb-3">
                <label for="valor_inscricao" class="form-label">Valor inscrição (R$) <span style="color: orangered">*</span></label>
                <input type="text" name="valor_inscricao" id="valor_inscricao" class="form-control">
            </div>

            <div class="mb-3">
                <label for="salario_inicial" class="form-label">Salario inicial (R$)</label>
                <input type="text" name="salario_inicial" id="salario_inicial" class="form-control">
            </div>

            <div class="mb-3">
                <label for="prova_pdf" class="form-label">Anexo prova (2MB)</label>
                <input type="file" name="prova_pdf" id="prova_pdf" class="form-control">
            </div>        

            <div class="mb-3">
                <label class="form-label">Horario da prova</label>
                    <select name="turno_avaliacaos_id" class="form-control">
                    <option>Escolha o horario da prova</option>
                    @foreach ($horarios as $item)
                        <option value="{{$item->id}}">{{$item->data}} as {{$item->hora_prova}}</option>
                    @endforeach
                    </select>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</div>

                </div>

        </div>
    </section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Configuração da máscara
        var maskOptions = {
            mask: 'R$ num',
            blocks: {
                num: {
                    mask: Number,
                    thousandsSeparator: '.',
                    radix: ',',
                    mapToRadix: ['.'],
                    scale: 2,
                    signed: false,
                    normalizeZeros: true,
                    padFractionalZeros: true
                }
            }
        };

        // Aplica a máscara aos campos específicos
        var salarioInicial = document.getElementById('salario_inicial');
        var valorInscricao = document.getElementById('valor_inscricao');

        IMask(salarioInicial, maskOptions);
        IMask(valorInscricao, maskOptions);
    });
</script>
@endsection
