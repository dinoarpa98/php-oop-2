<?php

class creditCard{

    protected $number;
    protected $expire;
    protected $cvv;
    protected $bank;
    protected $Validator;

    public function __construct( $number, $expire, $cvv, $bank,$Validator = false ){

        $this -> number = $number;

        if($expire > 2022){
            $this -> expire = $expire;
        }

        $this -> cvv = $cvv;
        $this -> bank = $bank;

        if( is_numeric($number) && strlen($number) == 16 && strlen($cvv) == 3 && $expire > 2022 ){
            $this -> Validator = true;
        } else {
            $this -> Validator = false;
        }

    }

    public function getValidation(){
        return $this -> Validator;
    }
}

?>