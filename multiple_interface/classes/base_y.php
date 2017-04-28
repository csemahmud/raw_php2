<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Classes;

require_once 'i_base_y.php';

/**
 * Description of base_y
 *
 * @author MAHMUDUL   HASAN   KHAN   M.Sc.   CSE
 */
class Base_Y implements I_Base_Y {
    
    protected $y;

    public function __construct($y=null) {
        if(is_null($y)) {
            $this->y = I_Derived::y;
        }
        else {
            $this->y = $y;
        }
    }

    public function get_y() {
        return $this->y;
    }

//put your code here
}
