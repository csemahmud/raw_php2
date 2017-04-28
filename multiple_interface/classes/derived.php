<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Classes;

require_once 'base_x.php';
require_once 'i_derived.php';

/**
 * Description of derived
 *
 * @author MAHMUDUL   HASAN   KHAN   M.Sc.   CSE
 */
class Derived extends Base_X implements I_Derived {
    
    private $y;
    private $z;


    public function __construct($x=null,$y=null,$z=null) {
        parent::__construct($x);
        if(is_null($y)) {
            $this->y = I_Derived::y;
        }
        else {
            $this->y = $y;
        }
        if(is_null($z)) {
            $this->z = I_Derived::z;
        }
        else {
            $this->z = $z;
        }
    }
    
    public function get_largest_value() {
        if(($this->x>$this->y)&&($this->x>$this->z)) {
            return $this->x;
        }
        else if($this->y>$this->z) {
            return $this->y;
        }
        return $this->z;
    }

    public function get_y() {
        return $this->y;
    }

    public function get_z() {
        return $this->z;
    }

//put your code here
}
