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
        <form action="" method="post">
        <table>
            
            <tr>
                
                <td>First   Number :-</td>
                <td><input type="number" name="fisrt_number"></td>
                
            </tr>
            <tr>
                
                <td>Second   Number :-</td>
                <td><input type="number" name="second_number"></td>
                
            </tr>
            <tr>
                
                <td>Series   Type :- </td>
                <td><input type="radio" name="type" value="default" checked="checked">Default
                    <input type="radio" name="type" value="odd">Odd
                    <input type="radio" name="type" value="even">Even
                
                </td>
                
            </tr>
            <tr>
                
                <td></td>
                <td><input type="submit" name="submit_button" value="submit"></td>
                
            </tr>
            
        </table>
        </form>
        <hr/>
        <?php
        //   MAHMUDUL   HASAN   KHAN   BASIS   5
        
        require_once './utility_odd_even.php';
        
        if(isset($_POST["submit_button"]))
        {
            $obj = new Utility();
            $obj->show_range($_POST["fisrt_number"], $_POST["second_number"], $_POST["type"]);
        }
 else {
            echo "<p>Enter  numbers  and  Submit</p>";
 }
        ?>
    </body>
</html>
