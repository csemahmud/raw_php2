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

        //   MAHMUDUL   HASAN   KHAN   Talha   Training
        
        if (isset($_POST['submit_btn'])){
            echo '<pre>';
            print_r($_POST);
            echo '<pre>';
        }
        ?>
        
        <form action="" method="post">
            
            <input type="text" name="checkbox_name">
            <input type="checkbox" name="test_checkbox" value="1">
            <input type="checkbox" name="test_checkbox" value="2">
            <input type="checkbox" name="test_checkbox">
            <input type="submit" name="submit_btn">
            
        </form>
        
    </body>
</html>
