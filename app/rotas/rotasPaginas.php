<?php

$app->get("/",function(){

	header("location: /inicio");
	
	exit;

});

$app->get("/inicio",function(){

	Usuarios::verificaAutenticacao();

	$page = new PaginaPadrao();

	$page->setTpl("inicio_sistema",[
		"ultimosMembros" => Membros::ultimosMembrosCadastrados(),
		"limitAniversaritantesMes" => Membros::proximosAniversariantes(),
		"limitAniversaritantesCasamento" => Membros::proximosAniversariantesCasamento(),
	]);
	
	exit;

});

$app->get("/cadastrarnovomembro",function(){

	Usuarios::verificaAutenticacao();

	$page = new PaginaPadrao();

	$page->setTpl("cadastro_novo_membro");
	exit;

});

$app->post("/cadastrarnovomembro",function(){

	Usuarios::verificaAutenticacao();

	Membros::cadastrarMembro($_POST, $_FILES);

	header("Location: /inicio?msg=1");

	exit;

});


$app->get("/editarmembro/:id",function($id){

	Usuarios::verificaAutenticacao();

	$id = descripto($id);

	$page = new PaginaPadrao();

	$page->setTpl("editar_membro",[
		"membro" => Membros::getMembro($id)
	]);

	exit;

});

$app->post("/editarmembro/:id",function($id){

	Usuarios::verificaAutenticacao();

	$id = descripto($id);
	
	Membros::editarMembro($id, $_POST, $_FILES);

	header("Location: /inicio?msg=3");

	exit;

});

$app->get("/excluirmembro/:id",function($id){

	Usuarios::verificaAutenticacao();

	$id = descripto($id);

	Membros::excluirMembro($id);

	header("Location: /inicio?msg=2");

	exit;

});

$app->get("/localizadorfichasmembro",function(){

	Usuarios::verificaAutenticacao();

	$page = new PaginaPadrao();

	$page->setTpl("localizador_fichas_membro",[
		"fichas" => Membros::listarMembros()
	]);
	exit;

});


$app->get("/localizadorfichasobreiros",function(){

	Usuarios::verificaAutenticacao();

	$page = new PaginaPadrao();
	
	$obreiros = [];


	if (isset($_GET['cargo'])){
		$cargo = $_GET['cargo'];
		$obreiros = Membros::getObreirosCargo($cargo);
	} else {
		$obreiros = Membros::getObreiros();
		$cargo = "Todos";
	}

	$page->setTpl("localizador_fichas_obreiro",[
		"obreiros" => $obreiros,
		"cargo" => $cargo
	]);
	exit;

});


$app->get("/localizadoraniversariantes/:mes",function($mes){

	Usuarios::verificaAutenticacao();

	$mes = descripto($mes);

    $page = new PaginaPadrao();

	$page->setTpl("localizador_fichas_aniversariantes",[
		"aniversariantes" => Membros::getAniversariantesMesEscolhido($mes),
		"mes" => $mes
	]);
	exit;

});

$app->get("/localizadoraniversariantescasamento/:mes",function($mes){

	Usuarios::verificaAutenticacao();

	$mes = descripto($mes);

    $page = new PaginaPadrao();

	$page->setTpl("localizador_fichas_aniversariantes_casamento",[
		"aniversariantes" => Membros::getAniversariantesCasamentoMesEscolhido($mes),
		"mes" => $mes
	]);
	
	exit;

});

$app->get("/alterarsenha",function(){

	Usuarios::verificaAutenticacao();

	$page = new PaginaPadrao();

	$page->setTpl('alterar_senha');
	
	exit;

});

$app->post("/alterarsenha",function(){

	Usuarios::verificaAutenticacao();

	Usuarios::mudarSenha($_POST);
	
	exit;

});

?>