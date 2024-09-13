<x-app>
    @slot('body')



        <style>
            .top-header {
                background: #2b2d34 url('{{ asset('images/hero-bg-sobre.webp') }}') center;
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

            h2 {
                color: #444 !important;
                font-size: 21px !important;
                font-weight: 400 !important;
                line-height: 26px !important;
                text-decoration: none !important;
            }

            .title-head {
                color: #fff;
                font-family: 'Roboto', sans-serif;
                font-size: 4em !important;
                margin-left: 20px;
                font-weight: 500;
                margin-top: 80px;
            }

            .title-act {
                color: #fff;
                text-transform: capitalize;
                font-family: 'Roboto', sans-serif;
                font-size: 4em !important;
                margin-left: 0px;
                font-weight: 500;

            }

            hr {
                margin-top: 30px;
                margin-bottom: 30px;
            }

            .bio {
                font-family: 'Roboto', sans-serif;
                margin-top: 20px;
                margin-bottom: 60px;
            }

            .bio-content p {
                margin-bottom: 60px;
            }

            .endereco {
                font-family: 'Roboto', sans-serif;
                font-weight: 300;
                text-align: center;
            }

            .endereco h2 {
                text-transform: capitalize;
            }

            .endereco p {
                font-size: 1.2em;
            }

            .endereco a {
                color: #990000;
                font-size: 1.2em;
            }

            .nav-tabs {
                margin-top: 20px;
            }

            @media (min-width: 320px) and (max-width: 410px) {
                .top-header {
                    min-height: 10rem !important;
                }

                .title-act {
                    font-size: 2.5em !important;
                }

                hr {
                    margin-top: 10px;
                    margin-bottom: 10px;
                }
            }

            @media (min-width: 410px) and (max-width: 620px) {
                .top-header {
                    min-height: 10rem !important;
                }

                .title-head {
                    text-align: left !important;
                    margin-top: 60px !important;
                    margin-bottom: 20px !important;
                }
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
                                <h1 class="title-head">O instituto</h1>
                            </div>
                        </section>
                    </div>
                </section>
                <div class="container min-hight margin-bottom-40" style="font-family: Roboto !important;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row-fluid">
                                <div class="col-md-12">

                                    <div class="bio">
                                        <p>O Instituto de Administração e Tecnologia - ADM&amp;TEC, constituído em 1991, é
                                            uma sociedade civil sem fins lucrativos, fundada por professores da Faculdade de
                                            Administração e Direito de Pernambuco - FCAP, uma das unidades da Universidade
                                            de Pernambuco - UPE. Sua imagem técnico profissional está intimamente ligada e
                                            comprometida com ações de gestão pública bem como outras voltadas para o
                                            desenvolvimento econômico e empresarial do país.</p>
                                        <p>Os seus associados, consultores e técnicos desenvolvem pesquisas e estudos e
                                            implantam soluções de natureza técnica e organizacional para entidades públicas
                                            e empresariais em vários setores das áreas da <b>administração</b>,
                                            <b>qualidade</b>, <b>tecnologia de informações</b>, <b>marketing</b>,
                                            <b>turismo</b> e <b>capacitação profissional</b>.
                                        </p>
                                        <p>O ADM&amp;TEC conta em seu acervo profissional, com técnicos e professores
                                            especialistas, bem como modernas instalações e equipamentos auxiliares de
                                            gestão, tendo acumulado uma significativa experiência na elaboração de
                                            diagnósticos e implementação de soluções para diversas empresas privadas e
                                            estatais, prefeituras, secretarias de Estado, órgãos federais e organismos
                                            internacionais. O sucesso da instituição pode ser avaliado tanto pelo
                                            reconhecimento da qualidade dos serviços prestados aos seus clientes quanto pela
                                            atual demanda de serviços solicitados.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row-fluid">
                                <!-- TABS -->
                                <div class="col-md-12">
                                    <div class="bio-content">
                                        <div class="mark-icon">
                                            <img src="{{ asset('images/missao.png') }}" height="60px">
                                        </div>
                                        <h2 class="title-act">Missão</h2>
                                        <hr width="110">
                                        <p>Prestar apoio e suporte técnico ao desenvolvimento institucional, sendo agente de
                                            mudanças e melhorias na gestão das organizações, em âmbito nacional.</p>
                                    </div>

                                    <div class="bio-content">
                                        <div class="mark-icon">
                                            <img src="{{ asset('images/valores.png') }}" height="60px">
                                        </div>
                                        <h2 class="title-act">Valores</h2>
                                        <hr width="110">
                                        <p>Qualidade profissional. Ética. Probidade. Compromisso. Transparência.
                                            Competitividade. Inovação.</p>
                                    </div>

                                    <div class="bio-content">
                                        <div class="mark-icon">
                                            <img src="{{ asset('images/qualidade.png') }}" height="60px">
                                        </div>
                                        <h2 class="title-act">Áreas de Atuação</h2>
                                        <hr width="110">
                                        <p>O ADM&amp;TEC atua com foco na elaboração de concursos públicos e seleções
                                            públicas simplificadas, além de capacitação e serviços de desenvolvimento
                                            institucional. Com gestão e equipe especializada, o Instituto tem a sua imagem
                                            profissional associada ao desenvolvimento socioeconômico do país, atuando em
                                            áreas como educação, administração geral, administração pública, informática,
                                            gestão da qualidade, marketing e desenvolvimento local sustentável.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END TABS -->
                        </div>
                    </div>
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
