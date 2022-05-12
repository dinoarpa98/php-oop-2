<?php

class Prodotto
{
    public $name;
    public $description;
    public $price;

    public function __construct($name, $description, $price)
    {
        $this -> name = $name;
        $this -> description = $description;
        $this -> price = $price;

    }
        public function setName($_name){
            $this->name = $_name;
        }

        public function getName(){
            return $this->name;
        }

        public function setDescription($_description){
            $this->description = $_description;
        }

        public function getDescription(){
            return $this->description;
        }

        public function setPrice($_price){
            $this->price = $_price;
        }
        
        public function getPrice(){
            return $this->price;
        }
}

?>