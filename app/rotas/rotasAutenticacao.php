<?php

$app->get("/login",function(){

	$page = new PaginaAutenticacao();

	$page->setTpl("pagina_login");

	exit;

});

$app->post("/login",function(){

	Usuarios::loginUsuario($_POST);

	exit;

});

$app->get("/logout",function(){

	Usuarios::verificaAutenticacao();

	session_destroy();

	header('Location: /login?msg=2');

	exit;

});

?>