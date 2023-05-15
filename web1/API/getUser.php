<?php
/**
 * Este é um arquivo para pegar as variáveis
 * "email", "password" e "name" do arquivo
 * fora da pasta da API.
 */

// Esta variável é para abrir o arquivo "users.csv" em modo "r" ou seja o modo de leitura;
$fp = fopen("users.csv", "r");

// Esta variável vai armazenar os dados 'email', 'password' e 'name';
$data = [];

/**
 * Este laço foi criado uma variável "linha" para
 * extrair dados do arquivo "users.csv" e comparar,
 * se ele é diferente, e o escopo do laço será a
 * a listagem de cada campo, para gerar dados e
 * com isso obter informações atravé do arquivo;
 */
while(($row = fgetcsv($fp)) !== false) {
    #escopo do laço: um array de dados para listar seus atributos a seus indices vetoriais
    $data[] = [
        'email' => $row[0],
        'password' => $row[1],
        'name' => $row[2],
    ];
}

// Esta linha abaixo está a codificar os dados do arquivo "user.csv" em 'json'.
echo json_encode($data);
?>