<?php 

require_once("vendor/autoload.php");



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

		include_once("/AdminLTE-2.3.11/login.php");
		

	});


	$app->run();
