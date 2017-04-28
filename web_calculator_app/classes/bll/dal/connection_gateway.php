<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//   MAHMUDUL   HASAN   KHAN   TALHA   TRAINING

/**
 * Description of connection_gateway
 *
 * @author User
 */
class Connection_Gateway {
    //put your code here
    
    function __construct() {
        $hostname = $_SERVER["SERVER_NAME"];
        $username = "root";
        $password = "";
        $db_name= "db_web_calculator_app";
        
        $connection = mysql_connect($hostname, $username, $password);
        if(!$connection)
        {
            die("<p>Database   connection   failed   ERROR   No.# : "
                    .mysql_errno()."   ERROR : ".mysql_error()."</p>");
        }
 else {
            mysql_select_db($db_name);
 }
    }
}

?>
