<?php

include_once __DIR__ . "./product.php";


class toy extends product{
   
    protected $weight;
    protected $color;


    function __construct( $_name, $_description, $_price, $_weight, $_color){
        parent::__construct( $_name, $_description, $_price );
       
        $this -> setWeight($_weight);
        $this -> setColor($_color);

    }



    public function setWeight($_weight){
        $this -> weight = $_weight;
        return $this;
    }

    public function setColor($_color){
        $this -> color = $_color;
        return $this;
    }



    function getWeight(){
        return $this -> weight;
    }

    function getColor(){
        return $this -> color;
    }


}