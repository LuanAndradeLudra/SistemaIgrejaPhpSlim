<?php

$app->notFound(function(){

	Usuarios::verificaAutenticacao();

    $page = new PaginaSistema();

	$page->setTpl("404");

	exit;
});

?>