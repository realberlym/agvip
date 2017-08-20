<?php 

$root = $_SERVER["DOCUMENT_ROOT"];
require_once($root."agvip/config/config.inc.php");

function loginModel($senha_post, $usuario_post){


	try{

			$mysql = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);
			$mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "SELECT * FROM agvip.usuario where nome = '$usuario_post'";
			$stmt = $mysql->prepare($sql);
			$stmt->execute();
			$resultado_row = $stmt->fetchAll(PDO::FETCH_ASSOC);

			$senha = $resultado_row[0]['senha'];

			password_verify($)
		

	}catch(PDOException $e){


			 
			echo "ERRO MYSQL: ".$e->getMessage();
		 
		

		exit;


	}


}

	
