<?php

require_once './classes/derived.php';
//require_once './classes/derived_test.php';

use Classes\Derived;
//use Classes\Derived_Test

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Multiple Interface</title>
    </head>
    <body>
        
        <h3>Multiple Interface</h3>
        
        <?php
        
        //@author MAHMUDUL   HASAN   KHAN   M.Sc.   CSE
        
        $derived1 = new Derived(5,13,3);
        $derived2 = new Derived();
        //$derived_test = new Derived_Test();
        
        ?>
        
        <ul>
        
            
            <li><?php 
            echo "X = ".$derived1->get_x();
            echo ";   Y = ".$derived1->get_y();
            echo ";   Z = ".$derived1->get_z();
            echo ";   The Largest Value is : ".$derived1->get_largest_value();
            ?></li>
            <li><?php 
            echo "X = ".$derived2->get_x();
            echo ";   Y = ".$derived2->get_y();
            echo ";   Z = ".$derived2->get_z();
            echo ";   The Largest Value is : ".$derived2->get_largest_value();
            ?></li>
            <li><?php 
            //echo "X = ".$derived_test->get_x();
            echo "Note : PHP supports ONLY Multiple Interface like Java but NOT Multiple Inheritace like C++";
            ?></li>
                
        </ul>
    </body>
</html>
