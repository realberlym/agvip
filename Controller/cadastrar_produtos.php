<?php 

$root = $_SERVER["DOCUMENT_ROOT"];
include_once($root."agvip/Model/cadastrar_produtos.php");


function CadPassagens($tipo, $data_ida, $data_volta, $veiculo, $valor, $num_passageiros, $origem, $destino, $opcao_destino){

	$resultado = Passagens($tipo, $data_ida, $data_volta, $veiculo, $valor, $num_passageiros, $origem, $destino, $opcao_destino);

	if($resultado != true){

		include_once("AdminLTE-2.3.11/Produtos/cadastro/cad_passagens.php");
	}

	return true;

}