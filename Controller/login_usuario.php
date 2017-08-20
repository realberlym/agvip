<?php 

$root = $_SERVER["DOCUMENT_ROOT"];
require_once($root."agvip/Model/login_usuario.php");

function loginUsuario($usuario, $senha){


	loginModel($senha, $usuario);


}

