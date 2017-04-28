<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        //   MAHMUDUL   HASAN   KHAN   w3schools.com

        //   create   connection
        $connection = mysql_connect($_SERVER["SERVER_NAME"],"root","");

        //   check   connection
        if(!$connection)
            die("<p>Failed   to   connect   to   MySQL : ERROR   No.# : ".mysql_errno()
                ." ERROR : ".mysql_error()."</p>");

        $db_name = "db_web_calculator_app";
        
        //   create   database
        $sql1 = "CREATE DATABASE $db_name";

        //   execute   query
        if(!mysql_query($sql1))
            die ("<p>Error   creating   DataBase : ERROR No.# : ".mysql_errno()
                    ." ERROR : ".mysql_error()."</p>");
            
        else {
            echo "<p>Database : $db_name has been created successfully .</p>";

            mysql_select_db($db_name);

        //   create   table
        $sql2 = "CREATE TABLE tbl_calculation
            (
                calculation_id INT NOT NULL AUTO_INCREMENT,
                PRIMARY KEY(calculation_id),
                first_number DOUBLE NOT NULL,
                second_number DOUBLE NOT NULL,
                function VARCHAR(15) NOT NULL,
                result DOUBLE NOT NULL
            )";

        //   execute   query
        if(mysql_query($sql2))
            echo "<p>Table : tbl_calculation has been created successfully .</p>";
        else {
            die("<p>Error   creating   Table : ERROR No.# : ".mysqli_errno()
                ." ERROR : ".mysqli_error()."</p>");
        }
        
        }
        ?>
        <br/>
        <a href="../web_calculator_form.php">Use   web   Calculator</a>
    </body>
</html>
