<?php 

require_once("vendor/autoload.php");



function rotas_home(){


	$app = new \Slim\Slim();


	$app->get('agvip/', function(){

		include_once("home_front.php");

	});

	$app->get('agvip/home', function(){

		include_once("home_front.php");

	});

	$app->get('agvip/inicio', function(){

		include_once("home_front.php");

	});


	$app->get('agvip/admin', function(){

		include_once("/AdminLTE-2.3.11/login.php");
		

	});


	$app->run();


}




 ?>