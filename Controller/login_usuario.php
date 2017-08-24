<?php 

$root = $_SERVER["DOCUMENT_ROOT"];
include_once($root."agvip/Model/login_usuario.php");


function loginUsuario($usuario, $senha){

	
	$result = loginModel($usuario, $senha);
	
	
	if($result == 1){

		session_start();

		$_SESSION['logado'] = 1 ;

		include_once("http://13.56.14.158/agvip/admin");

	}else{
		
		include_once("AdminLTE-2.3.11/login.php");
		
	}

}
