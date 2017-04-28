<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of calculation_manager
 *
 * @author MAHMUDUL   HASAN   KHAN   TALHA   TRAINING
 */

require_once 'dal/models/calculation_dao.php';
require_once 'dal/calculation_gateway.php';

class Calculation_Manager {
    //put your code here
    
    static function calculate($data){
        
        $calculation_gateway_obj = new Calculation_Gateway();
        
         $calculation_obj = new Calculation_DAO($data);
         if($calculation_gateway_obj->insert_calculation($calculation_obj))
             return $calculation_obj->get_result();
    }
    
    static function get_all_calculations(){
        $calculation_gateway_obj = new Calculation_Gateway();
        return $calculation_gateway_obj->select_all_calculations();
    }
}

?>
