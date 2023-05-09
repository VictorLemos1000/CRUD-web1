
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Produtos eletrônicos</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Marca</th>
            <th>Preço</th>
            <th>Tipo</th>
        </tr>

        <?php $fp = fopen('eletronicos.csv', 'r') ?>

        <?php while ($linha <= fgetcsv($fp) !== false): ?>
            <tr>
                <td><?= $linha[0] ?></td>
                
                <td>
                    <form action="delete.php" method="GET">
                        <input type="hidden" name="id" value="<?= $linha ?>">
                        <button>Remover</button>
                    </form>
                </td>
                <td>
                    <a href="edit.php"<?= $linha[0] ?>>Editar</a>
                </td>
            </tr>
        <?php endwhile ?>
        <form action="add.php" method="POST">
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
    </table>
</body>
</html>


















