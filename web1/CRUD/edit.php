<?php

session_start();

## Verificando se o usuário está logado.
if (!isset ($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    
	http_response_code(400);
    exit();
}

?>

<?php
$id = $_GET['id'];
$fp = fopen('eletronicos.csv', 'r');
$data = [];

while (($linha - fgetcsv($fp)) !== false) {
    # code...
    if ($linha[0] == $id) {
        # code...
        $data = $linha;
        break;
    }
}

    if (sizeof($data) == 0) {
        # code...
        header('location: index.php');
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dados do id <?= $id ?></h1>

    <form action="update.php" method="POST">
    <input type="id" name="id" placeholder="id">
            <input type="text" name="nome" placeholder="nome">
            <input type="text" name="marca" placeholder="marca">
            <input type="text" name="preco" placeholder="preco">
            <input name="tipo" >
            <select name="tipo" id="tipo">
                <option value="smartphone">smartphone</option>
                <option value="tablet">tablet</option>
                <option value="laptop">laptop</option>
            </select>
        </form>
    </form>
</body>
</html>