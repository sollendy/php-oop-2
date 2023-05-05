<?php
require_once './traits/qualita.php';
class Prodotto {
    use Qualita;
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