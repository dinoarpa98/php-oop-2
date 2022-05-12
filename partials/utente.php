<?php 
class Utente
{
    public $name;
    public $email;
    public $accesso;
    public $cartaScaduta;
    public $sconto;
    public $abilitato;

    public function __construct($name, $email, $accesso, $cartaScaduta)
    {
        $this->name = $name;
        $this->email = $email;
        $this->accesso = $accesso;
        $this->cartaScaduta = $cartaScaduta;
        $this->sconto = $this->setSconto();
        $this->abilitato = $this->setAbilitato();
    }
   
   
    //setter
    public function setName($_name){
        $this->name = $_name;
    }
   
    //getter

    public function getName(){
        return $this->name;
    }
    public function setEmail($_email){
        $this->email = $_email;
    }
   
    public function getEmail(){
        return $this->email;
    }
    public function setAccesso($_accesso){
        $this->accesso = $_accesso;
    } 
    
    public function getAccesso(){
        return $this->accesso;
    }
    public function setCard($_card){
        $this->cartaScaduta = $_card;
    } 
    
    public function getCard(){
        return $this->cartaScaduta;
    }
    public function setSconto(){
        if($this->accesso == true){
            return $this->sconto = '20%';
        } else{
            return $this->sconto = '0';
        }
    } 
    
    public function getSconto(){
        return $this->sconto;
    }
    public function setAbilitato(){
        if(date("Y/m/d") <= $this->cartaScaduta){
            return $this->abilitato = 'Paga!';
        } else{
            return $this->abilitato = 'la tua carta è scaduta';
        }
    }
    
      public function getAbilitato(){
        return $this->abilitato;
      }
    
    }
?>