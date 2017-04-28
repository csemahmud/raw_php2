<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Range   Form</title>
    </head>
    <body>
        <form action="range_form.php" method="post">
        <table>
            
            <tr>
                
                <td>First   Number :-</td>
                <td><input type="text" name="fisrt_number"></td>
                
            </tr>
            <tr>
                
                <td>Second   Number :-</td>
                <td><input type="text" name="second_number"></td>
                
            </tr>
            <tr>
                
                <td></td>
                <td><input type="submit" name="submit_button" value="submit"></td>
                
            </tr>
            
        </table>
        </form>
        <hr/>
        <?php
        //   MAHMUDUL   HASAN   KHAN   Talha   Training
        
        require_once './utility.php';
        
        echo "<pre>";
        print_r($_POST);
        
        if(isset($_POST["submit_button"]))
        {
            $obj = new Utility();
            $obj->show_range($_POST["fisrt_number"], $_POST["second_number"]);
        }
 else {
            echo "<p>Enter  numbers  and  Submit</p>";
 }
        ?>
    </body>
</html>
