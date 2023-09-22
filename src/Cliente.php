<?php
class Cliente{
    private string $nome;
    private string $email;
    private string $senha; 

    //getters/  setters
    public function setNome(string $nome):void{
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

}

