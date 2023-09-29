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
//só fazer o require já dá erro no servidpr devido a terem o mesmo nome
require_once "src/fornecedores/Pagamento.php";
require_once "src/prestadores/Pagamento.php";

?>
</body>
</html>