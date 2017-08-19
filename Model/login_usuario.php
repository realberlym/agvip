<?php 

$root = $_SERVER["DOCUMENT_ROOT"];

require_once($root."agvip/config/config.inc.php");

try{

			$mysql = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASS);
			$mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "SELECT * FROM agvip.usuario where nome = 'Renato'";
			$stmt = $mysql->prepare($sql);
			$stmt->execute();
			$resultado_row = $stmt->fetchAll(PDO::FETCH_ASSOC);

			print_r($resultado_row);
		

	}catch(PDOException $e){


			 
			echo $e->getMessage();
		 
		

		exit;


	}
