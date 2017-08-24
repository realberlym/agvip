<?php 

require_once("vendor/autoload.php");
include_once("Controller/login_usuario.php");


function rotas_home(){


	$app = new \Slim\Slim();

	//ROTA DE PAGINA HOME
	$app->get('/', function(){

		include_once("home_front.php");

	});

	//ROTA DE PAGINA HOME
	$app->get('/home', function(){

		include_once("home_front.php");

	});

	//ROTA DE PAGINA HOME
	$app->get('/inicio', function(){

		include_once("home_front.php");

	});

	//ROTA DE PAGINA ADMIN
	$app->get('/admin-te', function(){

	
		include_once("AdminLTE-2.3.11/login.php");
		

	});

	//ROTA DE LOGIN
	$app->post('/auth_login', function(){


		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];

		loginUsuario($usuario, $senha);
		
	});


	$app->run();


}




 ?>