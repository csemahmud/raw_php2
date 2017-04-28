<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//   MAHMUDUL   HASAN   KHAN   TALHA   TRAINING

/**
 * Description of calculation_gateway
 *
 * @author User
 */
require_once 'connection_gateway.php';
require_once 'models/calculation_dao.php';

class Calculation_Gateway  extends Connection_Gateway{
    //put your code here
    
    function insert_calculation($calculation_obj){
        $sql = "INSERT INTO tbl_calculation (first_number,second_number,function,result)
            VALUES
        ('".$calculation_obj->get_first_number()."','".$calculation_obj->get_second_number()."','"
                .$calculation_obj->get_function()."','".$calculation_obj->get_result()."');";
        if(!mysql_query($sql)){
            die("SQL   ERROR   !!!   ERROR   No.# : ".mysql_errno()."   ERROR : ".mysql_error());
        }
 else {
            return TRUE;
 }
    }
    
    function select_all_calculations(){
        $sql = "SELECT * FROM tbl_calculation";
        $result = mysql_query($sql);
        
        $calculation_objs = array();
        
        $row_index = 0;
        
        while ($row = mysql_fetch_assoc($result)) {
            $calculation_obj = new Calculation_DAO($row);
            $calculation_objs[$row_index++] = $calculation_obj;
        }
        
        return $calculation_objs;
    }
}
?>
