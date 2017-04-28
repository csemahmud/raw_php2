<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Classes;

require_once 'beverage.php';

/**
 * Description of condiment_decorator
 *
 * @author MAHMUDUL   HASAN   KHAN   DIU   143-25-417
 */
abstract class Condiment_Decorator extends Beverage {
    //put your code here
    
    public function __construct($beverage, $condiment_name) {
        parent::__construct(((($beverage->get_description()=="Dark_Roast")
                ||($beverage->get_description()=="Expresso")
                ||($beverage->get_description()=="House_Blend")) ? 
                $beverage->get_description()." Coffee" : $beverage->get_description())
                .", ".$condiment_name);
    }
}
