<?php 

trait NumeroSeriale {

    public $numeroId = 123321;
    public $codiceABarre = '||||||';

    function getNumeroSeriale() {
        return "Numero: $this->numeroid , Codice: $this->codiceABarre";
    }


}



?>