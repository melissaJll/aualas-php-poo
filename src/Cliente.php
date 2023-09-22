<?php
class Cliente{
    public string $nome;
    public string $email ="";
    public string $senha;
    public array $telefones;
    
    //métodos
    public function exibirDados(): void{
        echo "<section>";
        echo "<p> $this->email </p>";
        echo "<section>";
    }
}