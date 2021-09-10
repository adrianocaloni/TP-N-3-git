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
        
            switch ($this->valor)  { 
                case '+':
                    return $this-> numeroUno +  $this-> numeroDos;
                    break;
                case '-':
                    return $this-> numeroUno  -  $this-> numeroDos;
                    break;
                case '*':
                    return $this-> numeroUno *  $this-> numeroDos; 
                    break;
                case '/':
                    if ( $this-> numeroUno === 0  ||  $this-> numeroDos === 0){ 
                        return "No se puede dividir por cero";
                    } else {
                        return $this-> numeroUno /  $this-> numeroDos;
                    }
                    break;
            }

    }

    public function __toString()
    {if ($this->valor === '+'){
        return "El resultado de {$this->numeroUno } + {$this->numeroDos } es : {$this->calculaOperacion()}";
        
       }    else if ($this->valor === '-'){

        return "El resultado de {$this->numeroUno } - {$this->numeroDos } es : {$this->calculaOperacion()}";
        
       } else if  ($this->valor === '*'){

        return "El resultado de {$this->numeroUno } * {$this->numeroDos } es : {$this->calculaOperacion()}";
        
       } else if  ($this->valor === '/'){

        return "El resultado de {$this->numeroUno } / {$this->numeroDos } es : {$this->calculaOperacion()}";
        
       }
        
    }
}