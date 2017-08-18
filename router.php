<?php 

require_once("vendor/autoload.php");



function rotas_home(){


	$app = new \Slim\Slim();


	$app->get('/', function(){

		include_once("home_fron.php");

	});


	$app->get('/admin', function(){

		include_once("/AdminLTE-2.3.11/login.php");
		

	});


	


	$app->run();


}




 ?>