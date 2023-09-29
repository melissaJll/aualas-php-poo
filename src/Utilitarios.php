<?php
namespace Tabajara;
class Utilitarios {
    //Propriedade estático
    public static string $dataAtual;

    //Método static
    public static function obterData(){
        //atributo estático então não funciona this->, apenas o self
        self::$dataAtual = date("d/m/Y");
        //dá valor ao atributo $dataAtual que estva vazio
    }

    public static function definirAtendimento(int $idade){
        return $idade >= 60 ? "prioridade" : "normal";
    }
}
?>