<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1 </title>
</head>
<body>
    <h1>PHP com POO - Exemplo 1</h1>
    <hr>

    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Criação de classe</li>
        <li>Importação de arquivo de classe</li>
        <li>Criação de objetos</li>
    </ul>

<?php require_once "src/Cliente.php";
//criar instancia de objetos
$clienteA = new Cliente;
$clienteB = new Cliente;
?>

<pre><?=var_dump($clienteA,$clienteB)?></pre>
    
</body>
</html>