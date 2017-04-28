<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 

require_once './classes/turkey_adapter_to_duck.php';
require_once './classes/wild_turkey.php';

use Classes\Turkey_Adapter_To_Duck;
use Classes\Wild_Turkey;

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Adapter</title>
    </head>
    <body>
        <h3>Adapter</h3>
        <ul>
        <?php
        // put your code here
        // 
        // @author MAHMUDUL   HASAN   KHAN   DIU   143-25-417
        
        $an_i_turkey = new Wild_Turkey();
        $a_turkey_adapter_to_duck = new Turkey_Adapter_To_Duck($an_i_turkey);
        
        ?>
            <li><?php $a_turkey_adapter_to_duck->quack() ?></li>
            <li><?php $a_turkey_adapter_to_duck->fly() ?></li>
        </ul>
    </body>
</html>
