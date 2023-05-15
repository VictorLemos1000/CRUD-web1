<?php
/** 
 * Nesta linha será feito um 'require' para importar o arquivo "secure.php"
 * para este arquivo local que é "delete.php" 
 */ 
    require('secure.php');

    /**
     * Esta variável "nome" pegará da "URL" de
     * autenticação através de uma "API" dentro
     * do arquivo csv "users.csv" para pegar nomes,
     * do armazenamento do array;
     */
    $name = $_GET['name'];

    /**
     * Nesta linha de código está sendo instanciado
     * uma variável chamada "temp" para receber nomes
     * de forma temporal; 
     */
    $temp = tempnam(".", "");

    /**
     * Nesta linha de código está sendo instanciada
     * uma variável que atribuirá uma arbertura de 
     * arquivo que neste caso é "pokemons.csv" em formato de leitura
     */
    $fpOrigin = fopen("pokemons.csv", "r");

    /**
     * Nesse trecho de código estar sendo instanciada
     * uma variável chamada "$fpTemp" para abrir um
     * arquivo temporário em formato de escrita;
     */
    $fpTemp = fopen($temp, "w");

    /**
     * Este laço irá obter o arquivo "pokemons.csv"
     * que é o arquivo 'Origin' do sistema;
     */
    while (($row = fgetcsv($fpOrigin))) {
      # Esta condição vai verificar 
      /**
       * Se a linha de indice 0 do vetor e
       * ver é diferente do nome do pokémon
       */ 
      if ($row[0] != $name) {
         # code...
         // Neste escopo vai ser inserido o arquivo temporário com a linha do arquivo de origem
         fputcsv($fpTemp, $row);
      }
    }

    // Estas duas linha de código irão fechar o arquivo 'Origem' e o de 'Tempo'
    fclose($fpOrigin);
    fclose($fpTemp);

    // Esta linha vai "renomear" o arquivo temporário do csv do crud.
    rename($temp, "pokemons.csv");

    // Este cabeçalho localizará o arquivo do CRUD do sistema de pokemons a tag de DELETE
    header("location: ./index.php");
?>