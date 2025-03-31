<x-app>
    @slot('body')
        <title>Concursos Públicos/Processos Seletivos</title>
        <style>
            .top-header {
                background: #2b2d34 url(//cdn.admtec.org.br//img/hero-bg-concurso.webp) center;
                background-size: cover;
                min-height: 200px;
                height: auto;
                border-radius: 0;
                width: 100%;
                max-height: 450px;
                color: #fff;
                font-family: 'Roboto' !important;
                margin-top: -100px;
                margin-bottom: 30px;
            }

            .title-head {
                font-family: 'Roboto', sans-serif;
                font-size: 4em;
                color: #fff;
                font-weight: 500;
                text-align: left;
                margin-top: 80px;
            }

            .qnt {
                font-family: 'Roboto', sans-serif !important;
                font-size: 1.5em !important;
                color: #404040;
                margin-left: 0px !important;
                margin-right: 10px !important;
                margin-top: 10px !important;
            }

        .concursos-text-info p {
            display: -webkit-box;
            -webkit-line-clamp: 6; /* Define o número máximo de linhas */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis; /* Adiciona os "..." no final */
            max-height: 200px; /* Ajuste conforme necessário */
        }


        .concursos-text-info {
            word-wrap: break-word; /* Quebra palavras longas */
        }
        </style>

        <div class="page-container" style="font-family: Roboto !important;">
            <div class="row breadcrumbs margin-bottom-40">
                <div class="container">
                    <div class="col-md-4 col-sm-4">
                        <ul class="pull-right breadcrumb" style="padding-right: 15px;">
                            <li class="active"></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row-fluid">
                <section class="top-header">
                    <div class="container">
                        <section class="head">
                            <div class="header-text">
                                <h1 class="title-head">Concursos e seleções</h1>
                            </div>
                        </section>
                    </div>
                </section>

                <div class="container" style="font-family: Roboto !important;">
                    <!-- BEGIN TAB CONTENT -->
                    <div class="tab-content">
                        <!-- START TAB 2 -->
                        <div id="tab_2" class="tab-pane active">
                            <div class="panel panel-info">

                                <div class="col-md-12">
                                    <h3 class="qnt">{{$total}} concurso com Inscrições Abertas</h3>
                                    <hr width="120px"> 
                                </div>

                                @foreach ($concursos as $item)
                                    <div class="concursos col-md-4">
                                    <div class="col-md-10">
                                        <div class="mark-icon">
                                            <img src="//cdn.admtec.org.br//img/bookmark-green.png" height="30px">
                                        </div>
                                        <div class="concursos-text">
                                            <div class="concursos-text-info">
                                                <h4>{{$item->cliente->nome}}</h4>
                                                <p>




                                                </p>
                                                <p style="text-align: center;">
                                                    {{$item->descricao}}
                                                </p>

                                                <p></p>
                                            </div>
                                            <div class="concursos-btn">
                                                <a href="{{route('concurso_info', ['id' => $item->id])}}">Saiba
                                                    mais</a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>  
                                @endforeach
                               

                            </div>
                        </div>
                        <!-- END TAB 2 -->
                    </div>
                </div>
            </div>
            <div vw="" class="enabled"
                style="left: initial; right: 0px; top: 50%; bottom: initial; transform: translateY(calc(-50% - 10px));">
                <div vw-access-button="" class="active"><img class="access-button" data-src="assets/access_icon.svg"
                        alt="Conteúdo acessível em Libras usando o VLibras Widget com opções dos Avatares Ícaro, Hosana ou Guga."
                        src="//vlibras.gov.br/app//assets/access_icon.svg">
                    <img class="pop-up" data-src="assets/access_popup.jpg"
                        alt="Conteúdo acessível em Libras usando o VLibras Widget com opções dos Avatares Ícaro, Hosana ou Guga."
                        src="//vlibras.gov.br/app//assets/access_popup.jpg">
                </div>
                <div vw-plugin-wrapper="">
                    <div vp="">
                        <div vp-box=""></div>
                        <div vp-message-box=""></div>
                        <div vp-settings=""></div>
                        <div vp-dictionary=""></div>
                        <div vp-settings-btn=""></div>
                        <div vp-info-screen=""></div>
                        <div vp-suggestion-screen=""></div>
                        <div vp-translator-screen=""></div>
                        <div vp-main-guide-screen=""></div>
                        <div vp-suggestion-button=""></div>
                        <div vp-rate-box=""></div>
                        <div vp-change-avatar=""></div>
                        <div vp-additional-options=""></div>
                        <div vp-controls=""></div>
                        <span vp-click-blocker=""></span>
                    </div>
                </div>
            </div>
        @endslot
</x-app>
