<?php

class producto {

    
    protected $numeroUno;
    protected $numeroDos;
    protected $valor;

    public function __construct($numeroUno, $numeroDos, $valor){
        $this->numeroUno = $numeroUno;
        $this->numeroDos = $numeroDos;
        $this->valor = $valor; 
        
    }
    
    public function producto(){
      
        return  ($this-> numeroUno  *  $this-> numeroDos);
       
    }

    public function __toString()
    {
        return "La suma de los numeros es {$this->producto()}.";
    }

}