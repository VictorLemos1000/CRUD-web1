<?php

session_start();

## Verificando se o usuário está logado.
if (!isset ($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    
    header("location: /index.php");
    exit();
}

?>