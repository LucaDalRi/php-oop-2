<?php

require_once __DIR__ . '/Prodotto.php';

class Cibo extends Prodotto {
    
    public $gusto;
    public $carne;

    function __construct(
        string $nome,
        string $descrizione,
        float $prezzo,
        int $quantita,
        Categoria $categoria,
        $gusto,
        $carne
    )
    {

        parent::__construct($nome, $descrizione, $prezzo, $quantita, $categoria);

        $this->gusto = $gusto;
        $this->carne = $carne;
        
    }

}