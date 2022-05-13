<?php 

require __DIR__ . '/partials/product.php';
require __DIR__ . '/partials/toy.php';
require __DIR__ . '/partials/food.php';
require __DIR__ . '/partials/user.php';
require __DIR__ . '/partials/creditCard.php';

$manzo = new product ( 'Scatoletta di Manzo', 'Manzo umido', 35, 'cane' );

var_dump($manzo);


$lettino = new toy ( 'Lettino', 'Lettino per cane con cuscino', 25, 'cane', 50, 'nero', 'ferro', '2m' );

var_dump($lettino);


$croccantini = new food ( 'Croccantini', 'cibo', 20, 'cane', 'secco', 'Monge', 22, 2023 );

var_dump($croccantini);


$utente = new user ( 'Mario', 'Rossi', 'MarioRossi@email.it', true );

var_dump($utente);


$card = new creditCard ( "123456789010", 2023, 123, 'MasterCard', 333 );

var_dump( $card);

?>