<?php session_start();?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
    </head>
    <body>
        <?php
        // put your code here
        
        //   MAHMUDUL   HASAN   KHAN   TALHA   TRAINING
        if(!isset($_SESSION['admin'])) {

            if(isset($_POST['log_in_btn'])) {
            
                $hostname = $_SERVER["SERVER_NAME"];
                $username = "root";
                $password = "";
                $db_name= "db_simple_login";

                $connection = mysql_connect($hostname, $username, $password);
                if(!$connection)
                {
                    die("<p>Database   connection   failed   ERROR   No.# : "
                            .mysql_errno()."   ERROR : ".mysql_error()."</p>");
                }
                else {
                           mysql_select_db($db_name);
                }
                $sql = "SELECT * FROM tbl_admin WHERE email = '"
                        .$_POST['email']."' AND password = '".md5($_POST['password'])."';";
                $result = mysql_query($sql);

                if(mysql_num_rows($result) > 0) {
                    $_SESSION['admin'] = mysql_fetch_array($result);
                }
            }
            
        }
        
        if(isset($_SESSION['admin'])) {
            $admin = $_SESSION['admin'];
            
        ?>
            <h1>Welcome, <i><?php echo $admin['name'] ?></i></h1>
            <form action="login_form.php" method="post">
                <input type="submit" name="log_out_btn" value="Log Out" >
            </form>
        
        <?php }
        else {
            ?>
            <span>Error : Invalid Username / Password</span>
            <br/>
            <a href="login_form.php">Back</a>
                
                <?php
        }
        ?>
    </body>
</html>
