<?php

class Pessoa {

    public $nome;//Atributo

    public function falar(){//Método

        return "O meu nome é ". $this->nome;
    
    }
}

$wendrew = new Pessoa();
$wendrew ->nome = "Wendrew Gomes";
echo $wendrew ->falar();

?>