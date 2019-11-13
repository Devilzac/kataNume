<?php 
namespace Calc;

class NumToRomanic{
    public $numbers = [1=>"I", 5=>"V", 10=>"X", 50=>"L", 100=>"C", 500=>"D", 1000=>"M"];
    public $romanic = ["I"=>1, "V"=>5, "X"=>10, "L"=>50, "C"=>100, "D"=>500, "M"=>1000];

    function getRomanicNumbers()
    {
        return array_values($this->numbers);
    }

    function getNumbers()
    {
        return array_keys($this->numbers);
    }
    function calculate($value){
        $total;
        for ($i=0; $i < strlen($value); $i++) {            
            if(substr($value, 0,1) == 5){
                if(substr(55, 2,1))
                return $total= $this->numbers[$value];
            }
        }
/*
        if (is_numeric($value)) {
            return $this->numbers[$value];
        }

        if (is_string($value)) {
            return $this->romanic[$value];
        }
        */

        
    }

}