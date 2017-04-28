<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//   MAHMUDUL   HASAN   KHAN   Talha   Training

class Calculation{
    
    /*
     * @parameter $x int or real
     * @parameter $y int or real
     */
    
    function add($x,$y)
    {
        return $x+$y;
    }
    
    /*
     * @parameter $x int or real
     * @parameter $y int or real
     */
    
    protected function subtract($x,$y)
    {
        return $x-$y;
    }
    
    /*
     * @parameter $str1 string
     * @parameter $str2 string
     */
    
    function concat($str1,$str2)
    {
        return $str1.$str2;
    }
}
?>
