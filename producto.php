<?php

class producto {

    
    protected $numeroUno;
    protected $numeroDos;
 

    public function __construct($numeroUno, $numeroDos){
        $this->numeroUno = $numeroUno;
        $this->numeroDos = $numeroDos;
 
        
    }
    
    public function producto(){
      
        return  ($this-> numeroUno  *  $this-> numeroDos);
       
    }

    public function __toString()
    {
        return "La suma de los numeros es {$this->producto()}.";
    }

}