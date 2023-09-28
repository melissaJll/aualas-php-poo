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
        <li>Acesso direto sem a necessidade de instanciar</li>
        <li>Uso do <code>self::</code> para acessar (dentro da classe) os atributo estáticos</li>
    </ul>

<?php
require_once "src/PessoaFisica.php";
$cliente1 = new PessoaFisica;
$cliente1->setNome("Marcio");
$cliente1->setIdade(65);

$cliente2 = new PessoaFisica;
$cliente2->setNome("Icaro");
$cliente2->setIdade(24);

require_once "src/Utilitarios.php";
//Chamada de método sem intancia da classe
Utilitarios::obterData();

?>
<h2>Atendimento do dia
<?=Utilitarios::$dataAtual?></h2>

<h3>Cliente: <?=$cliente1->getNome()?></h3>
<p>Idade: <?=$cliente1->getIdade()?></p>
<p>Atendimento: <?=Utilitarios::definirAtendimento($cliente1->getIdade())?></p>

<h3>Cliente: <?=$cliente2->getNome()?></h3>
<p>Idade: <?=$cliente2->getIdade()?></p>
<p>Atendimento: <?=Utilitarios::definirAtendimento($cliente2->getIdade())?></p>


</body>
</html>