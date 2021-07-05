<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt_br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema - Igreja Assembleia de Deus Em Jardim Meriti</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="app/res/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="app/res/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="app/res/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="app/res/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="app/res/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
  <script>
    function deletarUsuario($idMembro, $nomeMembro){
      document.getElementById("userLink").href = "/excluirm/" + $idMembro;
      document.getElementById("nomeMembro").innerHTML = $nomeMembro;
    }
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
          <p>Deseja realmente excluir o cadastro de <span id="nomeMembro"></span> ?</p>
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
              <li class="nav-item" style="background-color: rgba(128, 128, 128, 0.295);">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Fichas de Membros
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/obreiros" class="nav-link">
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
                    <a href="/aniversariantesm" class="nav-link">
                      <i class="fas fa-calendar-alt"></i>
                      <p>Mensais</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/aniversariantesc" class="nav-link">
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-12">
            <h1>Fichas de Membros</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Fichas de Membros</h3>
                <button class="btn btn-sm btn-light float-sm-right"><i class="nav-icon fas fa-copy"></i> Ficha em branco</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Cargo</th>
                    <th>Ações</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $counter1=-1;  if( isset($fichas) && ( is_array($fichas) || $fichas instanceof Traversable ) && sizeof($fichas) ) foreach( $fichas as $key1 => $value1 ){ $counter1++; ?>
                  <tr>
                    <td><?php echo htmlspecialchars( $value1["nomeMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["telefoneMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["celularMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["cargoMinisterialMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td>
                      <a href="/ficham/<?php echo htmlspecialchars( $value1["idMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-success"><i class="nav-icon fas fa-copy"></i></a>
                      <a href="/editarm/<?php echo htmlspecialchars( $value1["idMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary"><i class="nav-icon fas fa-user-edit"></i></a>
                      <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal-sm" onclick="deletarUsuario('<?php echo htmlspecialchars( $value1["idMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>', '<?php echo htmlspecialchars( $value1["nomeMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>')"><i class="nav-icon fas fa-times-circle"></i></a>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Cargo</th>
                    <th>Ações</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
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

<!-- jQuery -->
<script src="app/res/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="app/res/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="app/res/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="app/res/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="app/res/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="app/res/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="app/res/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="app/res/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="app/res/plugins/jszip/jszip.min.js"></script>
<script src="app/res/plugins/pdfmake/pdfmake.min.js"></script>
<script src="app/res/plugins/pdfmake/vfs_fonts.js"></script>
<script src="app/res/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="app/res/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="app/res/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="app/res/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="app/res/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>