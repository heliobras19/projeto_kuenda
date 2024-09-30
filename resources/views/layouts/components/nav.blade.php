<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{Route::is('candidato.home') == 1 ? '' : 'collapsed' }}" href="{{ route('candidato.home') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard
                </span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('cliente') }}">
              <i class="bi bi-person"></i>
              <span>Clientes</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{Route::is('candidato.anexo.documento') == 1 ? '' : 'collapsed' }}" data-bs-target="#anexos-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-card-list"></i><span>Concurso/Seletivo</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="anexos-nav" class="nav-content  {{Route::is('candidato.anexo.documento') ? '' : 'collapsed collapse' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a class="{{Route::is('candidato.anexo.documento') == 1 ? 'active' : '' }}" href="{{ route('concurso.novo') }}">
                        <i class="bi bi-circle"></i><span>Novo </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('concurso.todos') }}">
                        <i class="bi bi-circle"></i><span>Todos</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('concurso.andamento') }}">
                        <i class="bi bi-circle"></i><span>Em Andamento</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('concurso.encerrados') }}">
                        <i class="bi bi-circle"></i><span>Encerrados</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('candidato') }}">
              <i class="bi bi-people"></i>
              <span>Candidatos</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{Route::is('usuario') == 1 ? '' : 'collapsed' }}" data-bs-target="#usuarios-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person-badge"></i><span>Usuários</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="usuarios-nav" class="nav-content  {{Route::is('usuario') ? '' : 'collapsed collapse' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a class="{{Route::is('usuario') == 1 ? 'active' : '' }}" href="{{ route('usuario.novo') }}">
                        <i class="bi bi-circle"></i><span>Novo </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('usuario') }}">
                        <i class="bi bi-circle"></i><span>Listar</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('banca') }}">
              <i class="bi bi-file-earmark-check"></i>
              <span>Banca</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{Route::is('boleto') == 1 ? '' : 'collapsed' }}" data-bs-target="#boletos-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-card-list"></i><span>Boleto</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="boletos-nav" class="nav-content  {{Route::is('boleto') ? '' : 'collapsed collapse' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a class="{{Route::is('boleto') == 1 ? 'active' : '' }}" href="{{ route('boleto.novo') }}">
                        <i class="bi bi-circle"></i><span>Cadastrar</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('boleto.retornos') }}">
                        <i class="bi bi-circle"></i><span>Retornos</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('boleto.localizar') }}">
                        <i class="bi bi-circle"></i><span>Localizar</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('financeiro') }}">
              <i class="bi bi-cash-stack"></i>
              <span>Financeiro</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('tipo_recurso') }}">
              <i class="bi bi-file-earmark-check"></i>
              <span>Tipo de Recurso</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('tipo_titulo') }}">
              <i class="bi bi-file-earmark-check"></i>
              <span>Tipo de Título</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
              <i class="bi bi-gear"></i>
              <span>Configuração</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
              <i class="bi bi-file-earmark-check"></i>
              <span>Aviso Inicial</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
              <i class="bi bi-file-earmark-check"></i>
              <span>Manual</span>
            </a>
          </li>

        {{-- <li class="nav-item">
            <a class="nav-link {{Route::is('candidato.anexo.documento') == 1 ? '' : 'collapsed' }}" data-bs-target="#anexos-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-card-list"></i><span>Anexos</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="anexos-nav" class="nav-content  {{Route::is('candidato.anexo.documento') ? '' : 'collapsed collapse' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a class="{{Route::is('candidato.anexo.documento') == 1 ? 'active' : '' }}" href="{{ route('candidato.anexo.documento') }}">
                        <i class="bi bi-circle"></i><span>Anexos de Documentos {{Route::is('candidato.anexo.documento')}}</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Anexos de Títulos</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Anexos de Documentos de Isenção</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Comprovante de Inscrição</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#cartoes-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-card-list"></i><span>Cartões</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="cartoes-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Cartão de Confirmação de Inscrição</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Cartões Resposta</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Cartões Resposta Prova Subjetiva</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
              <i class="bi bi-file-earmark-check"></i>
              <span>Meus Concursos</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{Route::is('candidato.edit') == 1 ? '' : 'collapsed' }}" href="{{ route('candidato.edit') }}">
              <i class="bi bi-person"></i>
              <span>Dados Pessoais</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
              <i class="bi bi-folder-check"></i>
              <span>Editais/Publicações</span>
            </a>
          </li>--}}

        {{-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Páginas</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('pageCreate')}}">
                        <i class="bi bi-circle"></i><span>Criar Página</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('pageList')}}">
                        <i class="bi bi-circle"></i><span>Listas Páginas</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav --> --}}

        {{-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Clientes</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="charts-chartjs.html">
                        <i class="bi bi-circle"></i><span>Chart.js</span>
                    </a>
                </li>
                <li>
                    <a href="charts-apexcharts.html">
                        <i class="bi bi-circle"></i><span>ApexCharts</span>
                    </a>
                </li>
                <li>
                    <a href="charts-echarts.html">
                        <i class="bi bi-circle"></i><span>ECharts</span>
                    </a>
                </li>
            </ul>
        </li> --}}
        <!-- End Components Nav -->
        {{-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#categoria-nav-produto" data-bs-toggle="collapse" href="#">
                <i class="bi bi-card-list"></i><span>Categorias de Produtos</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="categoria-nav-produto" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('produtoCategorytList')}}">
                        <i class="bi bi-circle"></i><span>Listar Categorias</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Produtos</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="icons-bootstrap.html">
                        <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
                    </a>
                </li>
                <li>
                    <a href="icons-remix.html">
                        <i class="bi bi-circle"></i><span>Remix Icons</span>
                    </a>
                </li>
                <li>
                    <a href="icons-boxicons.html">
                        <i class="bi bi-circle"></i><span>Boxicons</span>
                    </a>
                </li>
            </ul>
        </li> --}}

</aside><!-- End Sidebar-->
