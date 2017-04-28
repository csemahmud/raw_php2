<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

    require_once './classes/singleton.php';
    
    use Classes\Singleton;

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Singleton</title>
    </head>
    <body>
        <h3>Singleton</h3>
    <ul>
        <?php
        // put your code here
        // 
        // @author MAHMUDUL   HASAN   KHAN   DIU   143-25-417
        
        //$singleton_1 = new Singleton(); // invalid
        $singleton_1 = Singleton::get_unique_instance();
        $singleton_1->set_number1(3);
        $singleton_1->set_text1("Super-Man");
        
        $singleton_2 = Singleton::get_unique_instance();
        $singleton_2->set_number1(5);
        $singleton_2->set_text1("Iron-Man");
        
        echo "<li>".$singleton_1->to_string()."</li>";
        echo "<li>".$singleton_2->to_string()."</li>";
        
        ?>
    </ul>
    </body>
</html>
