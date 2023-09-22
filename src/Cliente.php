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


    public function setEmail(string $novoEmail):void{
        $this->email = filter_var($novoEmail, FILTER_SANITIZE_EMAIL);
    }

    public function getEmail(){
        return $this->email;
    }

    public function setSenha(string $novaSenha):void{
    $this->senha = password_hash($novaSenha, PASSWORD_DEFAULT);
    }

    public function getsenha(){
        return $this->senha;
    }

}

