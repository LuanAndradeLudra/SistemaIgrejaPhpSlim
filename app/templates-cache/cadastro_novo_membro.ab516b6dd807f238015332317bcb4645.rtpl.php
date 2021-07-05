<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Cadastrar Novo Membro</h1>
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
                <form method="POST" action="/cadastrarnovomembro" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="aceitoPor">Aceito (a) por:</label>
                      <select class="form-control" name="aceitoPor" id="aceitoPor">
                        <option>Selecione uma opção</option>
                        <option>Batismo</option>
                        <option>Testemunho</option>
                        <option>Reconciliação</option>
                        <option>Carta de Mudança</option>
                        <option>Outro Motivo</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="igrejaProcedente">Igreja Procedente:</label>
                      <input type="text" class="form-control" id="igrejaProcedente" name="igrejaProcedente" placeholder="Igreja Procedente">
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="numeroRegistroMembro">N° Registro do Membro:</label>
                                <input type="text" class="form-control" id="numeroRegistroMembro" name="numeroRegistroMembro" placeholder="N° Registro do Membro">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="dataBatismoMembro">Data de Batismo:</label>
                                <input type="text" class="form-control" id="dataBatismoMembro" name="dataBatismoMembro" placeholder="Data de Batismo">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="nomeMembro">Nome:</label>
                      <input type="text" class="form-control" id="nomeMembro" name="nomeMembro" placeholder="Nome">
                    </div>

                    <div class="form-group">
                      <label for="nomePaiMembro">Filho de (Pai):</label>
                      <input type="text" class="form-control" id="nomePaiMembro" name="nomePaiMembro" placeholder="Nome do pai">
                    </div>

                    <div class="form-group">
                      <label for="nomeMaeMembro">e de (Mãe):</label>
                      <input type="text" class="form-control" id="nomeMaeMembro" name="nomeMaeMembro" placeholder="Nome da mãe">
                    </div>

                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label for="dataNascMembro">Data de Nascimento:</label>
                          <input type="text" class="form-control" id="dataNascMembro" name="dataNascimentoMembro" placeholder="Data de nascimento">
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="naturalidadeMembro">Naturalidade:</label>
                          <input type="text" class="form-control" id="naturalidadeMembro" name="naturalidadeMembro" placeholder="Naturalidade">
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="estadoMembro">Estado:</label>
                          <input type="text" class="form-control" id="estadoMembro" name="estadoMembro" placeholder="Estado">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label for="nacionalidadeMembro">Nacionalidade:</label>
                          <input type="text" class="form-control" id="nacionalidadeMembro" name="nacionalidadeMembro" placeholder="Nacionalidade">
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="instrucaoMembro">Instrução:</label>
                          <input type="text" class="form-control" id="instrucaoMembro" name="instrucaoMembro" placeholder="Instrução">
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="profissaoMembro">Profissão:</label>
                          <input type="text" class="form-control" id="profissaoMembro" name="profissaoMembro" placeholder="Profissão">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label for="sexoMembro">Sexo:</label>
                          <select class="form-control" name="sexoMembro" id="sexoMembro">
                            <option>Selecione uma opção</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="estadoCivilMembro">Estado Civil:</label>
                          <select class="form-control" name="estadoCivilMembro" id="estadoCivilMembro">
                            <option>Selecione uma opção</option>
                            <option value="Solteiro (a)">Solteiro (a)</option>
                            <option value="Casado (a)">Casado (a)</option>
                            <option value="Divorciado (a)">Divorciado (a)</option>
                            <option value="Viúvo (a)">Viúvo (a)</option>
                            <option value="SSeparado (a) judicialmente">Separado (a) judicialmente</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="dataCasamentoMembro">Data de Casamento:</label>
                          <input type="text" class="form-control" id="dataCasamentoMembro" name="dataCasamentoMembro" placeholder="Data de Casamento">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label for="cpfMembro">Cpf:</label>
                          <input type="text" class="form-control" id="cpfMembro" name="cpfMembro" placeholder="Cpf">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="rgMembro">RG:</label>
                          <input type="text" class="form-control" id="rgMembro" name="rgMembro" placeholder="RG">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label for="cepMembro">Cep:</label>
                          <input type="text" class="form-control" id="cepMembro" name="cepMembro" placeholder="Cep">
                        </div>
                      </div>
                      <div class="col-8">
                        <div class="form-group">
                          <label for="enderecoMembro">Endereço:</label>
                          <input type="text" class="form-control" id="enderecoMembro" name="enderecoMembro" placeholder="Endereço">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label for="bairroMembro">Bairro:</label>
                          <input type="text" class="form-control" id="bairroMembro" name="bairroMembro" placeholder="Bairro">
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="cidadeMembro">Cidade:</label>
                          <input type="text" class="form-control" id="cidadeMembro" name="cidadeMembro" placeholder="Cidade">
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label for="estado2Membro">Estado:</label>
                          <input type="text" class="form-control" id="estado2Membro" name="estado2Membro" placeholder="Estado">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label for="telefoneMembro">Telefone(Residêncial/Comercial):</label>
                          <input type="text" class="form-control" id="telefoneMembro" name="telefoneMembro" placeholder="Telefone">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="celularMembro">Celular:</label>
                          <input type="text" class="form-control" id="celularMembro" name="celularMembro" placeholder="Celular">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label for="emailMembro">Email:</label>
                          <input type="text" class="form-control" id="emailMembro" name="emailMembro" placeholder="Email">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="cargoMinisterialMembro">Cargo Ministerial:</label>
                          <select class="form-control" name="cargoMinisterialMembro" id="cargoMinisterialMembro">
                            <option></option>
                            <option>Pastor (a)</option>
                            <option>Missionário (a)</option>
                            <option>Evangelista</option>
                            <option>Presbitero (a)</option>
                            <option>Diácono (a)</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-12">
                      <div class="form-group">
                        <label for="observacoesMembro">Observações</label>
                        <textarea class="form-control" id="observacoesMembro" name="observacoesMembro" rows="5" placeholder="Digite as oversavações do membro"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <!-- <label for="customFile">Custom File</label> -->
                      <label for="customFile">Foto:</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="imgMembro" value="Upload File" onchange="setFoto(this.value)">
                        <label class="custom-file-label" for="customFile">Escolha uma foto</label>
                      </div>
                    </div>

                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
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