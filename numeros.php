<?php


class Calculos
{
    protected $numeroUno;
    protected $numeroDos;
    protected $valor;


    public function __construct($numeroUno, $numeroDos, $valor)
    {
        $this->numeroUno = $numeroUno;
        $this->numeroDos = $numeroDos;
        $this->valor = $valor;

    }

    
    public function getNumeros() 
    {
        return $this->numeroUno . " " . $this->numeroDos;
    }

    public function calculaOperacion()
    {
       if ($this->valor === '+'){
        return  ( $this-> numeroUno +  $this-> numeroDos);
        
       }    else if ($this->valor === '-'){

        return  ( $this-> numeroUno  -  $this-> numeroDos);
        
       } else if  ($this->valor === '*'){

        return  ( $this-> numeroUno *  $this-> numeroDos);
        
       }
    }

    public function __toString()
    {
        return "La suma de los numeros es {$this->calculaOperacion()}.";
    }
}