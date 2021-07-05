<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
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
                <h3 class="card-title">Fichas de todos os membros</h3><br /><br />
                <a href="/relacaomembros" target="_blank" class="btn btn-sm btn-default float-sm-right" style="margin-left: 10px;"><span  style="color: black;"><i class="fas fa-print"></i> Relação</span></a>
                <a href="/fichaembranco" style="margin-left: 10px;" target="_blank" class="btn btn-sm btn-success float-sm-right"><i class="nav-icon fas fa-copy"></i> Ficha em branco</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr style="background-color: #007BFF; color: white;">
                    <th style="width: 50%;">Nome</th>
                    <th>Cargo</th>
                    <th>Ações</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $counter1=-1;  if( isset($fichas) && ( is_array($fichas) || $fichas instanceof Traversable ) && sizeof($fichas) ) foreach( $fichas as $key1 => $value1 ){ $counter1++; ?>
                  <tr>
                    <td><?php echo htmlspecialchars( $value1["nomeMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["cargoMinisterialMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td>
                      <a href="/ficham/<?php echo htmlspecialchars( $value1["idMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" target="_blank" class="btn btn-success"><i class="nav-icon fas fa-copy"></i></a>
                      <a href="/editarm/<?php echo htmlspecialchars( $value1["idMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary"><i class="nav-icon fas fa-user-edit"></i></a>
                      <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal-sm" onclick="deletarUsuario('<?php echo htmlspecialchars( $value1["idMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>', '<?php echo htmlspecialchars( $value1["nomeMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>')"><i class="nav-icon fas fa-times-circle"></i></a>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr style="background-color: #007BFF; color: white;">
                    <th>Nome</th>
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
</div>
<!-- ./wrapper -->

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,"ordering": true,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>