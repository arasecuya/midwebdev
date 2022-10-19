<?php

class Calculator {
    public $number_list = array();
    
    public function __construct($number_list){
        $this->number_list = $number_list;

    }
 
    function Add (){
        
        $addition = 0;
        for($i = 0; $i < count($this->number_list); $i++)
        {
            $addition += (int) $this->number_list[$i];
        }
        return $addition;
    }
     

    function Subtract (){

        $subtraction = 0;
            
            if(count($this->number_list)>1){
            $subtraction = $this->number_list[0] - $this->number_list[1];
            }
            
            return $subtraction;
        }
        
       

    function Divide (){

         $division = 0;
        for($i = 0; $i < count($this->number_list); $i++)
        {
            $division += (int) $this->number_list[$i];
        }
            $division = $division / count($this->number_list);

        return $division;
    
    }

    function Factorial (){

         $factorial = 1;
        for($i = 0; $i < count($this->number_list); $i++)
        {
            $factorial *= (int) $this->number_list[$i];
        }
        return $factorial;
    
    }

    function Prime (){
     $not_a_Prime_Numbers = false; 
        $answer = array();
        for($i = 0; $i < count($this->number_list); $i++)
        {
            if($this->number_list[$i] %2==0)
                $not_a_Prime_Numbers = true;

            if($this->number_list[$i] % 2 != 0)
                array_push($answer, $this->number_list[$i]);
            
        }

        if(count($answer) < 1 && $not_a_Prime_Numbers) {
        
        return $answer;
    }
        else {
        
        return $answer;
    }
}

}


$result = new Calculator( [6,7,8,9]);
echo $result-> add();
echo "</br>";
echo $result->Subtract();
echo "</br>";
echo $result->Divide();
echo "</br>";
echo $result->Factorial();
echo "</br>";
print_r ($result->Prime());

?>