<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//   MAHMUDUL   HASAN   KHAN   BASIS   5



class Utility{

    
    /*
     * @parameter $x int
     * @parameter $y int
     */
    
    function show_range($number1,$number2,$type)
    {
        
        switch ($type){
            case "default":
                $x=1;
                break;
                case "odd":
                    $x=2;
                    if(!($number1%2)&&($number1<$number2))
                        $number1++;
                    else if(!($number1%2)){
                        $number1--;
                    }
                    break;
            case "even":
                $x=2;
                if(($number1%2)&&($number1<$number2))
                    $number1++;
                    elseif ($number1%2) {
                    $number1--;
                }
        }
        
        if($number1<$number2)
        {
            echo "<h3>Incrementing :- </h3><ul>";
            for($i = $number1; $i<=$number2; $i+=$x)
            {
                echo "<li>$i</li>";
            }
            echo "</ul>";
        }
    else {
            echo "<h3>Decrementing :- </h3><ul>";
            for($i = $number1; $i>=$number2; $i-=$x)
            {
                echo "<li>$i</li>";
            }
            echo "</ul>";
        }
    }

}
?>
