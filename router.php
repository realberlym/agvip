<?php 

require_once("vendor/autoload.php");



function rotas_home(){


	$app = new \Slim\Slim();


	$app->get('/', function(){

		include_once("home_front.php");

	});

	$app->get('/home', function(){

		include_once("home_front.php");

	});

	$app->get('/inicio', function(){

		include_once("home_front.php");

	});


	$app->get('/admin', function(){

		include_once("/Admin/login.php");
		

	});


	$app->run();


}




 ?>