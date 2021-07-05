<?php

$app->get("/novafichaembranco",function(){

	Usuarios::verificaAutenticacao();

	$page = new PaginaFicha();

	$page->setTpl("nova_ficha_em_branco");
	exit;

});

$app->get("/fichamembro/:id",function($id){

	Usuarios::verificaAutenticacao();

	$id = descripto($id);

	$page = new PaginaFicha();

	$page->setTpl("ficha_membro",[
		"membro" => Membros::getMembro($id)
	]);
	exit;

});

$app->get("/relacaoaniversariantes/:mes",function($mes){

	Usuarios::verificaAutenticacao();

	$mes = descripto($mes);

    $page = new PaginaFicha();

	$page->setTpl("relacao_aniversariantes",[
        "aniversariantes" => Membros::getAniversariantesMesEscolhido($mes),
        "mes" => $mes
	]);
	exit;

});

$app->get("/relacaoaniversariantescasamento/:mes",function($mes){

	Usuarios::verificaAutenticacao();

	$mes = descripto($mes);

    $page = new PaginaFicha();

	$page->setTpl("relacao_aniversariantes_casamento",[
		"aniversariantes" => Membros::getAniversariantesCasamentoMesEscolhido($mes),
        "mes" => $mes
	]);
	exit;

});

$app->get("/relacaomembros",function(){

	Usuarios::verificaAutenticacao();

    $page = new PaginaFicha();

	$page->setTpl("relacao_membros",[
		"membros" => Membros::listarMembros()
	]);
	exit;

});

$app->get("/relacaoobreiros",function(){

	Usuarios::verificaAutenticacao();

	$page = new PaginaFicha();
	
	$obreiros = [];

	if (isset($_GET['cargo'])){
		$cargo = descripto($_GET['cargo']);
		$obreiros = Membros::getObreirosCargo($cargo);
	} else {
		$obreiros = Membros::getObreiros();
	}

	$page->setTpl("relacao_obreiros",[
		"obreiros" => $obreiros
	]);

	exit;

});

?>