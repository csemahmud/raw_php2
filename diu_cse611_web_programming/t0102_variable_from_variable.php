<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <h3>An  example  of  Variable  from  Variable</h3>
            <ul>
            <?php
            // put your code here

            //   Mahmudul   Hasan   Khan   DIU : 143-25-417

            $lion = "dog";
            $$lion = "cat";
            $$$lion = "mouse";
            $$$$lion = "insect";

            echo "<li>$lion</li>";
            echo "<li>$dog</li>";
            echo "<li>$cat</li>";
            echo "<li>$mouse</li>";
            ?>
            </ul>
            <hr/>
            <h3>Another  example  of  Variable  from  Variable</h3>
            <ul>
            <?php

            $number = 100;
            $$number = 50;
            $$$number = 30;
            $$$$number = 20;

            echo "<li>";
            echo $number;
            echo "</li><li>";
            echo $$number;
            //   echo $100;   This   will   not   work
            echo "</li><li>";
            echo $$$number;
            //   echo $50;   This   will   not   work
            echo "</li><li>";
            echo $$$$number;
            //   echo $30;   This   will   not   work
            echo "</li><li>";
            echo "$$$$number";
            echo "</li><li>";
            echo '$$$$number';
            echo "</li>";
            ?>
            </ul>
        </div>
    </body>
</html>
