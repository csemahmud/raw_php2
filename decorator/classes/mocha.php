<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Classes;

require_once 'beverage.php';
require_once 'condiment_decorator.php';

/**
 * Description of mocha
 *
 * @author MAHMUDUL   HASAN   KHAN   DIU   143-25-417
 */
class Mocha extends Condiment_Decorator {
    //put your code here
    
    private $beverage = NULL;

    public function __construct($beverage) {
        parent::__construct($beverage, "Mocha");
        
        $this->beverage = $beverage;
    }
    
    public function get_cost() {
        return 0.20 + $this->beverage->get_cost();
    }
}
