<?php

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct(){
        var_dump("DESTRUIR");
    }

    public function __toString() {
        return $this->logradouro.", ".$this->numero.", ".$this->cidade;
    }

}

$seuEndereco = new Endereco("R. Miguel Sanches Filho", "1295", "Araçatuba");
var_dump($seuEndereco);
echo "<br>";
echo $seuEndereco;
echo "<br>";
?>