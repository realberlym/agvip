<?php 

require_once("vendor/autoload.php");
include_once("Controller/login_usuario.php");
include_once("Controller/cadastrar_produtos.php");


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

		session_start();

		$_SESSION['alert'] = "";

		if(!isset($_SESSION['logado']) or $_SESSION['logado'] === 0){

		  include_once("AdminLTE-2.3.11/login.php");
		  

		}elseif ($_SESSION['logado'] == 1) {

			include_once("AdminLTE-2.3.11/index.php");
		}	  

		
	});


	$app->get('/logout', function(){

		session_start();
		
		$_SESSION['logado'] = 0 ;

		include_once("AdminLTE-2.3.11/login.php");


	});


	//ROTA DE LOGIN
	$app->post('/auth_login', function(){


		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];

		loginUsuario($usuario, $senha);

		
	});

	$app->post('/salva_passagens', function(){


		$tipo = $_POST['tipo'];
		$data_ida = $_POST['data_ida'];
		$data_volta = $_POST['data_volta'];
		$veiculo = $_POST['veiculo'];
		$valor = $_POST['valor'];
		$num_passageiros = $_POST['num_passageiros'];
		$origem = $_POST['origem'];
		$destino = $_POST['destino'];
		$opcao_destino = $_POST['opcao_destino'];


		$resultado = CadPassagens($tipo, $data_ida, $data_volta, $veiculo, $valor, $num_passageiros, $origem, $destino, $opcao_destino);

		if($resultado == true){

			include_once("AdminLTE-2.3.11/Produtos/cadastro/cad_passagens.php");
			$_SESSION['cadastrado'] = "<div class='alert alert-success'>
  										 <strong>Successo!</strong> Cadastro incluido.
									   </div>";

		}

		
	});


	$app->get('/admin-te/passagens', function(){

		session_start();
		
		$_SESSION['logado'] = 0 ;

		include_once("AdminLTE-2.3.11/Produtos/passagens.php");


	});

	$app->get('/admin-te/cad_passagens', function(){

		session_start();
		
		$_SESSION['logado'] = 0 ;

		include_once("AdminLTE-2.3.11/Produtos/cadastro/cad_passagens.php");


	});

	$app->run();


}




 ?>