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
        <li>Namespaces: agrupamento e organização de recursos (classes, funções, constantes)</li>
        <li>Prevenção de conflitos entre classes de mesmo nome</li>
        <li>Configurar e usar <code>namespaces</code> e <code>alias</code></li>
    </ul>

<?php
//Gerado pelo VsCode
use Fornecedor\Pagamento;
use Prestador\Pagamento as PrestadorPagamento;

/*use Tabajara\MEI;
use Tabajara\PessoaFisica;
use Tabajara\PessoaJuridica;*/

//Lista de Use
use Tabajara\{MEI , PessoaFisica as PF , PessoaJuridica as PJ};

require_once "src/fornecedores/Pagamento.php";
require_once "src/prestadores/Pagamento.php";

require_once "src/PessoaFisica.php";
require_once "src/PessoaJuridica.php";
require_once "src/MEI.php";

/*Forma 1 de como usar classes com namespaces
 $pagamentoFornecedor = new Fornecedor\Pagamento;
 $pagamentoPrestador = new Prestador\Pagamento; 
namespace\classe */

/*Forma 2 de como usar classes com namespaces
 use Fornecedor\Pagamento;
 use Prestador\Pagamento as  PrestadorPagamento;
 $pagamentoFornecedor = new Pagamento;
 $pagamentoPrestador = new PrestadorPagamento; 
 chama alias ao inves da classe Pagamento*/




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