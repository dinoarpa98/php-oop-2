<?php 

class product {
    protected $name;
    protected $description;
    protected $price;
  
    
    public function __construct( $_name, $_description, $_price){
        $this -> setName($_name);
        $this -> setDescription($_description);
        $this -> setPrice($_price);
    }



    public function setName($_name){
        $this -> name = $_name;
        return $this;
    }

    public function setDescription($_description){
        $this -> description = $_description;
        return $this;
    }

    public function setPrice($_price){
        $this -> price = $_price;
        return $this;
    }


    public function getName(){
        return $this -> name;
    }

    public function getDescription(){
        return $this -> description;
    }

    public function getPrice(){
        return $this -> price;
    }

}

?>