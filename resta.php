<?php

class resta {

    
    protected $numeroUno;
    protected $numeroDos;
 

    public function __construct($numeroUno, $numeroDos){
        $this->numeroUno = $numeroUno;
        $this->numeroDos = $numeroDos;
       
    }
    
    public function resta (){
        return $this-> numeroUno  -  $this->numeroDos;
    }

    public function __toString()
    {
        return "La Resta de los numeros es {$this->resta()}.";
    }


}