<?php
// Este "require" importará o arquivo de segurança "secure.php" para este arquivo local;
require('./sorurce.php');

// Este arquivo abrirá o seguinte arquivo csv chamado "pokemons.csv" pelo formato de leitura
$fp = fopen("pokemons.csv", "r");
?>

<!-- Este arquivo -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina do sistema pokemons</title>
</head>
<body>
    <!-- Esta âncora está direcionado ao arquivo de deslogamento do sistema -->
    <a href="../logout.php">Logout</a>

    <h1>CRUD de pokemons</h1>
    <table>
        <!-- Campos para os atributos de pokemons -->
        <tr>
            <th>Name</th>
            <th>Level</th>
            <th>Friendly</th>
            <th></th>
        </tr>

        <!-- Este laço irá listagem obterá um arquivo csv através da variável "$fp"
             que abrirá um arquivo csv e comparar se ele é falso,
             e vai armazenar atravé de uma listagem de indices de vetores -->
        <?php while (($row = fgetcsv($fp)) !== false): ?>
            <tr>
                <td><?= $row[0] ?></td>
                <td><?= $row[1] ?></td>
                <td><?= $row[2] == 1 ? 'yes' : 'no' ?></td>
            </tr>
        <?php endwhile ?>
        
    </table>
</body>
</html>