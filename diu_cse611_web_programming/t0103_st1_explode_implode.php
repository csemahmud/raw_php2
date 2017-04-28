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
            <h3>An   Example   of   explode   and   implode</h3>
            <?php
            // put your code here

            //   Mahmudul   Hasan   Khan   DIU : 143-25-417
            
            
            $msg = "Quick brown Fox   Jump";
            
            echo "<h3>Original   String </h3><pre>$msg</pre>";
            
            $array_str = explode(" ", $msg);
            
            echo "<h3>explode by ' ' </h3><pre>";
            print_r($array_str);
            echo "</pre>";
            
            $str2 = implode('+', $array_str);
            
            echo "<h3>implode by '+'</h3><p>$str2</p>";
            
            $array2_str = explode("+", $str2);
            
            echo "<h3>explode by '+' </h3><ul>";
            foreach ($array2_str as $key2_str=>$v2_str) {
                echo "<li> [$key2_str] => $v2_str</li>";
            }
            echo "</ul>";

            ?>
        </div>
    </body>
</html>
