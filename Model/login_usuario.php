<?php 

$root = $_SERVER["DOCUMENT_ROOT"];
require_once($root."agvip/config/config.inc.php");


function loginModel($usuario, $senha){



	try{

			$mysql = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);
			$mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "SELECT * FROM usuario where email = '$usuario'";
			$stmt = $mysql->prepare($sql);
			$stmt->execute();
			$resultado_row = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$senha_result = $resultado_row[0]['senha'];

			if(password_verify($senha, $senha_result)){

				echo "Entrou";
			}else{

				echo "Não é a Senha";
			}
			
			
			

	}catch(PDOException $e){


			 
			echo "ERRO MYSQL: ".$e->getMessage();
		 
		

		exit;


	}


}

	
