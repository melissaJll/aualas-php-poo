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
        <li>Uso do <code> this</code> para acessar recursos dentro da propria classe</li>
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



?>
<hr>
<h2>Dados do objeto(acesso e leitura)</h2>
<h3><?=$clienteA->nome?></h3>
<h3><?=$clienteA->email?></h3>

<!-- Telefones -->
<h3><?=$clienteA->telefones[1]?></h3>
<h3><?=$clienteA->telefones[0]?></h3> 
<!-- ou -->
<h3><?=implode(", ", $clienteA->telefones)?></h3>
<!-- ou -->
<ul>
    <?php foreach($clienteA->telefones as $telefone){?>        
            <li><?=$telefone?></li>
    <?php } ?>
</ul>

<h2>acessando os dados atraves de um método</h2>
<?=$clienteA->exibirDados()?>

<h3><?=$clienteB->nome?></h3>

<pre><?=var_dump($clienteA,$clienteB)?></pre>
    
</body>
</html>