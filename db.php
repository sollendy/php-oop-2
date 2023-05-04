<?php
require_once './Models/Categoria.php';
require_once './Models/Prodotto.php';
// $prodotti = [
//     "manzo" => new Prodotto("https://fastly.picsum.photos/id/617/200/200.jpg?hmac=hA4FoiLXjwqHcRxZZSlEI_ruilvP8o_m7FsJ-JD4t4I", "Carne di manzo", 10, new Categoria("cani", "fa-solid fa-dog")),
//     "salmone" => new Prodotto("https://fastly.picsum.photos/id/617/200/200.jpg?hmac=hA4FoiLXjwqHcRxZZSlEI_ruilvP8o_m7FsJ-JD4t4I", "filetti di salmone", 10, new Categoria("gatti", "fa-solid fa-cat")),
//     "cuccia" => new Prodotto("https://fastly.picsum.photos/id/617/200/200.jpg?hmac=hA4FoiLXjwqHcRxZZSlEI_ruilvP8o_m7FsJ-JD4t4I", "cuccia per cani gotica", 500, new Categoria("cani", "fa-solid fa-dog")),
//     "casetta" => new Prodotto("https://fastly.picsum.photos/id/617/200/200.jpg?hmac=hA4FoiLXjwqHcRxZZSlEI_ruilvP8o_m7FsJ-JD4t4I", "casetta per gatti vittoriana", 700, new Categoria("gatti", "fa-solid fa-cat")),
//     "dischetto" => new Prodotto("https://fastly.picsum.photos/id/617/200/200.jpg?hmac=hA4FoiLXjwqHcRxZZSlEI_ruilvP8o_m7FsJ-JD4t4I", "dischetto per cani", 20, new Categoria("cani", "fa-solid fa-dog")),
//     "gomitolo" => new Prodotto("https://fastly.picsum.photos/id/617/200/200.jpg?hmac=hA4FoiLXjwqHcRxZZSlEI_ruilvP8o_m7FsJ-JD4t4I", "gomitolo per gatti", 30, new Categoria("gatti", "fa-solid fa-cat")),
// ];
// var_dump($prodotti);
$categorie = [
    "cani" => new Categoria("cani", "fa-solid fa-dog"),
    "gatti" => new Categoria("gatti", "fa-solid fa-cat"),
];
$manzo = new Prodotto("https://fastly.picsum.photos/id/617/200/200.jpg?hmac=hA4FoiLXjwqHcRxZZSlEI_ruilvP8o_m7FsJ-JD4t4I", "Carne di manzo", 10, $categorie['cani']);
$salmone = new Prodotto("https://fastly.picsum.photos/id/617/200/200.jpg?hmac=hA4FoiLXjwqHcRxZZSlEI_ruilvP8o_m7FsJ-JD4t4I", "filetti di salmone", 15, $categorie['gatti']);
$cuccia = new Prodotto("https://fastly.picsum.photos/id/617/200/200.jpg?hmac=hA4FoiLXjwqHcRxZZSlEI_ruilvP8o_m7FsJ-JD4t4I", "cuccia per cani gotica", 500, $categorie['cani']);
$casetta = new Prodotto("https://fastly.picsum.photos/id/617/200/200.jpg?hmac=hA4FoiLXjwqHcRxZZSlEI_ruilvP8o_m7FsJ-JD4t4I", "casetta per gatti vittoriana", 700, $categorie['gatti']);
$dischetto = new Prodotto("https://fastly.picsum.photos/id/617/200/200.jpg?hmac=hA4FoiLXjwqHcRxZZSlEI_ruilvP8o_m7FsJ-JD4t4I", "dischetto per cani", 20, $categorie['cani']);
$gomitolo = new Prodotto("https://fastly.picsum.photos/id/617/200/200.jpg?hmac=hA4FoiLXjwqHcRxZZSlEI_ruilvP8o_m7FsJ-JD4t4I", "gomitolo per gatti", 30, $categorie['gatti']);
$prodotti = [
    $manzo,
    $salmone,
    $cuccia,
    $casetta,
    $dischetto,
    $gomitolo,
];
//  var_dump($categorie);