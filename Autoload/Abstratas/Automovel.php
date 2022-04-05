<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}


abstract class Automovel implements Veiculo {

    public function acelerar($x){
        echo "O veículo acelerou até ". $x ."km/h";
    }

    public function frenar($y) {
        echo "O veículo frenou até ". $y . "km/h";
    }

    public function trocarMarcha($e) {
        echo "O veículo engatou a marcha ". $e;
    }

}


?>