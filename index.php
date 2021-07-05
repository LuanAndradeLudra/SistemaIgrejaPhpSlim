<?php 

SESSION_START();

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

require_once("vendor/autoload.php");
require_once("app/php/classes_paginas/PaginaPadrao.php");
require_once("app/php/classes_paginas/PaginaFicha.php");
require_once("app/php/classes_paginas/PaginaSistema.php");
require_once("app/php/classes_paginas/PaginaAutenticacao.php");
require_once("app/php/classes_sistema/Sql.php");
require_once("app/php/classes_sistema/Functions.php");
require_once("app/php/classes/Membros.php");
require_once("app/php/classes/Usuarios.php");

use \Slim\Slim;

$app = new Slim();

$app->config('debug', true);

require_once("app/rotas/rotasAutenticacao.php");
require_once("app/rotas/rotasFichas.php");
require_once("app/rotas/rotasPaginas.php");
require_once("app/rotas/rotasSistema.php");

$app->run();

 ?>