<?php

class resta {

    protected $numeroUno;
    protected $numeroDos;
    protected $valor;

    public function __construct($numeroUno, $numeroDos,$valor){
        $this->numeroUno = $numeroUno;
        $this->numeroDos = $numeroDos;
        $this->valor = $valor; 
       
    }
    
    public function resta (){
        return $this-> numeroUno  -  $this->numeroDos;
    }

    public function __toString()
    {
        return "La Resta de los numeros es {$this->resta()}.";
    }


}