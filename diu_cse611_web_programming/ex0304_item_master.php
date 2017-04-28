<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Item Master</title>
    </head>
    <body>
        <h3>Displaying Items</h3>
        <?php
            
            include ('t0301_connect_lib.php');
            
            // put your code here
            
            //   Mahmudul   Hasan   Khan   DIU : 143-25-417
            
            $connection = connect();
            $db_name = "db_item";
            $sql = "SELECT * FROM tbl_item_master";
            mysql_select_db($db_name,$connection);
            $rs = mysql_query($sql);
            $nrow = mysql_num_rows($rs);
            
            if($nrow > 0) {
                echo "<table><tr><th></th><th>Item ID</th><th>Item Name</th><th>Quantity</th><th>Price</th></tr>";

                for($i = 0; $i < $nrow; $i++) {
                    echo "<tr><td>".$i."</td>";
                    $row = mysql_fetch_array($rs);
                    echo '<td>'.$row['item_id'].'</td><td>'.$row['item_name'].'</td><td>'.$row['quantity'].'</td><td>'.$row['quantity'].'</td>';
                    echo "</tr>";
                }

                echo "</table>";
            }
            else
                echo "<h3>No Result Found to show</h3>";
            
        ?>
    </body>
</html>
