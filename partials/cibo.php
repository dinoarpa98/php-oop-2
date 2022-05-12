<?php

class Cibo extends Prodotto

{
    public function __construct($name, $description, $price)
    {
        parent::__construct($name, $description, $price);
    }
}
?>