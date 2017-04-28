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
        <form action="" method="post">
            
            <input type="text" name="first_number" value="<?php
            if(isset($_POST['first_number']))
                echo $_POST['first_number'];
            
            ?>">
            <br/>
            <input type="text" name="second_number" value="<?php
            
            if(isset($_POST['second_number']))
                echo $_POST['second_number'];
            
            ?>">
            <br/>
            <input type="submit" name="btn" value="Add">    |     
            <input type="submit" name="btn" value="Sub">
            
        </form>
        
        <hr/>
        <pre>
        <?php
        // put your code here
        
        echo "<pre>";
        
        print_r($_POST);
        
        echo "</pre>";
        
        if(isset($_POST["btn"]))
        {
        
            $first_number = $_POST['first_number'];
            $second_number = $_POST['second_number'];
            
            
            if($_POST['btn']=="Add")
                $result = $first_number + $second_number;
            elseif ($_POST['btn']=="Sub") {
                $result = $first_number - $second_number;
            }
            
            echo $result;
            
        }
        ?>
        </pre>
    </body>
</html>
