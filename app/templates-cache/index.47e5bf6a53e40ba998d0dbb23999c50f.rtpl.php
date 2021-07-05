<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <?php if( isset($_GET['msg']) && $_GET['msg'] == 1 ){ ?>

        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
          Membro cadastrado com sucesso!
        </div>
        <?php } ?>

        <?php if( isset($_GET['msg']) && $_GET['msg'] == 2 ){ ?>

        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
          Membro excluido com sucesso!
        </div>
        <?php } ?>

        <?php if( isset($_GET['msg']) && $_GET['msg'] == 3 ){ ?>

        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
          Membro alterado com sucesso!
        </div>
        <?php } ?>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      
      <div class="row">
        
        <div class="col-6"> 
          <div class="card">
            <div class="card-header bg-primary">
              <h3 class="card-title">Próximos aniversariantes do mês</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <ul class="products-list product-list-in-card pl-2 pr-2">
                <?php if( count($limitAniversaritantesMes) == 0 ){ ?>

                <li class="item">
                  <div class="">
                    Nenhum aniversariante esse mês
                  </div>
                </li>
                <?php } ?>

                <?php $counter1=-1;  if( isset($limitAniversaritantesMes) && ( is_array($limitAniversaritantesMes) || $limitAniversaritantesMes instanceof Traversable ) && sizeof($limitAniversaritantesMes) ) foreach( $limitAniversaritantesMes as $key1 => $value1 ){ $counter1++; ?>

                <li class="item">
                  <div class="product-info">
                    <a href="/ficham/<?php echo htmlspecialchars( $value1["idMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" target="_blank" class="product-title"><?php echo htmlspecialchars( $value1["nomeMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
                      <span class="float-right"><a href="/ficham/<?php echo htmlspecialchars( $value1["idMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" target="_blank" class="btn btn-success"><i class="nav-icon fas fa-copy"></i></a>
                      </span>
                    <span class="product-description">
                      <?php echo htmlspecialchars( $value1["cargoMinisterialMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

                    </span>
                    <span class="product-description">
                      <small>Dia: <?php echo formatAniversario($value1["dataNascimentoMembro"]); ?></small>
                    </span>
                  </div>
                </li>
                <!-- /.item -->
                <?php } ?>

              </ul>
            </div>
            <div class="card-header bg-primary">
              <div class="card-tools">
                <a href='/aniversariantesm/<?php echo mesAtual(); ?>' class="small-box-footer" style="color: white;">Ver todos <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card --> 
        </div>
        <div class="col-6"> 
          <div class="card">
            <div class="card-header bg-primary">
              <h3 class="card-title">Próximos aniversariantes de casamento</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <ul class="products-list product-list-in-card pl-2 pr-2">
                <?php if( count($limitAniversaritantesCasamento) == 0 ){ ?>

                <li class="item">
                  <div class="">
                    Nenhum aniversariante esse mês
                  </div>
                </li>
                <?php } ?>

                <?php $counter1=-1;  if( isset($limitAniversaritantesCasamento) && ( is_array($limitAniversaritantesCasamento) || $limitAniversaritantesCasamento instanceof Traversable ) && sizeof($limitAniversaritantesCasamento) ) foreach( $limitAniversaritantesCasamento as $key1 => $value1 ){ $counter1++; ?>

                <li class="item">
                  <div class="product-info">
                    <a href="/ficham/<?php echo htmlspecialchars( $value1["idMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" target="_blank" class="product-title"><?php echo htmlspecialchars( $value1["nomeMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
                      <span class="float-right"><a href="/ficham/<?php echo htmlspecialchars( $value1["idMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" target="_blank" class="btn btn-success"><i class="nav-icon fas fa-copy"></i></a></span>
                    <span class="product-description">
                      <?php echo htmlspecialchars( $value1["cargoMinisterialMembro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

                    </span>
                    
                    <span class="product-description">
                      <small>Dia: <?php echo formatAniversario($value1["dataCasamentoMembro"]); ?></small>
                    </span>
                  </div>
                </li>
                <!-- /.item -->
                <?php } ?>

              </ul>
            </div>
            <!-- /.card-body -->
            <div class="card-header bg-primary">
              <div class="card-tools">
                <a href='/aniversariantesc/<?php echo mesAtual(); ?>' class="small-box-footer" style="color: white;">Ver todos <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /.card --> 
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header border-transparent bg-primary">
              <h3 class="card-title">Últimos membros cadastrados</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Cargo Ministerial</th>
                    <th></center>Ações</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $counter1=-1;  if( isset($ultimosMembros) && ( is_array($ultimosMembros) || $ultimosMembros instanceof Traversable ) && sizeof($ultimosMembros) ) foreach( $ultimosMembros as $key1 => $value1 ){ $counter1++; ?>

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
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->
            <div class="card-header bg-primary">
              <div class="card-tools">
                <a href="/fichasm" class="small-box-footer" style="color: white;">Ver todos <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->