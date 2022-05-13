<?php 

include_once __DIR__ . "./product.php";


class food extends product{

    protected $typeOfFood;
    protected $brand;
    protected $weight;
    protected $expireDate;

    // costruttore
    function __construct( $_name, $_category, $_price, $_typeOfAnimal, $_typeOfFood, $_brand, $_weight, $_expireDate ){
        
        parent::__construct( $_name, $_category, $_price, $_typeOfAnimal );
     
        $this -> setTypeOfFood($_typeOfFood);
        $this -> setBrand($_brand);
        $this -> setWeight($_weight);
        $this -> setExpireDate($_expireDate);
    }



    
    public function setTypeOfFood($_typeOfFood){
       
        $this -> typeOfFood = $_typeOfFood;
        return $this;
    }

    public function setBrand($_brand){
        
        $this -> brand = $_brand;
        return $this;
    }

    public function setWeight($_weight){
        
        $this -> weight = $_weight;
        return $this;
    }

    public function setExpireDate($_expireDate){
        
        $this -> expireDate = $_expireDate;
        return $this;
    }



    
    function getTypeOfFood(){
        return $this -> typeOfFood;
    }

    function getBrand(){
        return $this -> brand;
    }

    function getWeight(){
        return $this -> weight;
    }

    function getExpireDate(){
        return "Il prodotto scade il " . $this -> expireDate;
    }

}