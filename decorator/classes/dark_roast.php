<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Classes;

require_once 'beverage.php';

/**
 * Description of dark_roast
 *
 * @author MAHMUDUL   HASAN   KHAN   DIU   143-25-417
 */
class Dark_Roast extends Beverage {
    //put your code here
    
    public function __construct() {
        parent::__construct();
        $this->description = "Dark_Roast";
    }
    
    public function get_cost() {
        return 0.99;
    }
}
