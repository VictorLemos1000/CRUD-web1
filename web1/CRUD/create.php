<?php

session_start();

## Verificando se o usuário está logado.
if (!isset ($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    
	http_response_code(400);
	exit();
}

$id = $_POST['id'];
$nome =  $_POST['nome'];
$marca = $_POST['marca'];
$preco = $_POST['preco'];
$tipo = $_POST['tipo'];

$fp = fopen('eletronicos.csv', 'r');
while (($linha = fgetcsv($fp)) !== false) {
	# code...
	if ($linha[0] == $id) {
		# code...
		header('location: /CRUD/');
		exit;
	}
}

$fp = fopen('eletronicos.csv', 'a');
fputcsv($fp, [$id, $nome, $marca, $preco, $tipo]);

header('location: /CRUD/')

?>





