<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 4 </title>
</head>
<body>
    <h1>PHP com POO - Exemplo 6</h1>
    <hr>

    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Polimorfismo</li>
        <li>Sobreposição de métodos</li>

    </ul>

    <hr>
    <h3>Pessoa Fisica</h3>

<?php
require_once "src/pessoaFisica.php";
$ClientePF = new PessoaFisica;
//$ClientePF->setNome("PF");
$ClientePF->setNome("Nina");
$ClientePF->setEmail("nina@email.com");
$ClientePF->setIdade(15);
$ClientePF->setCpf("325.132.579-00");
$ClientePF->exibirDados();
?>

<pre><?=var_dump($ClientePF)?></pre>
    <hr>
    <h3>Pessoa Jurídica</h3>

<?php
require_once "src/pessoaJuridica.php";
$ClientePJ = new PessoaJuridica;

$ClientePJ->setNome("Beltrano S/A");
$ClientePJ->setEmail("belt@email.com");
$ClientePJ->setAnoFundacao(2000);
$ClientePJ->setCnpj("32.088.0001/000.41");
$ClientePJ->setNomeFantasia("BA Informática");
?>
<pre><?=var_dump($ClientePJ)?></pre>

<hr>

<h2>Saída de dados</h2>
<section>
    <?=$ClientePF->exibirDados()?>
</section>
<section>
    <?=$ClientePJ->exibirDados()?>
</section>


</body>
</html>