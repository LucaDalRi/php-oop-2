<?php

require_once __DIR__ . '/Categoria.php';
require_once __DIR__ . '../../traits/NumeroSeriale.php';

class Prodotto
{

    use NumeroSeriale;

    public $nome;
    public $descrizione;
    public $prezzo;
    public $quantita;
    public $categoria;

    function __construct(
        string $nome,
        string $descrizione,
        float $prezzo,
        int $quantita,
        Categoria $categoria
    ) {
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->prezzo = $prezzo;
        $this->quantita = $quantita;
        $this->categoria = $categoria;
    }

    function controlloMagazzino($quantita) {
        if (!is_int($quantita) || $quantita > 1000) {
            throw new Exception('Errore quantità prodotto');
        }
        return $this->$quantita;
    }
    
}

try{
    echo $prova;
}
catch (Exception $e) {
    echo 'Eccezzione: ' . $e->getMessage();
}

?>