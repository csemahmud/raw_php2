<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//   MAHMUDUL   HASAN   KHAN   TALHA   TRAINING

/**
 * Description of user_gateway
 *
 * @author User
 */
require_once 'connection_gateway.php';
require_once 'models/user_dao.php';

class User_Gateway  extends Connection_Gateway{
    //put your code here
    
    function insert_user($user_obj){
        $sql = "INSERT INTO tbl_user (first_name,middle_name,last_name,nick_name,reg_no,email,password,mobile_no,address,city,
            company_name,zip_code,country,gender,age,reg_date,color_code,browser)
            VALUES
        ('".$user_obj->get_first_name()."','".$user_obj->get_middle_name()."','".$user_obj->get_last_name()."','"
                .$user_obj->get_nick_name()."','".$user_obj->get_reg_no()."','".$user_obj->get_email()."',
            '".$user_obj->get_password()."','".$user_obj->get_mobile_no()."','".$user_obj->get_address()."','".
                $user_obj->get_city()."','".$user_obj->get_company_name()."','".$user_obj->get_zip_code()."',
                '".$user_obj->get_country()."','".$user_obj->get_gender()."','".$user_obj->get_age()."','".
                $user_obj->get_reg_date()."','".$user_obj->get_color_code()."','".$user_obj->get_browser()."');";
        if(!mysql_query($sql)){
            die("SQL   ERROR   !!!   ERROR   No.# : ".mysql_errno()."   ERROR : ".mysql_error());
        }
 else {
            return "User   data   has   been   saved   successfully   .";
 }
    }
    
    function select_all_users(){
        $sql = "SELECT * FROM tbl_user";
        $result = mysql_query($sql);
        
        $user_objs = array();
        
        $row_index = 0;
        
        while ($row = mysql_fetch_assoc($result)) {
            $user_obj = new User_DAO($row);
            $user_objs[$row_index++] = $user_obj;
        }
        
        return $user_objs;
    }
    
    function select_user_by_id($user_id){
        $sql = "SELECT * FROM tbl_user WHERE user_id = $user_id";
        $result = mysql_query($sql);
        
        $row = mysql_fetch_assoc($result);
        $user_obj = new User_DAO($row);
        
        return $user_obj;
    }
    
    function update_user($user_obj)
    {
        $sql = "UPDATE tbl_user SET 
                first_name = '".$user_obj->get_first_name()."', middle_name = '".$user_obj->get_middle_name()."', 
                last_name = '".$user_obj->get_last_name()."', nick_name = '".$user_obj->get_nick_name()."',
                reg_no = '".$user_obj->get_reg_no()."', email = '".$user_obj->get_email()."',
                mobile_no = '".$user_obj->get_mobile_no()."', address = '".$user_obj->get_address()."',
                city = '".$user_obj->get_city()."', company_name = '".$user_obj->get_company_name()."',
                zip_code = '".$user_obj->get_zip_code()."', country = '".$user_obj->get_country()."',
                gender = '".$user_obj->get_gender()."', age = '".$user_obj->get_age()."',
                reg_date = '".$user_obj->get_reg_date()."', color_code = '".$user_obj->get_color_code()."',
                browser = '".$user_obj->get_browser()."' WHERE user_id = ".$user_obj->get_user_id();
        if(!mysql_query($sql)){
            die("SQL   ERROR   !!!   ERROR   No.# : ".mysql_errno()."   ERROR : ".mysql_error());
        }
 else {
            return "User   data   has   been   updated   successfully   .";
 }
    }
    
    function delete_user($user_id,$name)
    {
        $sql = "DELETE FROM tbl_user WHERE user_id = $user_id;";
        if(!mysql_query($sql)){
            die("SQL   ERROR   !!!   ERROR   No.# : ".mysql_errno()."   ERROR : ".mysql_error());
        }
 else {
            return "User   :   $name   with   id : $user_id   has   been   deleted   successfully   .";
 }
    }
}
?>
