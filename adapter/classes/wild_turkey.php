<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Classes;

require_once 'i_turkey.php';

/**
 * Description of wild_turkey
 *
 * @author MAHMUDUL   HASAN   KHAN   DIU   143-25-417
 */
class Wild_Turkey implements I_Turkey {
    //put your code here
    
    public function gobble() {
        echo "Gobble Gobble";
    }
    
    public function fly() {
        echo "Flying.....";
    }
}
