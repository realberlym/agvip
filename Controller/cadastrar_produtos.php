<?php 

$root = $_SERVER["DOCUMENT_ROOT"];
include_once($root."agvip/Model/cadastrar_produtos.php");


function CadPassagens($tipo, $data_ida, $data_volta, $veiculo, $valor, $num_passageiros, $origem, $destino, $opcao_destino){

	$resultado = Passagens($tipo, $data_ida, $data_volta, $veiculo, $valor, $num_passageiros, $origem, $destino, $opcao_destino);

	var_dump($resultado);

}