<?php if(!class_exists('Rain\Tpl')){exit;}?>
  <script>
    function mudarMes(){
      let mes = document.getElementById('mesEscolhido').value;
      mesCripto = '9878945' +  mes + '7585123';
      mesCripto = btoa(mesCripto);
      window.location.href = "/localizadoraniversariantescasamento/" + mesCripto;
    }
    function relacao(){
      let mes = document.getElementById('mesEscolhido').value;
      mesCripto = '9878945' +  mes + '7585123';
      mesCripto = btoa(mesCripto);
      window.open("/relacaoaniversariantescasamento/" + mesCripto);
    }
  </script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-12">
            <h1>Aniversariantes de Casamento</h1>
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
                <h3 class="card-title">Relação de aniversariantes de casamento do mês de <?php echo mesExtenso($mes); ?></h3><br /><br />
                <select class="form-control" id="mesEscolhido" onchange="mudarMes()">
                  <option value="<?php echo htmlspecialchars( $mes, ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="mesEscolhido"><?php echo mesExtenso($mes); ?></option>
                  <?php if( $mes != '01' ){ ?><option value="01">Janeiro</option><?php } ?>
                  <?php if( $mes != '02' ){ ?><option value="02">Fevereiro</option><?php } ?>
                  <?php if( $mes != '03' ){ ?><option value="03">Março</option><?php } ?>
                  <?php if( $mes != '04' ){ ?><option value="04">Abril</option><?php } ?>
                  <?php if( $mes != '05' ){ ?><option value="05">Maio</option><?php } ?>
                  <?php if( $mes != '06' ){ ?><option value="06">Junho</option><?php } ?>
                  <?php if( $mes != '07' ){ ?><option value="07">Julho</option><?php } ?>
                  <?php if( $mes != '08' ){ ?><option value="08">Agosto</option><?php } ?>
                  <?php if( $mes != '09' ){ ?><option value="09">Setembro</option><?php } ?>
                  <?php if( $mes != '10' ){ ?><option value="10">Outubro</option><?php } ?>
                  <?php if( $mes != '11' ){ ?><option value="11">Novembro</option><?php } ?>
                  <?php if( $mes != '12' ){ ?><option value="12">Dezembro</option><?php } ?>
                </select> <br />
                <a href="#" class="btn btn-sm btn-default float-right" onclick="relacao()"><span style="color: black"><i class="fas fa-print"></i> Relação</span></a>
               </div>
              <!-- /.card-header -->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr style="background-color: #007BFF; color: white;">
                    <th>Data</th>
                    <th style="width: 50%;">Nome</th>
                    <th>Cargo</th>
                    <th>Ficha</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $counter1=-1;  if( isset($aniversariantes) && ( is_array($aniversariantes) || $aniversariantes instanceof Traversable ) && sizeof($aniversariantes) ) foreach( $aniversariantes as $key1 => $value1 ){ $counter1++; ?>
                  <tr>
                    <td><?php echo htmlspecialchars( $value1["dataCasamentoMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["nomeMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["cargoMinisterialMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td>
                      <a href='/fichamembro/<?php echo cripto($value1["idMembro"]); ?>' target="_blank" class="btn btn-success"><i class="nav-icon fas fa-copy"></i></a>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr style="background-color: #007BFF; color: white;">
                    <th>Data</th>
                    <th>Nome</th>
                    <th>Cargo</th>
                    <th>Ficha</th>
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
      "responsive": true, "lengthChange": false, "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>