<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 10 </title>
</head>
<body>
    <h1>PHP com POO - Exemplo 10</h1>
    <hr>

    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Composer: gerenciador de dependência PHP</li>
        <li>Configurar o projeto com Composar usando <code>composer.json</code></li>
        <li>Autoload de classes para evitar muitos requires e/ou require manuais</li>
    </ul>

<?php
use Fornecedor\Pagamento;
use Prestador\Pagamento as PrestadorPagamento;
use Tabajara\{MEI , PessoaFisica as PF , PessoaJuridica as PJ};

require_once "src/fornecedores/Pagamento.php";
require_once "src/prestadores/Pagamento.php";

require_once "src/PessoaFisica.php";
require_once "src/PessoaJuridica.php";
require_once "src/MEI.php";

 $pagamentoFornecedor = new Pagamento;
$pagamentoPrestador = new PrestadorPagamento;

$clientePF = new PF;
$clientePJ = new PJ;
$clienteMEI = new MEI;

$clientePF->setNome("Tales");
$clientePF->setIdade(23);
$clientePF->setEmail("tales@email.com");
$clientePF->setSenha("234t");

$clientePJ->setNomeFantasia("Armaduras S/A");
$clientePJ->setCnpj("00.010.000/0001-10");
$clientePJ->setAnoFundacao(2002);

$clienteMEI->setNome("Maria");
$clienteMEI->setAreaAtuacao("Artesanato");
?>

<pre><?=var_dump($pagamentoFornecedor)?></pre>
<pre><?=var_dump($pagamentoPrestador)?></pre>

<h3>Cliente Pessoa Fisica</h3>
<ul>
    <li>Nome: <?=$clientePF->getNome()?></li>
    <li>Idade: <?=$clientePF->getIdade()?></li>
    <li>Email: <?=$clientePF->getEmail()?></li>
</ul>

<h3>Cliente Pessoa Juridica</h3>
<ul>
    <li>Nome Fantasia: <?=$clientePJ->getNomeFantasia()?></li>
    <li>CNPJ: <?=$clientePJ->getCnpj()?></li>
    <li>Ano de Fundação: <?=$clientePJ->getAnoFundacao()?></li>
</ul>

<h3>MEI</h3>
<ul>
    <li>Nome : <?=$clienteMEI->getNome()?></li>
    <li>Area de Atuacao: <?=$clienteMEI->getAreaAtuacao()?></li>
</ul>

</body>
</html>