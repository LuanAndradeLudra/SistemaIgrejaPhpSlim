<?php if(!class_exists('Rain\Tpl')){exit;}?>  <div class="card col-12">
    <div class="card-header">
      <span style="font-size: 18px; margin-top: 10px;"><b>Relação de aniversariantes do mês de <?php echo mesExtenso($mes); ?></b></span> &nbsp;
        <span id="botaoImprimir">
          <button class="btn btn-default" onclick="imprimir()"><i class="fas fa-print"></i>&nbsp;Imprimir</button>
        </span> <br />
        <small>Data de hoje: <?php echo dataAtual(); ?></small>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0 mb-4">
      <table class="table table-striped">
          <tr style="background-color: white;">
            <th>Data</th>
            <th style="width: 40%;">Nome</th>
            <th>Cargo</th>
            <th>Telefone</th>
            <th>Celular</th>
          </tr>
        <tbody>
          <?php $counter1=-1;  if( isset($aniversariantes) && ( is_array($aniversariantes) || $aniversariantes instanceof Traversable ) && sizeof($aniversariantes) ) foreach( $aniversariantes as $key1 => $value1 ){ $counter1++; ?>
          <tr>
            <td><?php echo htmlspecialchars( $value1["dataNascimentoMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
            <td><?php echo htmlspecialchars( $value1["nomeMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
            <td><?php echo htmlspecialchars( $value1["cargoMinisterialMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
            <td><?php echo htmlspecialchars( $value1["telefoneMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
            <td><?php echo htmlspecialchars( $value1["celularMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->


</div>
