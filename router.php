<?php 

require_once("vendor/autoload.php");



function rotas_home(){


	$app = new \Slim\Slim();


	$app->get('/', function(){

		include_once("home_front.php");

	});




	$app->get('/admin', function(){

		include_once("admin/login.php");
		

	});


	


	$app->run();


}




 ?>