<div id="main-nav-sticky-wrapper" class="sticky-wrapper is-sticky" style="height: 73px;">
    <nav class="navbar navbar-default" id="main-nav" style="width: 100%; position: fixed; top: 0px; z-index: 1000;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-morki">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ url('/') }}"><img
                                src="{{ asset('images/logo-nav.png')}}"></a>
                    </div>


                    <div class="collapse navbar-collapse navbar-morki">
                        <ul class="nav navbar-nav navbar-left" id="nav-menu">
                            <li><a href="{{ url('concursos') }}" data-scroll="">Concursos</a></li>
                            <li><a href="{{ url('formacao') }}">Formação</a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=5581997690218"><i class="fa fa-phone-alt"
                                        style="font-size: 19px;"></i><span>(81)
                                        99769-0218</span></a></li>
                            <li class="mailme"><a href="mailto:concursos@admtec.org.br"><i
                                        class="fa fa-envelope social-footer"></i>
                                    <span>concursos@admtec.org.br</span></a></li>


                                    {{-- onclick="onClick();javascript:setFocusField('login-form-cpf')" --}}
                            <li class="dropdown notifications-menu">
                                <a href="{{ route('candidato') }}" id="icone_login" 
                                    class="btn c-theme-btn c-btn-square c-btn-uppercase btn-danger"
                                     style="color:#FFF">
                                    Área do Candidato <i class="fa fa-user-circle" style="font-size: 19px;"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

{{-- <div id="div_cadastro"></div>
<div class="modal fade c-content-login-form" id="login-div" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-body">
                <div class="modal-header c-no-border">
                    
                    <h3 class="c-font-24 c-font-sbold">Seja bem-vindo!</h3>
                    <p>Por favor, informe o seu CPF e a sua senha para acessar a área do candidato</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        style="
    position: absolute;
    right: 15px;
    top: 15px;
"><span
                            aria-hidden="true">×</span></button>
                </div>
                <form action="{{ route('teste') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input name="cpf_candidato" class="form-control" id="cpf_candidato_login_header" size="15"
                            placeholder="CPF" type="text" value="{{ old('cpf_candidato') }}">
                        @error('cpf_candidato')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <script type="text/javascript">
                            $("#cpf_candidato_login_header").mask("999.999.999-99");
                        </script>
                    </div>
                    <div class="form-group">
                        <div id="aviso_caps_lock" style="visibility: hidden; color: #000;">CAPS LOCK ATIVADO</div>
                        <input class="form-control" placeholder="Senha" name="senha" type="password"
                            value="" onkeypress="checar_caps_lock(event)">
                        @error('senha')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <input class="btn btn-lg btn-primary btn-block" type="submit">
                    <div class="form-group" style="text-align: right">
                        <a href="{{ url('/login/esqueci_senha/') }}" class="c-btn-forgot" id="forget-password-a">Esqueceu sua senha?</a>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div> --}}
