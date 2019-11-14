<?php 
namespace Calc;

class NumToRomanic{
    public $romanic = ['(_-C)'=>100000000,'(_-X_-C)'=>90000000,'(_-L)'=>50000000,'(_-X_-L)'=>40000000,'(_-X)'=>10000000,'(_-M_-X)'=>9000000,'(_-V)'=>5000000,'(_-M_-V)'=>4000000,'(_M)'=>1000000,'(_C_M)'=>900000,'(_D)'=>500000,'(_C_D)'=>400000,'(_C)'=>100000,'(_X_C)'=>90000,'(_L)'=>50000,'(_X_L)'=>40000,'(_X)'=>10000,'(M_X)'=>9000, '(_V)'=>5000, '(M_V)'=>4000, 'M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1];
    public $nRomano="";
    public $valorIntroducido=0;
    public $romanoActual="";
    public $numeroActual=0;

    function getRomanicNumbers()
    {
        return array_values($this->numbers);
    }

    function getNumbers()
    {
        return array_keys($this->numbers);
    }

    function setValorIntroducido($value)
    {
        $this->valorIntroducido=$value;
    }

    function getValorIntroducido()
    {
        return $this->valorIntroducido;
    }

    function getNumeroRomano()
    {
        return $this->nRomano;
    }

    function setRomanoActual($valor)
    {
        $this->romanoActual=$valor;
    }

    function getRomanoActual()
    {
        return $this->romanoActual;
    }

    function setNumeroActual($valor)
    {
        $this->numeroActual=$valor;
    }

    function getNumeroActual()
    {
        return $this->numeroActual;
    }






    function calculate($value){ 
        $this->setValorIntroducido($value);
        while($this->getValorIntroducido()>0){
          $this->transform();
        }

        return $this->getNumeroRomano();

    }
     function transform()
     {

         foreach ($this->romanic as $roman => $number) {
            $this->setNumeroActual($number);
            $this->setRomanoActual($roman);
            $this->checkIfBigger();
         }
     }

     function checkIfBigger()
     {
        if ($this->getValorIntroducido() >= $this->getNumeroActual()) {
            $this.setRoman();
        }
     }
     function setRoman(){
        $numero=$this->getValorIntroducido();
        $nuevoNumero = $numero - $this->getNumeroActual();
        $this->setValorIntroducido($nuevoNumero);
        $this->nRomano.=$this->getRomanoActual();
     }

}