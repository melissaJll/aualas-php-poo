<?php
class Cliente{
    public string $nome;
    public string $email ="";
    public string $senha;
    public array $telefones;

    // Forma de inicialização de objetos, exigindo a tribuição de dados no momento de criar o objeto/instancia. O construtor é de sempre chamado de forma automática assim que o objeto é criado

    public function __construct(string $name, string $enderecoEmail) {
        //atribuindo aos atributos os valores que serão inseridos nos parametros
        //this para acessar os atributos da classe
        $this->nome = $name;
        $this->email =  $enderecoEmail;
    }


}

