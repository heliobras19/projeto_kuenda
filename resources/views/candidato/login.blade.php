@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-bg-danger">Bem-vindo Candidato</div>

                    <div class="card-body">
                        <form id="login-candidato" method="POST" action="{{ route('candidato.login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="cpf" class="col-md-4 col-form-label text-md-end">CPF:</label>

                                <div class="col-md-6">
                                    <input id="cpf" type="text"
                                        class="form-control @error('cpf') is-invalid @enderror" name="cpf"
                                        value="{{ old('cpf') }}" required autocomplete="cpf" autofocus>

                                    @error('cpf')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-danger">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('scripts')
    <script>
        $(document).ready(function() {
            $("#cpf").mask("999.999.999-99");


            $("#login-candidato").on("submit", function(event) {
                const verif = validarCPF($("#cpf").val());

                if (verif) {
                    return true;
                } else {
                    event.preventDefault();
                    alert('invalido');
                    return false;
                }
            });
        });
    </script>
@endsection

@endsection
