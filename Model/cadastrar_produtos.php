<?php

$root = $_SERVER["DOCUMENT_ROOT"];
require_once($root."agvip/config/config.inc.php");


function CadPassagens($tipo, $data_ida, $data_volta, $veiculo, $valor, $num_passageiros, $origem, $destino, $opcao_destino){

	try{

		$mysql = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);
		$mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO Produtos (tipo, data_ida, data_volta, veiculo, valor, num_passageiros, origem, destino, opcao_destino)
				VALUES($tipo, $data_ida, $data_volta, $veiculo, $valor, $num_passageiros, $origem, $destino, $opcao_destino)";
		$stmt = $mysql->prepare($sql);
		$stmt->execute();


	}catch(PDOException $e){

			echo "ERRO MYSQL: ".$e->getMessage();

		exit;
	}


	return true;
}