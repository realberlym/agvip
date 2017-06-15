<?php 
// Dados da conexão com o banco de dados
define('SERVER', 'localhost');
define('DBNAME', 'agvip');
define('USER', 'root');
define('PASSWORD', '');

// Recebe os parâmetros enviados via GET
$acao = (isset($_GET['acao'])) ? $_GET['acao'] : '';
$parametro = (isset($_GET['parametro'])) ? $_GET['parametro'] : '';

// Configura uma conexão com o banco de dados
$opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
$conexao = new PDO("mysql:host=".SERVER."; dbname=".DBNAME, USER, PASSWORD, $opcoes);

// Verifica se foi solicitado uma consulta para o autocomplete
if($acao == 'autocomplete'):
	$sql = "SELECT ponto_turistico, bairro, cidade, estado, pais FROM localizacao WHERE ponto_turistico LIKE '" .$parametro. "%' OR bairro LIKE '" .$parametro. "%' OR cidade LIKE '" .$parametro. "%' OR estado LIKE '".$parametro."%'";
	$stm = $conexao->prepare($sql);
	$stm->execute();
	$dados = $stm->fetchAll(PDO::FETCH_OBJ);
	$json = json_encode($dados);
	echo $json;
endif;

if($acao == 'consulta'):
	$sql = "SELECT ponto_turistico, bairro, cidade, estado, pais FROM localizacao WHERE ponto_turistico LIKE '" .$parametro. "%' OR bairro LIKE '" .$parametro. "%' OR cidade LIKE '" .$parametro. "%' OR estado LIKE '".$parametro."%'";

	$stm = $conexao->prepare($sql);
	$stm->execute();
	$dados = $stm->fetchAll(PDO::FETCH_OBJ);
	$json = json_encode($dados);
	echo $json;
endif;