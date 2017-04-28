<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//   MAHMUDUL   HASAN   KHAN   TALHA   TRAINING

/**
 * Description of user_manager
 *
 * @author User
 */

require_once 'dal/user_gateway.php';
require_once 'dal/models/user_dao.php';

class User_Manager {
    //put your code here
    
    function save_user($data)
    {
        $user_obj = new User_DAO($data);
        $user_gateway_obj = new User_Gateway();
        return $user_gateway_obj->insert_user($user_obj);
    }
    
    function get_all_users(){
        $user_gateway_obj = new User_Gateway();
        return $user_gateway_obj->select_all_users();
    }
    
    function get_user_by_id($user_id){
        $user_gateway_obj = new User_Gateway();
        return $user_gateway_obj->select_user_by_id($user_id);
    }
    
    function update_user($user_obj){
        $user_gateway_obj = new User_Gateway();
        return $user_gateway_obj->update_user($user_obj);
    }
    
    function delete_user($user_id,$name){
        $user_gateway_obj = new User_Gateway();
        return $user_gateway_obj->delete_user($user_id, $name);
    }
}

?>
