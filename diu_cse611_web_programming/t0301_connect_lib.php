<?php

    //   Mahmudul   Hasan   Khan   DIU : 143-25-417

    function connect() {
        
        $hostname = $_SERVER["SERVER_NAME"];
        $username = "root";
        $password = "";
        
        @$connection = mysql_pconnect($hostname, $username, $password)
                or die('Error : Could not connect to server');
        
        return $connection;
        
    }
?>