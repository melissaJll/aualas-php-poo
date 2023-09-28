<?php 
require_once "Cliente.php";
class PessoaJuridica extends Cliente{
    private int $anoFundacao;
    private string $cnpj;
    private string $nomeFantasia;

    public function __construct() {
        $this->setSituacao("Em análise"); // setter protegido existente em cliente
    }
    
    public function exibirDados(): void
    {
        //Permite acesso aos recursos da classe pai
        parent::exibirDados();
        echo "<p> Nome fantasia: $this->nomeFantasia</p>";
    }


    public function setAnoFundacao(int $anoFundacao): void
    {
        $this->anoFundacao = $anoFundacao;

    }
    public function getAnoFundacao(): int
    {
        return $this->anoFundacao;
    }



    public function setCnpj(string $cnpj): void
    {
        $this->cnpj = $cnpj;

    }

    public function getCnpj(): string
    {
        return $this->cnpj;
    }



    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }

    public function setNomeFantasia(string $nomeFantasia): void
    {
        $this->nomeFantasia = $nomeFantasia;
    }
}