<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of calculation_dao
 *
 * @author MAHMUDUL   HASAN   KHAN   TALHA   TRAINING
 */
class Calculation_DAO {
    //put your code here
    
    private $calculation_id = NULL;
    private $first_number = NULL;
    private $second_number = NULL;
    private $function = NULL;
    private $result = NULL;
    
    function __construct($data) {
        if(isset($data["calculation_id"]))
            $this->calculation_id = $data["calculation_id"];
        $this->first_number = $data["first_number"];
        $this->second_number = $data["second_number"];
        $this->function = $data["function"];
        
        if (isset($data["result"]))
            $this->result = $data["result"];
        else{
            switch ($this->function){
                case "Add(+)":
                        $this->result = $this->first_number + $this->second_number;
                        break;
                case "Subtract(-)":
                        $this->result = $this->first_number - $this->second_number;
                        break;
                case "Multiply(*)":
                        $this->result = $this->first_number * $this->second_number;
                        break;
                case "Divide(/)":
                        $this->result = $this->first_number / $this->second_number;
                        break;
                case "Modulous(%)":
                        $this->result = $this->first_number % $this->second_number;
                        break;
            }
        }
    }
    
    function get_calculation_id(){ return $this->calculation_id; }
    function get_first_number(){return $this->first_number;}
    function get_second_number(){return $this->second_number;}
    function get_function(){return $this->function;}
    function get_result(){return $this->result;}
}

?>
