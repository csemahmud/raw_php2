<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

require_once './classes/beverage.php';
require_once './classes/condiment_decorator.php';
require_once './classes/dark_roast.php';
require_once './classes/expresso.php';
require_once './classes/house_blend.php';
require_once './classes/mocha.php';
require_once './classes/soy.php';
require_once './classes/whip.php';

use Classes\Beverage;
use Classes\Condiment_Decorator;
use Classes\Dark_Roast;
use Classes\Expresso;
use Classes\House_Blend;
use Classes\Mocha;
use Classes\Soy;
use Classes\Whip;

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Decorator</title>
    </head>
    <body>
        <h3>Decorator</h3>
        <ul>
        <?php
        // put your code here
        // 
        // @author MAHMUDUL   HASAN   KHAN   DIU   143-25-417
        
        $beverage1 = new Expresso();
        echo "<li>".$beverage1->to_string()."</li>";
        
        $beverage2 = new Dark_Roast();
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Whip($beverage2);
        echo "<li>".$beverage2->to_string()."</li>";
        
        $beverage3 = new House_Blend();
        $beverage3 = new Soy($beverage3);
        $beverage3 = new Mocha($beverage3);
        $beverage3 = new Whip($beverage3);
        echo "<li>".$beverage3->to_string()."</li>";
        
        ?>
        </ul>
    </body>
</html>
