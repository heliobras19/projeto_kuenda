@extends('layouts.admin')
@section('title', 'Editar Perfil')
@section('content')

    <div class="pagetitle">
        <h1>Concurso</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Novo Concurso</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3">
                        <form>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Código do Concurso </label>
                                <div class="">
                                    <input name="password" type="text" class="form-control"
                                        id="">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Entidade </label>
                                <div class="">
                                    <select name="" id="" class="form-select">
                                        <option value="">Selecione a entidade</option>
                                    </select>
                                   
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Município </label>
                                <div class="">
                                    <input name="password" type="text" class="form-control"
                                        id="">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Estado </label>
                                <div class="">
                                    <input name="password" type="text" class="form-control"
                                        id="">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Descrição </label>
                                <div class="">
                                   <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            

                            <div class="d-flex flex-wrap mb-3">
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="editNumber" class="form-label">Nº Edital</label>
                                    <input name="editNumber" type="text" class="form-control" id="editNumber">
                                    
                                </div>
                            
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="modality" class="form-label">Modalidade</label>
                                    <select name="editNumber" type="text" class="form-select" id="editNumber">
                                        <option value="">CONCURSO PÚBLICO</option>
                                    </select>
                                </div>
                            
                                <div class="mb-3 me-3 flex-grow-1">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" type="text" class="form-select" id="status">
                                        <option value="">VISÍVEL</option>
                                    </select>
                                </div>
                            
                                <div class="mb-3 flex-grow-1">
                                    <label for="situation" class="form-label">Situação</label>
                                    <select name="situation" type="text" class="form-select" id="situation">
                                        <option value="">ABERTO</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Descrição inicial </label>
                                <div class="">
                                   <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Descrição publicações </label>
                                <div class="">
                                   <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div>
                                <h2>Inscrições</h2>
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Tipo de Inscrição </label>
                                <select name="situation" type="text" class="form-select" id="situation">
                                    <option value="">INTERNET</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Código do Certame</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Data de Início</label>
                                <input type="date" name="" id="" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Hora de Início</label>
                                <input type="time" name="" id="" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Data Final</label>
                                <input type="date" name="" id="" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Hora Final</label>
                                <input type="time" name="" id="" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Data de Pror.</label>
                                <input type="date" name="" id="" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Hora de Pror.</label>
                                <input type="time" name="" id="" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Número de Inscrições </label>
                                <select name="situation" type="text" class="form-select" id="situation">
                                    <option value="">Livre</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Número de Inscrições por turno </label>
                                <select name="situation" type="text" class="form-select" id="situation">
                                    <option value="">Livre</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Data Limite do Estatuto do Idoso</label>
                                <input type="date" name="" id="" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Vagas p/ Negros e Pardos </label>
                                <select name="situation" type="text" class="form-select" id="situation">
                                    <option value="">NÃO</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Informar Nº de Dependentes </label>
                                <select name="situation" type="text" class="form-select" id="situation">
                                    <option value="">NÃO</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Quant. Tip Prova </label>
                                <select name="situation" type="text" class="form-select" id="situation">
                                    <option value="">1</option>
                                </select>
                            </div>

                            <div>
                                <h2>Isenção Inscrições</h2>
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Data Final de Isenção</label>
                                <input type="date" name="" id="" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Hora Final de Isenção</label>
                                <input type="time" name="" id="" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Número de Isenções </label>
                                <select name="situation" type="text" class="form-select" id="situation">
                                    <option value="">1</option>
                                </select>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                                <button type="submit" class="btn btn-primary">Cancelar</button>
                            </div>
                        </form><!-- End Change Password Form -->

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
