<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Classes;

require_once 'i_base_x.php';

/**
 * Description of base_x
 *
 * @author  MAHMUDUL   HASAN   KHAN   M.Sc.   CSE
 */
class Base_X implements I_Base_X {
    
    protected $x;

    public function __construct($x=null) {
        if(is_null($x)) {
            $this->x = I_Base_X::x;
        }
        else {
            $this->x = $x;
        }
    }
    
    public function get_x() {
        return $this->x;
    }

//put your code here
}
