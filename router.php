<?php 

require_once("vendor/autoload.php");



function rotas_home(){


	$app = new \Slim\Slim();


	$app->get('/', function(){

		include_once("home_front.php");

	});




	$app->get('/login', function(){

		require_once("login.php");

		

	});

	$app->run();


}




 ?>