<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Classes;

require_once 'i_duck.php';
require_once 'i_turkey.php';

/**
 * Description of turkey_adapter_to_duck
 *
 * @author MAHMUDUL   HASAN   KHAN   DIU   143-25-417
 */
class Turkey_Adapter_To_Duck implements I_Duck {
    //put your code here
    
    //   I have I_Turkey
    //   I need I_Duck
    
    private $turkey = NULL;
    
    public function __construct($turkey) {
        $this->turkey = $turkey;
    }
    
    public function quack() {
        $this->turkey->gobble();
    }
    
    public function fly() {
        for($j =0; $j<5; $j++) {
            $this->turkey->fly();
        }
    }
}
