<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 2 </title>
</head>
<body>
    <h1>PHP com POO - Exemplo 2</h1>
    <hr>

    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Acesso as propriedades</li>
        <li>Atribuição e leitura de dados</li>
        <li>Chamada de método</li>
    </ul>

<?php require_once "src/Cliente.php";
//criar instancia de objetos
$clienteA = new Cliente;
$clienteB = new Cliente;

//Acesso e atribuição
//equivalente ao . de acesso
$clienteA->nome = "Hudson";
$clienteB->nome = "Hannah";
$clienteA->telefones = ["96262-8886","11-3476-3516"];
$clienteA->email = "hannah@email.com";
$clienteA->senha = password_hash("123abc", PASSWORD_DEFAULT);


//Exibição
?>
<hr>
<h2>Dados do objeto(acesso e leitura)</h2>
<h3><?=$clienteA->nome?></h3>
<h3><?=$clienteB->nome?></h3>

<pre><?=var_dump($clienteA,$clienteB)?></pre>
    
</body>
</html>