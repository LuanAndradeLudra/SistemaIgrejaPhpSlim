<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt_br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema - Igreja Assembleia de Deus Em Jardim Meriti</title>
  <link id="favicon" rel="shortcut icon" href="/app/res/imagens/sistema/icone.png">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/app/res/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/app/res/dist/css/adminlte.min.css">
  <style>
    .campo{
      border-top: 0px;
      border-left: 0px;
      border-right: 0px;
      border-bottom: 1px solid black;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
  <script>
    function imprimir(){
     document.getElementById('botaoImprimir').innerHTML = "";
      print();
     document.getElementById('botaoImprimir').innerHTML = ' <button class="btn btn-default" onclick="imprimir()"><i class="fas fa-print"></i>&nbsp;Imprimir</button>';
    }
  </script>
  <div style="border: 1px solid black; margin-left: 32px; margin-right: 32px; padding: 32px; height: 100%;">
  <div class="row" style="border: 4px solid black; padding-top: 10px; padding-bottom: 10px;">
    <div class="col-2">
      <img class="float-sm-left" style="margin-top: 10px;" src="/app/res/imagens/sistema/logo.jpg" class="img-responsive" width="80px" height="80px">
    </div>
    <div class="col-8">
      <center>
        <span style="font-size: 22px;"><b><u>IGREJA ASSEMBLEIA DE DEUS EM JARDIM MERITI</b></u></span> <br />
        <b>Minitério Madureira - Pres. Bispo Abener Ferreira</b> <br />
        Rua Dinorah Silva Lt 22 Qd 53 - J.M - São João de Meriti. RJ. CEP 25.555-501 <br />
        C.N.P.J - 24.114.371 / 0069-07 <b>Pr. Dirig.:</b> Josafá Gonçalves - Tel (021) 3069-4740
      </center>
    </div>
    <div class="col-2">
      <img class="float-sm-right" style="margin-top: 10px;" src="/app/res/imagens/sistema/logo.jpg" width="80px" height="80px">
    </div>
    
  </div>
  <br />