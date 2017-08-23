<?php 

$root = $_SERVER["DOCUMENT_ROOT"];
include_once($root."agvip/Model/login_usuario.php");


function loginUsuario($usuario, $senha){

	/*echo $usuario."<br>";
	echo $senha."<br>";
	*/
	
	loginModel($usuario, $senha);
	
	
}

