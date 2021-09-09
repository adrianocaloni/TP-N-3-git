<?php

class suma {

    
    protected $numeroUno;
    protected $numeroDos;
 

    public function __construct($numeroUno, $numeroDos){
        $this->numeroUno = $numeroUno;
        $this->numeroDos = $numeroDos;
 
        
    }
    
    public function sumaNumeros(){
      
        return  ( $this-> numeroUno +   $this-> numeroDos);
       
    }

    public function __toString()
    {
        return "La suma de los numeros es {$this->sumaNumeros()}.";
    }

}