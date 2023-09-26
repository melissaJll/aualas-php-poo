<?php
abstract class Cliente{
//Não é possivel instanciar esta classe. É usada apenas como modelo(pai) para sub-classe herdarem 
    private string $nome;
    private string $email;
    private string $senha; 
    private string $situacao = "a definir"; 


    //Construtor
    public function __construct(){

    }

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


    //Visibilidade protected
    //usado na classe pai e sub-classes
    protected function getSituacao(): string
    {
        return $this->situacao;
    }

    protected function setSituacao(string $situacao): void
    {
        $this->situacao = $situacao;
    }
}

