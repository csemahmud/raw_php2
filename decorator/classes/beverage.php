<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Classes;

/**
 * Description of beverage
 *
 * @author MAHMUDUL   HASAN   KHAN   DIU   143-25-417
 */
abstract class Beverage {
    //put your code here
    
    protected $description = "Unknown Beverage";
    
    public function __construct($description = NULL) {
        $this->description = $description;
    }
    
    public function get_description() {
        return $this->description;
    }
    
    public abstract function get_cost();
    
    public function to_string() {
        return 
        "Beverage [description=".$this->description.", get_cost()=".$this->get_cost()."]";
    }
}
