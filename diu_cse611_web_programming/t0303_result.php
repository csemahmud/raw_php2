<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Result</title>
    </head>
    <body>
        <div>
            <h3>Displaying Result</h3>
            <?php
            
            include ('t0301_connect_lib.php');
            
            // put your code here
            
            //   Mahmudul   Hasan   Khan   DIU : 143-25-417
            
            $connection = connect();
            $db_name = "db_diu_result";
            $sql = "SELECT * FROM tbl_grade";
            if(isset($_POST['student_id']))
                $sql .= " WHERE student_id = '".$_POST['student_id']."';";
            mysql_select_db($db_name,$connection);
            $rs = mysql_query($sql);
            $nrow = mysql_num_rows($rs);
            
            if($nrow > 0) {
                echo "<table><tr><th></th><th>Student Id</th><th>Course</th><th>Grade</th></tr>";

                for($i = 0; $i < $nrow; $i++) {
                    echo "<tr><td>".$i."</td>";
                    $row = mysql_fetch_array($rs);
                    echo '<td>'.$row['student_id'].'</td><td>'.$row['course'].'<td/><td>'.$row['grade']."</td>";
                    echo "</tr>";
                }

                echo "</table>";
            }
            else
                echo "<h3>No Result Found to show</h3>";
            
            ?>
        </div>
    </body>
</html>
