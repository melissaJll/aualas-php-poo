<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 4 </title>
</head>
<body>
    <h1>PHP com POO - Exemplo 4</h1>
    <hr>

    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Encapsulamento</li>
        <li>Modificadores de visibilidade(public, private, protected)</li>
    </ul>

<?php require_once "src/Cliente.php";
$ClienteA = new Cliente;
//Usando setter para definir nome
$ClienteA->setNome("Ana");

?>
<p><?= $ClienteA->getNome() ?></p>
<pre><?=var_dump($ClienteA)?></pre>

</body>
</html>