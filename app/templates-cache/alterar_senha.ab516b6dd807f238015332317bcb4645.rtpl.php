<?php if(!class_exists('Rain\Tpl')){exit;}?><script>
  function verificaSenhas(){
    let senha1 = document.getElementById('novaSenha');
    let senha2 = document.getElementById('novaSenha2');
    let msgSenha = document.getElementById('msgSenha');
    let msgSenha2 = document.getElementById('msgSenha2');
    
    if (senha1.value != senha2.value){
      msgSenha.innerHTML = '<small>Os campos "Nova senha" e "Repita sua nova senha" precisam ser iguais</small>';
      msgSenha2.innerHTML = '<small>Os campos "Nova senha" e "Repita sua nova senha" precisam ser iguais</small>';
      senha1.style = 'background-color: #DC3545; color: white';
      senha2.style = 'background-color: #DC3545; color: white';
    return false;
    } else {
      msgSenha.innerHTML = '';
      msgSenha2.innerHTML = '';
      senha1.style = 'background-color: white; color: black';
      senha2.style = 'background-color: white; color: black';
    return true;
    }

  }
</script>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <?php if( isset($_GET['msg']) && $_GET['msg'] == 1 ){ ?>
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-ban"></i> Erro!</h5>
          Sua senha atual não confere com a senha que você digitou!
        </div>
        <?php } ?>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Alterar Senha</h1>
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
                <form method="POST" action="/alterarsenha" onsubmit="return verificaSenhas()">
                  <div class="card-body">

                    <div class="form-group">
                      <label for="igrejaProcedente">Senha atual:</label>
                      <input type="password" class="form-control" id="senhaAtual" name="senhaAtual" placeholder="Digite sua senha atual" minlength="5" required>
                    </div>

                    <div class="form-group">
                      <label for="igrejaProcedente">Nova senha:</label>
                      <input type="password" class="form-control" id="novaSenha" name="novaSenha" placeholder="Digite sua nova senha" minlength="5" required>
                      <span id="msgSenha" style="color: #DC3545;"></span>
                    </div>

                    <div class="form-group">
                      <label for="igrejaProcedente">Repita sua nova senha:</label>
                      <input type="password" class="form-control" id="novaSenha2" placeholder="Repita sua nova senha" minlength="5" required>
                      <span id="msgSenha2" style="color: #DC3545;"></span>
                    </div>

                  
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Alterar</button>
                  </div>
                </form>
              </div>

        </div>
          
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



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


  <script>
    $(function () {
      bsCustomFileInput.init();
    });
  </script>