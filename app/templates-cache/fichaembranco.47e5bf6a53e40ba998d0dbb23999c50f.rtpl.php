<?php if(!class_exists('Rain\Tpl')){exit;}?>
<div class="row">
  <div class="col-4">
  </div>
  <div class="col-4">
    <center><span style="font-size: 19px;"><b>FICHA CADASTRAL</b></span></center>
  </div>
  <div class="col-4">
    <span id="botaoImprimir" class="float-sm-right">
      <button class="btn btn-default" onclick="imprimir()"><i class="fas fa-print"></i>&nbsp;Imprimir</button>
    </span>
  </div>
</div>
<br />
<div class="row" style="margin-left: 6px; margin-right: 6px; margin-top: 8px;">
    <div class="col-2" style="margin-top: 38px; margin-left: 32px;"><b>ACEITO POR</b></div>
    <div class="col-4">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <input type="text" class="form-control" readonly style="background-color: white; width: 80px;">
        </div>
        <span style="margin-top: 10px;">&nbsp;Batismo</span>
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <input type="text" class="form-control" readonly style="background-color: white; width: 80px;">
        </div>
        <span style="margin-top: 10px;">&nbsp;Testemunho</span>
      </div>
    </div>
    <div class="col-4">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <input type="text" class="form-control" readonly style="background-color: white; width: 80px;">
        </div>
        <span style="margin-top: 10px;">&nbsp;Reconciliação</span>
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <input type="text" class="form-control" readonly style="background-color: white; width: 80px;">
        </div>
        <span style="margin-top: 10px;">&nbsp;Carta de Mudança</span>
      </div>
    </div>
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span style="margin-top: 10px;">Igreja Procedente:&nbsp;</span>
    </div>
    <!-- /btn-group -->
    <input type="text" class="form-control campo" readonly style="background-color: white;">
  </div>

  <div class="row">
    <div class="col-6">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span style="margin-top: 10px;"><b>N° Registro do Membro:</b>&nbsp;</span>
        </div>
        <!-- /btn-group -->
        <input type="text" class="form-control campo" readonly style="background-color: white;">
      </div>
    </div>
    <div class="col-6">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span style="margin-top: 10px;"><b>Data de Batismo:</b>&nbsp;</span>
        </div>
        <!-- /btn-group -->
        <input type="text" class="form-control campo" readonly style="background-color: white;">
      </div>
    </div>
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span style="margin-top: 10px;">Nome:&nbsp;</span>
    </div>
    <!-- /btn-group -->
    <input type="text" class="form-control campo" readonly style="background-color: white;">
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span style="margin-top: 10px;">Filho de:&nbsp;</span>
    </div>
    <!-- /btn-group -->
    <input type="text" class="form-control campo" readonly style="background-color: white;">
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span style="margin-top: 10px;">e de:&nbsp;</span>
    </div>
    <!-- /btn-group -->
    <input type="text" class="form-control campo" readonly style="background-color: white;">
  </div>
    
  <div class="row">
    <div class="col-4">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span style="margin-top: 10px;">Data de Nascimento:&nbsp;</span>
        </div>
        <!-- /btn-group -->
        <input type="text" class="form-control campo" readonly style="background-color: white;">
      </div>
    </div>
    <div class="col-4">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span style="margin-top: 10px;">Natural:&nbsp;</span>
        </div>
        <!-- /btn-group -->
        <input type="text" class="form-control campo" readonly style="background-color: white;">
      </div>
    </div>
    <div class="col-4">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span style="margin-top: 10px;">Estado:&nbsp;</span>
        </div>
        <!-- /btn-group -->
        <input type="text" class="form-control campo" readonly style="background-color: white;">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-4">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span style="margin-top: 10px;">Nacionalidade:&nbsp;</span>
        </div>
        <!-- /btn-group -->
        <input type="text" class="form-control campo" readonly style="background-color: white;">
      </div>
    </div>
    <div class="col-4">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span style="margin-top: 10px;">Instrução:&nbsp;</span>
        </div>
        <!-- /btn-group -->
        <input type="text" class="form-control campo" readonly style="background-color: white;">
      </div>
    </div>
    <div class="col-4">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span style="margin-top: 10px;">Profissão:&nbsp;</span>
        </div>
        <!-- /btn-group -->
        <input type="text" class="form-control campo" readonly style="background-color: white;">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-4">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span style="margin-top: 10px;">Sexo:&nbsp;</span>
        </div>
        <!-- /btn-group -->
        <input type="text" class="form-control campo" readonly style="background-color: white;">
      </div>
    </div>
    <div class="col-4">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span style="margin-top: 10px;">Estado Civil:&nbsp;</span>
        </div>
        <!-- /btn-group -->
        <input type="text" class="form-control campo" readonly style="background-color: white;">
      </div>
    </div>
    <div class="col-4">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span style="margin-top: 10px;">Data do Casamento:&nbsp;</span>
        </div>
        <!-- /btn-group -->
        <input type="text" class="form-control campo" readonly style="background-color: white;">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-6">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span style="margin-top: 10px;">Cpf:&nbsp;</span>
        </div>
        <!-- /btn-group -->
        <input type="text" class="form-control campo" readonly style="background-color: white;">
      </div>
    </div>
    <div class="col-6">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span style="margin-top: 10px;">Rg:&nbsp;</span>
        </div>
        <!-- /btn-group -->
        <input type="text" class="form-control campo" readonly style="background-color: white;">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-4">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span style="margin-top: 10px;">Cep:&nbsp;</span>
        </div>
        <!-- /btn-group -->
        <input type="text" class="form-control campo" readonly style="background-color: white;">
      </div>
    </div>
    <div class="col-8">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span style="margin-top: 10px;">Endereço:&nbsp;</span>
        </div>
        <!-- /btn-group -->
        <input type="text" class="form-control campo" readonly style="background-color: white;">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-4">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span style="margin-top: 10px;">Bairro:&nbsp;</span>
        </div>
        <!-- /btn-group -->
        <input type="text" class="form-control campo" readonly style="background-color: white;">
      </div>
    </div>
    <div class="col-4">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span style="margin-top: 10px;">Cidade:&nbsp;</span>
        </div>
        <!-- /btn-group -->
        <input type="text" class="form-control campo" readonly style="background-color: white;">
      </div>
    </div>
    <div class="col-4">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span style="margin-top: 10px;">Estado:&nbsp;</span>
        </div>
        <!-- /btn-group -->
        <input type="text" class="form-control campo" readonly style="background-color: white;">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-6">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span style="margin-top: 10px;">Telefone (Residencial/Comercial):&nbsp;</span>
        </div>
        <!-- /btn-group -->
        <input type="text" class="form-control campo" readonly style="background-color: white;">
      </div>
    </div>
    <div class="col-6">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span style="margin-top: 10px;">Celular:&nbsp;</span>
        </div>
        <!-- /btn-group -->
        <input type="text" class="form-control campo" readonly style="background-color: white;">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-6">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span style="margin-top: 10px;">Email:&nbsp;</span>
        </div>
        <!-- /btn-group -->
        <input type="text" class="form-control campo" readonly style="background-color: white;">
      </div>
    </div>
    <div class="col-6">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span style="margin-top: 10px;">Cargo Ministerial:&nbsp;</span>
        </div>
        <!-- /btn-group -->
        <input type="text" class="form-control campo" readonly style="background-color: white;">
      </div>
    </div>
  </div>
  <div class="col-12">
    <label>Observações:</label>
    <textarea class="form-control campo" readonly style="background-color: white;" id="observacoesMembro" name="observacoesMembro" rows="5"></textarea>
  </div>
  <br /> <br />
  <div class="row">
    <div class="col-3">
      &nbsp;
    </div>
    <div class="col-6">
     <input type="text" class="form-control campo" readonly style="background-color: white;"><br />
      <center>Secretário (a)</center>
    </div>
    <div class="col-3">
      &nbsp;
    </div>
  </div>
  <br /> 
  <div class="row">
    <div class="col-3">
      &nbsp;
    </div>
    <div class="col-6">
     <input type="text" class="form-control campo" readonly style="background-color: white;"><br />
      <center>Pastor (a) Dirigente</center>
    </div>
    <div class="col-3">
      &nbsp;
    </div>
  </div>