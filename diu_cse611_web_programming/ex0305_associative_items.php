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
        <?php
        // put your code here

        //   Mahmudul   Hasan   Khan   DIU : 143-25-417

        $items = array(array("item_id"=>'1001',"item_name"=>'Marker Pen',"quantity"=>100,"price"=>65.0),
                        array("item_id"=>'1002',"item_name"=>'Stencil Pen',"quantity"=>60,"price"=>35.0),
                        array("item_id"=>'1003',"item_name"=>'Eraser',"quantity"=>120,"price"=>25.0));
        echo "<table><tr><th></th>";

        $headers = array();
        $headers = $items[0];

        while (list($key, $value) = each($headers)) {
            echo "<th>" . $key . "</th>";
        }
        echo "</tr>";

        for($i = 0; $i < count($items); $i++) {
            echo "<tr><td>".$i."</td>";
            while (list($key, $value) = each($items[$i])) {
                echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
        ?>
    </body>
</html>
