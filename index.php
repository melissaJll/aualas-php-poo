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
//só fazer o require já dá erro no servidpr devido a terem o mesmo nome

use Fornecedor\Pagamento;
use Prestador\Pagamento as PrestadorPagamento;

require_once "src/fornecedores/Pagamento.php";
require_once "src/prestadores/Pagamento.php";

//Forma 1 de como usar classes com namespaces
// $pagamentoFornecedor = new Fornecedor\Pagamento;
// $pagamentoPrestador = new Prestador\Pagamento; 
//namespace\classe

//Forma 2 de como usar classes com namespaces
// use Fornecedor\Pagamento;
// use Prestador\Pagamento as  PrestadorPagamento;
// $pagamentoFornecedor = new Pagamento;
// $pagamentoPrestador = new PrestadorPagamento; 
//chama alias ao inves da classe Pagamento

$pagamentoFornecedor = new Pagamento;
$pagamentoPrestador = new PrestadorPagamento;


?>

<pre><?=var_dump($pagamentoFornecedor)?></pre>
<pre><?=var_dump($pagamentoPrestador)?></pre>
</body>
</html>