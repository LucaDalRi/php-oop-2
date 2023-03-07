<?php

require_once __DIR__ . '/Categoria.php';

class Prodotto
{

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
}
