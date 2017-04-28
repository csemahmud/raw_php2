<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php 

require_once './associations/a_whole.php';
require_once './associations/b_part.php';

use Associations\A_Whole;
use Associations\B_Part;

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Association</title>
    </head>
    <body>
        <h3>Association</h3>
        <ul>
        <?php
        // put your code here 
        // 
        // @author MAHMUDUL   HASAN   KHAN   DIU   143-25-417
        
        $a_b_part_obj = new B_Part();
        $a_b_part_obj->set_number1(3);
        $a_b_part_obj->set_text1("Mahmud");
        
        $a_a_whole_obj = new A_Whole($a_b_part_obj);
        echo "<li>".$a_a_whole_obj->get_string_b_part1()."</li>";
        
        $a_b_part_obj->set_number1(5);
        $a_b_part_obj->set_text1("Super-Man");
        echo "<li>".$a_a_whole_obj->get_string_b_part1()."</li>";
        
        echo "<li>".$a_a_whole_obj->get_string_b_part2()."</li>";
        
        $a_a_whole_obj->change_b_part2(100, " Cricket Team");
        echo "<li>".$a_a_whole_obj->get_string_b_part2()."</li>";
        
        $temp_obj = new B_Part();
        $temp_obj->set_number1(50);
        echo "<li>".A_Whole::determine_odd_even($temp_obj)."</li>";
        ?>
        </ul>
    </body>
</html>
