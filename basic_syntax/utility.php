<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//   MAHMUDUL   HASAN   KHAN   Talha   Training

require_once './calcultion.php';

class Utility extends Calculation{

    
    /*
     * @parameter $x int
     * @parameter $y int
     */
    
    function show_range($number1,$number2)
    {
        if($number1<$number2)
        {
            echo "<h3>Incrementing :- </h3><ul>";
            for($i = $number1; $i<=$number2; $i++)
            {
                echo "<li>$i</li>";
            }
            echo "</ul>";
        }
    else {
            echo "<h3>Decrementing :- </h3><ul>";
            for($i = $number1; $i>=$number2; $i--)
            {
                echo "<li>$i</li>";
            }
            echo "</ul>";
        }
    }
    
    /*
     * @parameter $x int
     * @parameter $y int
     */
    
    function child_sub($x,$y)
    {
        if($x>$y)
            return $this->subtract($x,$y);
        else {
            return $this->subtract($y,$x);
        }
    }

}
?>
