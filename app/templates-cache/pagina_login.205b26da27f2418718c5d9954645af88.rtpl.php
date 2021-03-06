<?php if(!class_exists('Rain\Tpl')){exit;}?><body class="hold-transition login-page">
<div class="login-box">
  <?php if( isset($_GET['msg']) && $_GET['msg'] == 1 ){ ?>

  <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-ban"></i> Erro!</h5>
    Usuário ou senha incorreto. <br /> Verifique os dados e tente novamente!
  </div>
  <?php } ?>

  <?php if( isset($_GET['msg']) && $_GET['msg'] == 2 ){ ?>

  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
    Você encerrou sua sessão com sucesso!
  </div>
  <?php } ?>

  <?php if( isset($_GET['msg']) && $_GET['msg'] == 3 ){ ?>

  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
    Você alterou sua senha com sucesso!
  </div>
  <?php } ?>

  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Sistema</b> Igreja</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Faça login para continuar</p>

      <form action="/login" method="post">
        <div class="input-group mb-3">
          <input type="text" name="usuarioLogin" class="form-control" placeholder="Digite seu usuario" minlength="5" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="senhaUsuario" class="form-control" placeholder="*********" minlength="5" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary btn-block">Entrar</button>
        </div>
      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
