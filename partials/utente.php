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
   

?>