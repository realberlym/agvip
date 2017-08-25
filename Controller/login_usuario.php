<?php 

$root = $_SERVER["DOCUMENT_ROOT"];
include_once($root."agvip/Model/login_usuario.php");


function loginUsuario($usuario, $senha){

	
	$result = loginModel($usuario, $senha);
	
	
	if($result == 1){

		session_start();

		$_SESSION['logado'] = 1 ;

		include_once("AdminLTE-2.3.11/index.php");

	}else{

		session_start();

		$_SESSION['alert'] = "<div class='alert alert-danger'>
							    <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
							  </div>";
		
		include_once("AdminLTE-2.3.11/login.php");
		
	}

}
