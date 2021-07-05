<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt_br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema - Igreja Assembleia de Deus Em Jardim Meriti</title>
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/app/res/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/app/res/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/app/res/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/app/res/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/app/res/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/app/res/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/app/res/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/app/res/plugins/summernote/summernote-bs4.min.css">
  
<!-- jQuery -->
<script src="/app/res/plugins/jquery/jquery.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
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
      <img src="/app/res/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Ludra Web Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/app/res/imagens/logo.jpg" class="img-circle elevation-2" alt="User Image">
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
               <li class="nav-item">
                <a href="/" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Inicio
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/cadastrarm" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Cadastrar Membro
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/fichasm" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Fichas de Membros
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/fichaso" class="nav-link">
                  <i class="nav-icon fas fa-user-tie"></i>
                  <p>
                    Obreiros
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-birthday-cake"></i>
                  <p>
                    Aniversariantes
                    <i class="fas fa-angle-down right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href='/aniversariantesm/<?php echo mesAtual(); ?>' class="nav-link">
                      <i class="fas fa-calendar-alt"></i>
                      <p>Mensais</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href='/aniversariantesc/<?php echo mesAtual(); ?>' class="nav-link">
                      <i class="fas fa-ring"></i>
                      <p>Casamentos</p>
                    </a>
                  </li>
              </li>
              </ul>
              <li class="nav-item">
                <a href="/logout" class="nav-link">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>
                    Sair
                  </p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Editar Membro</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="col-12">

            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Preencha os dados abaixo!</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="/editarm/<?php echo htmlspecialchars( $membro["idMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="aceitoPor">Aceito (a) por:</label>
                      <select class="form-control" name="aceitoPor" id="aceitoPor">
                        <option><?php echo htmlspecialchars( $membro["aceitoPor"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                        <?php if( $membro["aceitoPor"] != 'Batismo' ){ ?>
                        <option>Batismo</option>
                        <?php } ?>
                        <?php if( $membro["aceitoPor"] != 'Testemunho' ){ ?>
                        <option>Testemunho</option>
                        <?php } ?>
                        <?php if( $membro["aceitoPor"] != 'Reconciliação' ){ ?>
                        <option>Reconciliação</option>
                        <?php } ?>
                        <?php if( $membro["aceitoPor"] != 'Carta de Mudança' ){ ?>
                        <option>Carta de Mudança</option>
                        <?php } ?>
                        <?php if( $membro["aceitoPor"] != 'Outro Motivo' ){ ?>
                        <option>Outro Motivo</option>
                        <?php } ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="igrejaProcedente">Igreja Procedente:</label>
                      <input type="text" class="form-control" id="igrejaProcedente" name="igrejaProcedente" placeholder="Igreja Procedente" value="<?php echo htmlspecialchars( $membro["igrejaProcedente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="numeroRegistroMembro">N° Registro do Membro:</label>
                                <input type="text" class="form-control" id="numeroRegistroMembro" name="numeroRegistroMembro" placeholder="N° Registro do Membro" value="<?php echo htmlspecialchars( $membro["numeroRegistroMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="dataBatismoMembro">Data de Batismo:</label>
                                <input type="text" class="form-control" id="dataBatismoMembro" name="dataBatismoMembro" placeholder="Data de Batismo" value="<?php echo htmlspecialchars( $membro["dataBatismoMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="nomeMembro">Nome:</label>
                      <input type="text" class="form-control" id="nomeMembro" name="nomeMembro" placeholder="Nome" value="<?php echo htmlspecialchars( $membro["nomeMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>

                    <div class="form-group">
                      <label for="nomePaiMembro">Filho de (Pai):</label>
                      <input type="text" class="form-control" id="nomePaiMembro" name="nomePaiMembro" placeholder="Nome do pai" value="<?php echo htmlspecialchars( $membro["nomePaiMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>

                    <div class="form-group">
                      <label for="nomeMaeMembro">e de (Mãe):</label>
                      <input type="text" class="form-control" id="nomeMaeMembro" name="nomeMaeMembro" placeholder="Nome da mãe" value="<?php echo htmlspecialchars( $membro["nomeMaeMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>

                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label for="dataNascMembro">Data de Nascimento:</label>
                          <input type="text" class="form-control" id="dataNascMembro" name="dataNascimentoMembro" placeholder="Data de nascimento" value="<?php echo htmlspecialchars( $membro["dataNascimentoMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="naturalidadeMembro">Naturalidade:</label>
                          <input type="text" class="form-control" id="naturalidadeMembro" name="naturalidadeMembro" placeholder="Naturalidade" value="<?php echo htmlspecialchars( $membro["naturalidadeMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="estadoMembro">Estado:</label>
                          <input type="text" class="form-control" id="estadoMembro" name="estadoMembro" placeholder="Estado" value="<?php echo htmlspecialchars( $membro["estadoMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label for="nacionalidadeMembro">Nacionalidade:</label>
                          <input type="text" class="form-control" id="nacionalidadeMembro" name="nacionalidadeMembro" placeholder="Nacionalidade" value="<?php echo htmlspecialchars( $membro["nacionalidadeMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="instrucaoMembro">Instrução:</label>
                          <input type="text" class="form-control" id="instrucaoMembro" name="instrucaoMembro" placeholder="Instrução" value="<?php echo htmlspecialchars( $membro["instrucaoMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="profissaoMembro">Profissão:</label>
                          <input type="text" class="form-control" id="profissaoMembro" name="profissaoMembro" placeholder="Profissão" value="<?php echo htmlspecialchars( $membro["profissaoMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label for="sexoMembro">Sexo:</label>
                          <select class="form-control" name="sexoMembro" id="sexoMembro">
                            <option><?php echo htmlspecialchars( $membro["sexoMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                            <?php if( $membro["sexoMembro"] != 'Masculino' ){ ?>
                            <option>Masculino</option>
                            <?php } ?>
                            <?php if( $membro["sexoMembro"] != 'Feminino' ){ ?>
                            <option>Feminino</option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="estadoCivilMembro">Estado Civil:</label>
                          <select class="form-control" name="estadoCivilMembro" id="estadoCivilMembro">
                            <option><?php echo htmlspecialchars( $membro["estadoCivilMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                            <?php if( $membro["estadoCivilMembro"] != 'Solteiro (a)' ){ ?>
                            <option value="Solteiro (a)">Solteiro (a)</option>
                            <?php } ?>
                            <?php if( $membro["estadoCivilMembro"] != 'Casado (a)' ){ ?>
                            <option value="Casado (a)">Casado (a)</option>
                            <?php } ?>
                            <?php if( $membro["estadoCivilMembro"] != 'Divorciado (a)' ){ ?>
                            <option value="Divorciado (a)">Divorciado (a)</option>
                            <?php } ?>
                            <?php if( $membro["estadoCivilMembro"] != 'Viúvo (a)' ){ ?>
                            <option value="Viúvo (a)">Viúvo (a)</option>
                            <?php } ?>
                            <?php if( $membro["estadoCivilMembro"] != 'Separado (a) judicialmente' ){ ?>
                            <option value="Separado (a) judicialmente">Separado (a) judicialmente</option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="dataCasamentoMembro">Data de Casamento:</label>
                          <input type="text" class="form-control" id="dataCasamentoMembro" name="dataCasamentoMembro" placeholder="Data de Casamento" value="<?php echo htmlspecialchars( $membro["dataCasamentoMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label for="cpfMembro">Cpf:</label>
                          <input type="text" class="form-control" id="cpfMembro" name="cpfMembro" placeholder="Cpf" value="<?php echo htmlspecialchars( $membro["cpfMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="rgMembro">RG:</label>
                          <input type="text" class="form-control" id="rgMembro" name="rgMembro" placeholder="RG" value="<?php echo htmlspecialchars( $membro["rgMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label for="cepMembro">Cep:</label>
                          <input type="text" class="form-control" id="cepMembro" name="cepMembro" placeholder="Cep" value="<?php echo htmlspecialchars( $membro["cepMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                      </div>
                      <div class="col-8">
                        <div class="form-group">
                          <label for="enderecoMembro">Endereço:</label>
                          <input type="text" class="form-control" id="enderecoMembro" name="enderecoMembro" placeholder="Endereço" value="<?php echo htmlspecialchars( $membro["enderecoMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label for="bairroMembro">Bairro:</label>
                          <input type="text" class="form-control" id="bairroMembro" name="bairroMembro" placeholder="Bairro" value="<?php echo htmlspecialchars( $membro["bairroMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="cidadeMembro">Cidade:</label>
                          <input type="text" class="form-control" id="cidadeMembro" name="cidadeMembro" placeholder="Cidade" value="<?php echo htmlspecialchars( $membro["cidadeMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="estado2Membro">Estado:</label>
                          <input type="text" class="form-control" id="estado2Membro" name="estado2Membro" placeholder="Estado" value="<?php echo htmlspecialchars( $membro["estado2Membro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label for="telefoneMembro">Telefone(Residêncial/Comercial):</label>
                          <input type="text" class="form-control" id="telefoneMembro" name="telefoneMembro" placeholder="Telefone" value="<?php echo htmlspecialchars( $membro["telefoneMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="celularMembro">Celular:</label>
                          <input type="text" class="form-control" id="celularMembro" name="celularMembro" placeholder="Celular" value="<?php echo htmlspecialchars( $membro["celularMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label for="emailMembro">Email:</label>
                          <input type="text" class="form-control" id="emailMembro" name="emailMembro" placeholder="Email" value="<?php echo htmlspecialchars( $membro["emailMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="cargoMinisterialMembro">Cargo Ministerial:</label>
                          <select class="form-control" name="cargoMinisterialMembro" id="cargoMinisterialMembro">
                            <option><?php echo htmlspecialchars( $membro["cargoMinisterialMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                            <?php if( $membro["cargoMinisterialMembro"] != '' ){ ?>
                            <option></option>
                            <?php } ?>
                            <?php if( $membro["cargoMinisterialMembro"] != 'Pastor (a)' ){ ?>
                            <option>Pastor (a)</option>
                            <?php } ?>
                            <?php if( $membro["cargoMinisterialMembro"] != 'Missionário (a)' ){ ?>
                            <option>Missionário (a)</option>
                            <?php } ?>
                            <?php if( $membro["cargoMinisterialMembro"] != 'Evangelista' ){ ?>
                            <option>Evangelista</option>
                            <?php } ?>
                            <?php if( $membro["cargoMinisterialMembro"] != 'Presbitero (a)' ){ ?>
                            <option>Presbitero (a)</option>
                            <?php } ?>
                            <?php if( $membro["cargoMinisterialMembro"] != 'Diacono (a)' ){ ?>
                            <option>Diácono (a)</option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-12">
                      <div class="form-group">
                        <label for="observacoesMembro">Observações</label>
                        <textarea class="form-control" id="observacoesMembro" name="observacoesMembro" rows="5" placeholder="Digite as oversavações do membro"><?php echo htmlspecialchars( $membro["observacoesMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <!-- <label for="customFile">Custom File</label> -->
                      <label for="customFile">Alterar Foto:</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="imgMembro">
                        <input type="text" value="<?php echo htmlspecialchars( $membro["imgMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="imgMembroAntiga" hidden>
                        <label class="custom-file-label" for="customFile">Escolha uma foto</label>
                      </div>
                    </div>

                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                  </div>
                </form>
              </div>

        </div>
          
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="#">Ludra Engenharia de Software</a>.</strong>
    Todos os direitos reservados.
    <div class="float-right d-none d-sm-inline-block">
      <b>Versão</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery UI 1.11.4 -->
<script src="/app/res/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="/app/res/plugins/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $(document).ready(function(){
  $('#dataBatismoMembro').mask('00/00/0000');
  $('#dataNascMembro').mask('00/00/0000');
  $('#dataCasamentoMembro').mask('00/00/0000');
  $('#cpfMembro').mask('000.000.000-00');
  $('#rgMembro').mask('00.000.000-0');
  $('#cepMembro').mask('00000-000');
  $('#telefoneMembro').mask('(00) 0000-0000');
  $('#celularMembro').mask('(00) 00000-0000');
});
</script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/app/res/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/app/res/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/app/res/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/app/res/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/app/res/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/app/res/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/app/res/plugins/moment/moment.min.js"></script>
<script src="/app/res/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/app/res/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/app/res/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/app/res/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/app/res/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/app/res/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/app/res/dist/js/pages/dashboard.js"></script>
<script src="/app/res/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
  $(function () {
    bsCustomFileInput.init();
  });
  </script>
</body>
</html>
