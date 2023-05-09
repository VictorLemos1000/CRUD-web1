<?php

session_start();

## Verificando se o usuário está logado.
if (!isset ($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    
	http_response_code(400);
    exit();
}
?>

<?php
$id = $_POST['id'];
$nome =  $_POST['nome'];
$marca = $_POST['marca'];
$preco = $_POST['preco'];
$tipo = $_POST['tipo'];

$tempName = tempnam('.', '');

sleep(5);

$temp = fopen($tempName, 'w');
$orig = fopen('eletronicos.csv', 'r');
while (($linha = fgetcsv($orig)) !== false) {
    if ($linha[0] == $id) {
        continue;
    }
    fputcsv($temp, $linha);
}
fclose($temp);
fclose($orig);

sleep(5);

//  dados relevantes devem ficar dentro do arquivo temp

rename($tempName, 'eletronicos.csv');

header('location: index.php');

?>