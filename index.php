<?php 

	require_once("router.php");

	session_start();

	$_SESSION['logado'] = 0;

	rotas_home();

 ?>