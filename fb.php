<?php

class FizzBuzz{
    public function Linio($number){
        $result = array();

        for($i=1; $i <= $number; $i++){
            if ($i % 15 === 0){
                array_push($result, 'Linianos');
            }
            else if ($i % 3 === 0){
                array_push($result, 'Linio');
            }
            else if ($i % 5 === 0){
                array_push($result, 'IT');
            }
            else{
                array_push($result,strval($i));
            }
        }
        
        return $result;
    }
}

?>