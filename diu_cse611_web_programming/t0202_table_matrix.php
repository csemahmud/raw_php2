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
        <style type="text/css">
            div{
                margin-left: 10%;
                margin-right: 10%;
            }
            th{
                border-color: #999999;
                border-width: 3px;
                border-style: solid;
                padding: 2px;
                font-family: sans-serif;
                font-size: large;
                font-weight: 900;
            }
            td{
                border-color: #999999;
                border-width: 3px;
                border-style: solid;
                padding: 2px;
            }
            
            h3{
                background-color: #663399;
                color: #ffff00;
            }
        </style>
    </head>
    <body>
        <div>
            <?php
            // put your code here

            //   Mahmudul   Hasan   Khan   DIU : 143-25-417
            
            echo "<h3>Numerical Matrix Table</h3>";
            $xy_matrix = array(array(3,5,13),
                                    array(4,16,256));
            echo "<table>";
            echo "<tr><td></td>";
            for($column = 0; $column < count($xy_matrix[0]); $column++)
                echo "<td>".$column."</td>";
            echo "</tr>";
            for($row = 0; $row < count($xy_matrix); $row++) {
                echo "<tr><td>".$row."</td>";
                for($column = 0; $column < count($xy_matrix[$row]); $column++)
                    echo "<td>".$xy_matrix[$row][$column]."</td>";
                echo "</tr>";
            }
            echo "</table>";

            echo "<h3>Associative   Matrix   Table</h3>";

            $results = array(array("id"=>'101',"course"=>'CSE101',"grade"=>'A+'),
                            array("id"=>'104',"course"=>'CSE101',"grade"=>'B'),
                            array("id"=>'105',"course"=>'CSE101',"grade"=>'A-'));
            echo "<table><tr><th></th>";
            
            $headers = array();
            $headers = $results[0];
            
            while (list($key, $value) = each($headers)) {
                echo "<th>" . $key . "</th>";
            }
            echo "</tr>";
            
            for($i = 0; $i < count($results); $i++) {
                echo "<tr><td>".$i."</td>";
                while (list($key, $value) = each($results[$i])) {
                    echo "<td>" . $value . "</td>";
                }
                echo "</tr>";
            }
            
            echo "</table>";
            ?>
        </div>
    </body>
</html>