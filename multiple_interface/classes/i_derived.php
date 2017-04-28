<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Classes;

require_once 'i_base_y.php';
require_once 'i_base_z.php';

/**
 *
 * @author MAHMUDUL   HASAN   KHAN   M.Sc.   CSE
 */
interface I_Derived extends I_Base_Y, I_Base_Z {
    //put your code here
    function get_largest_value();
}
