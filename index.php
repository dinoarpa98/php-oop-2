<?php

require __DIR__ . './partials/utente.php';
require __DIR__ . './partials/prodotti.php';
require __DIR__ . './partials/cibo.php';

$lettino = new Prodotto('Lettino per cani','Lettino per Cani con cuscino compreso', 70);

var_dump($lettino);

$manzo = new Cibo('Scatoletta di Manzo','cibo umido per cani, scatoletta di manzo', 5);

var_dump($manzo);

?>