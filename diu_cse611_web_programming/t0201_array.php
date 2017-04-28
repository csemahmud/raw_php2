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
            
            td{
                width: 204px;
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
            <table>
                <tr>
                    <td>
                    <?php
                    // put your code here

                    //   Mahmudul   Hasan   Khan   DIU : 143-25-417

                    echo "<h3>An 1-D Array : </h3>";
                    $x_array = array();
                    $x_array[0] = 10;
                    $x_array[2] = 15;
                    $x_array[10] = 25;
                    $x_array[100] = 35;
                    $x_array[1000] = 55;
                    echo "<pre>";
                    print_r($x_array);
                    echo "</pre>";
                    ?>
                    </td>
                    <td>
                        |
                    </td>
                    <td>
                    <?php
                    echo "<h3>After adding 7 at Index 1 </h3>";
                    $x_array[12] = 18;
                    $x_array[1] = 7;
                    echo "<pre>";
                    print_r($x_array);
                    echo "</pre>";
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>
                    <?php
                    echo "<h3>A 2-D Matrix : </h3>";
                    $xy_matrix = array(array(1,3,5),
                                    array(7,8,9));
                    echo "<pre>";
                    print_r($xy_matrix);
                    echo "</pre>";

                    ?>
                    </td>
                    <td>
                        |
                    </td>
                    <td>
                    <?php
                    echo "<h3>A 2D Associative Matrix : </h3>";
                    $students = array(array("id" => '417', "name" => 'Mahmud'),
                                    array("id" => '416', "name" => 'Alia'),
                                    array("id" => '418', "name" => 'Shraddha'));
                    echo "<pre>";
                    print_r($students);
                    echo "</pre>";

                    ?>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
