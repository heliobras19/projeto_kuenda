   <x-app>
       @slot('body')
           <style>
               .top-header {
                   background: #2b2d34 url('{{ asset('images/hero-bg-formacao.webp') }}') center;
                   background-size: cover;
                   min-height: 100px;
                   height: auto;
                   border-radius: 0;
                   width: 100%;
                   max-height: 450px;
                   color: #fff;
                   font-family: 'Roboto' !important;
                   margin-top: -100px;
               }

               .title-head {
                   font-size: 4em;
                   font-family: 'Roboto', sans-serif;
                   font-weight: 500;
                   color: #fff;
                   text-align: left;
                   margin-top: 150px;
                   margin-bottom: 30px;

               }

               .desc-head {
                   color: #fff;
                   font-size: 1.2em;
                   font-weight: 300;
                   margin-bottom: 2em;
                   max-width: 500px;
               }

               .minor {
                   font-family: 'Roboto', sans-serif;
                   margin-top: 50px;
                   font-weight: 500;
                   font-size: 1.3em !important;
                   text-align: left;
               }

               .rows {
                   margin-top: 30px;
                   margin-left: -15px;
                   min-height: 400px;
               }

               .text-center {
                   font-family: 'Roboto', sans-serif;
                   font-weight: 600;
                   margin-top: 20px;
               }

               .action-box {
                   background: #fff;
                   min-height: 150px;
                   border-radius: 15px !important;
               }

               .icon {
                   text-align: center;
                   padding-top: 30px;
                   color: #990000;
               }

               .row-1 {
                   text-align: center;
               }

               .row-3 {
                   margin-bottom: 80px;
               }

               .call-out {
                   font-family: 'Roboto', sans-serif;
                   font-weight: 600;
                   font-size: 1.2em !important;
                   text-align: center !important;
                   color: #990000;
                   margin-bottom: 30px;
                   margin-top: 30px;
               }

               .major {
                   font-weight: 500;
                   font-size: 1.5em !important;
                   margin-top: 40px;
                   margin-bottom: 80px;
                   text-align: left;
               }

               .page-container .container {
                   padding-left: 10px !important;
               }

               @media (min-width: 320px) and (max-width: 410px) {
                   .top-header {
                       min-height: 10rem !important;
                   }

                   .title-head {
                       text-align: left !important;
                       margin-top: 60px !important;
                       margin-bottom: 20px !important;

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
                                   <h1 class="title-head">Formação</h1>
                                   <p class="desc-head">Os programas de capacitação do ADM&amp;TEC abrangem cursos com
                                       conteúdos e temas personalizados, nos quais os conhecimentos, os conteúdos e as
                                       habilidades são aplicados através de tecnologias educacionais e modelos integrativos,
                                       a
                                       fim de desenvolver o lado profissional e humano do colaborador.</p>
                               </div>
                           </section>
                       </div>
                   </section>

                   <section class="actions">
                       <div class="container">
                           <p class="minor">O ADM&amp;TEC, no seu eixo de Formação Profissional, disponibiliza várias
                               ações,
                               destacando o Programa de Desenvolvimento do Capital Humano na Gestão Municipal, identificado
                               por
                               áreas significativas: <b>Educação</b>, <b>Segurança Pública</b>, <b>Assistência Social</b> e
                               <b>Saúde</b>.
                           </p>
                           <div class="rows">
                               <div class="row row-1">
                                   <h3 class="call-out">Cursos específicos à Gestão da Educação Pública Municipal:</h3>
                                   <div class="column">
                                       <div class="col-md-4 col-sm-6">
                                           <div class="action-box">

                                               <div class="icon">
                                                   <img src="{{ asset('images/gestao.png') }}" height="30px">
                                               </div>
                                               <div class="text-center">
                                                   <p>Gestores</p>
                                               </div>

                                           </div>
                                       </div>
                                   </div>
                                   <div class="column">
                                       <div class="col-md-4 col-sm-6">
                                           <div class="action-box">
                                               <div class="icon">
                                                   <img src="{{ asset('images/gestao.png') }}" height="30px">
                                               </div>
                                               <div class="text-center">
                                                   <p>Educadores</p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="column">
                                       <div class="col-md-4 col-sm-6">
                                           <div class="action-box">
                                               <div class="icon">
                                                   <img src="{{ asset('images/gestao.png') }}" height="30px">
                                               </div>
                                               <div class="text-center">
                                                   <p>Gestão Educacional</p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="row row-2">
                                   <h3 class="call-out">Cursos para profissionais da Segurança Pública Municipal, que atende
                                       as orientações da Secretaria Nacional de Segurança Pública:</h3>
                                   <div class="column">
                                       <div class="col-md-4 col-sm-6">
                                           <div class="action-box">
                                               <div class="icon">
                                                   <img src="{{ asset('images/aperfeicoamento.png') }}" height="30px">
                                               </div>
                                               <div class="text-center">
                                                   <p>Aperfeiçoamento de Guardas<br>Municipais</p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="column">
                                       <div class="col-md-4 col-sm-6">
                                           <div class="action-box">
                                               <div class="icon">
                                                   <img src="{{ asset('images/aperfeicoamento.png') }}" height="30px">
                                               </div>
                                               <div class="text-center">
                                                   <p>Gestão de Agentes Municipais em<br>Segurança</p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="column">
                                       <div class="col-md-4 col-sm-6">
                                           <div class="action-box">
                                               <div class="icon">
                                                   <img src="{{ asset('images/aperfeicoamento.png') }}" height="30px">
                                               </div>
                                               <div class="text-center">
                                                   <p>Formação Profissional de<br>Guardas Municipais</p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="row row-3">
                                   <h3 class="call-out"> Cursos de formação inicial, específicos para Agentes dos Serviços
                                       Públicos de Saúde:</h3>
                                   <div class="column">
                                       <div class="col-md-4 col-sm-6">
                                           <div class="action-box">
                                               <div class="icon">
                                                   <img src="{{ asset('images/agentes.png') }}" height="30px">
                                               </div>
                                               <div class="text-center">
                                                   <p>Formação de Gestores das Políticas<br>de Assistência Social Municipal
                                                   </p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="column">
                                       <div class="col-md-4 col-sm-6">
                                           <div class="action-box">
                                               <div class="icon">
                                                   <img src="{{ asset('images/agentes.png') }}" height="30px">
                                               </div>
                                               <div class="text-center">
                                                   <p>Agentes Comunitários de Saúde (ACS)</p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>

                                   <div class="column">
                                       <div class="col-md-4 col-sm-6">
                                           <div class="action-box">
                                               <div class="icon">
                                                   <img src="{{ asset('images/agentes.png') }}" height="30px">
                                               </div>
                                               <div class="text-center">
                                                   <p>Agentes de Combate às Endemias (ACE)</p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>


                               </div>
                           </div>
                       </div>
                   </section>


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
