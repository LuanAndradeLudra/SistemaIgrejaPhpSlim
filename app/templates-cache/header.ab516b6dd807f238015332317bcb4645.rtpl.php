<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt_br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema - Igreja Assembleia de Deus Em Jardim Meriti</title>
  <link id="favicon" rel="shortcut icon" href="/app/res/imagens/sistema/icone.png">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/app/res/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  
  <!-- Theme style -->
  <link rel="stylesheet" href="/app/res/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/app/res/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="/app/res/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/app/res/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/app/res/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- jQuery -->
    <script src="/app/res/plugins/jquery/jquery.min.js"></script>
    <script src="/app/res/plugins/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/app/res/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    
    <!-- Bootstrap 4 -->
    <script src="/app/res/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!-- overlayScrollbars -->
    <script src="/app/res/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/app/res/dist/js/adminlte.js"></script>

    
    <!-- dataTable -->
    <script src="/app/res/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/app/res/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

    <!--Custom File-->
    <!-- bs-custom-file-input -->
    <script src="/app/res/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

    <script src="/app/res/dist/js/scriptssistema.js"></script>


</head>
<body class="hold-transition sidebar-mini layout-fixed">

  <script>
    $(document).ready( function () {
      onLoad();
    });
  </script>

    <div class="modal fade" id="modal-sm">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header bg-danger">
            <h4 class="modal-title">Excluir registro</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" style="color: white;">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Deseja realmente excluir o registro de <span id="nomeMembro"></span> ?</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <a href="#" id="userLink" class="btn btn-danger">Excluir</a>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  <div class="wrapper">
  
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
  
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="/app/res/imagens/sistema/sistemalogo.png" alt="Sistema Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Ludra Web Admin</span>
      </a>
  
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="/app/res/imagens/sistema/logo.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Administrador</a>
          </div>
        </div>
  
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                 <li class="nav-item" id="pag=/inicio">
                  <a href="/inicio" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                      Inicio
                    </p>
                  </a>
                </li>
                <li class="nav-item" id="pag=/cadastrarnovomembro">
                  <a href="/cadastrarnovomembro" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                      Cadastrar Membro
                    </p>
                  </a>
                </li>
                <li class="nav-item" id="pag=/localizadorfichasmembro">
                  <a href="/localizadorfichasmembro" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                      Fichas de Membros
                    </p>
                  </a>
                </li>
                <li class="nav-item" id="pag=/localizadorfichasobreiros">
                  <a href="/localizadorfichasobreiros" class="nav-link">
                    <i class="nav-icon fas fa-user-tie"></i>
                    <p>
                      Obreiros
                    </p>
                  </a>
                </li>
                <li class="nav-item" id="ulaniversariantes">
                  <a href="#" class="nav-link" id="lianiversariantes">
                    <i class="nav-icon fas fa-birthday-cake"></i>
                    <p>
                      Aniversariantes
                      <i id="setaulaniversariantes" class="fas fa-angle-down right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item" style="margin-left: 16px;" id="pag=/localizadoraniversariantes">
                      <a href='/localizadoraniversariantes/<?php echo cripto(mesAtual()); ?>' class="nav-link">
                        <i class="fas fa-calendar-alt"></i>
                        <p>Mensais</p>
                      </a>
                    </li>
                    <li class="nav-item" style="margin-left: 16px;" id="pag=/localizadoraniversariantescasamento">
                      <a href='/localizadoraniversariantescasamento/<?php echo cripto(mesAtual()); ?>' class="nav-link">
                        <i class="fas fa-ring"></i>
                        <p>Casamentos</p>
                      </a>
                    </li>
                </li>
                </ul>
                <li class="nav-item" id="ulconfiguracoes">
                  <a href="#" class="nav-link" id="liconfiguracoes">
                    <i class="nav-icon fas fa-cog"></i>
                    <p>
                      Configurações
                      <i class="fas fa-angle-down right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item" style="margin-left: 16px;">
                      <a href='/alterarsenha' class="nav-link" id="pag=/alterarsenha">
                        <i class="fas fa-user-shield"></i>
                        <p>Alterar Senha</p>
                      </a>
                    </li>
                </li>
                </ul>
                <li class="nav-item">
                  <a href="/logout" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                      Encerrar Sessão
                    </p>
                  </a>
                </li>
              </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

