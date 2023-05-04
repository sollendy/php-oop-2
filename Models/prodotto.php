<?php
class Prodotto {
    public $immag;
    public $nome;
    public $prezzo;
    public $categoria;
    function __construct(string $immag, string $nome, int $prezzo, Categoria $categoria)
    {
        $this->immag = $immag;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
    }
}