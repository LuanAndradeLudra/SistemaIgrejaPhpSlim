<?php if(!class_exists('Rain\Tpl')){exit;}?><script>
  function mudarCargo(){
    let cargo = document.getElementById('cargoEscolhido').value;
    if (cargo != 'Todos'){
      cargoCripto = '9878945' +  cargo + '7585123';
      cargoCripto = btoa(cargoCripto);
      window.location.href = '/localizadorfichasobreiros?cargo=' + cargoCripto;
    } else {
      window.location.href = '/localizadorfichasobreiros';
    }
  }
  function relacao(){
    let cargo = document.getElementById('cargoEscolhido').value;
    if (cargo != 'Todos'){
      cargoCripto = '9878945' +  cargo + '7585123';
      cargoCripto = btoa(cargoCripto);
      window.open('relacaoobreiros?cargo='+cargoCripto);
    } else {
      window.open('relacaoobreiros');
    }
  }
</script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-12">
            <h1>Fichas de Obreiros</h1>
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
                <?php if( $cargo == 'Todos' ){ ?> 
                <h3 class="card-title">Fichas de todos os obreiros</h3> <br /><br />
                <?php }else{ ?>
                <h3 class="card-title">Exibindo apenas as fichas do cargo ministerial [ <?php echo htmlspecialchars( $cargo, ENT_COMPAT, 'UTF-8', FALSE ); ?> ]</h3> <br /><br />
                <?php } ?>
                <select class="form-control" id="cargoEscolhido" onchange="mudarCargo()">
                  <option><?php echo htmlspecialchars( $cargo, ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                  <?php if( $cargo != 'Todos' ){ ?><option>Todos</option><?php } ?>
                  <?php if( $cargo != 'Pastor (a)' ){ ?><option>Pastor (a)</option><?php } ?>
                  <?php if( $cargo != 'Missionário (a)' ){ ?><option>Missionário (a)</option><?php } ?>
                  <?php if( $cargo != 'Evangelista' ){ ?><option>Evangelista</option><?php } ?>
                  <?php if( $cargo != 'Presbitero (a)' ){ ?><option>Presbitero (a)</option><?php } ?>
                  <?php if( $cargo != 'Diacono (a)' ){ ?><option>Diacono (a)</option><?php } ?>
                </select> <br />
                <a href="#" onclick="relacao()" class="btn btn-sm btn-default float-right" style="margin-left: 10px;"><span  style="color: black;"><i class="fas fa-print"></i> Relação</span></a>
                <a href="/fichaembranco" style="margin-left: 10px;" target="_blank" class="btn btn-sm btn-success float-right"><i class="nav-icon fas fa-copy"></i> Ficha em branco</a>
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
                  <?php $counter1=-1;  if( isset($obreiros) && ( is_array($obreiros) || $obreiros instanceof Traversable ) && sizeof($obreiros) ) foreach( $obreiros as $key1 => $value1 ){ $counter1++; ?>
                  <tr>
                    <td><?php echo htmlspecialchars( $value1["nomeMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["cargoMinisterialMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td>
                      <a href='/fichamembro/<?php echo cripto($value1["idMembro"]); ?>' target="_blank" class="btn btn-success"><i class="nav-icon fas fa-copy"></i></a>
                      <a href='/editarmembro/<?php echo cripto($value1["idMembro"]); ?>' class="btn btn-primary"><i class="nav-icon fas fa-user-edit"></i></a>
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


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,"ordering": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>