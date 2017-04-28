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
        
        <table>
            <tr>
                
                <td><strong>Input   Temperature   :-  </strong></td>
                <td><input type="text" name="input_temp" value="<?php if(isset($_POST["input_temp"]))
                    echo $_POST["input_temp"]; ?>"></td>
                
            </tr>
            <tr>
                
                <td><strong>Select   Conversion    Type :- </strong></td>
                <td>
                    
                    <select name="converter">
                        
                        <option value="f_to_c"> Farenheit  to  Celcius </option>
                        <option value="c_to_f"> Celcius  to  Farenheit </option>
                        
                    </select>
                    
                </td>
                
            </tr>
            <tr>
                
                <td></td>
                <td><input type="submit" name="convert_btn" value="Convert"></td>
                
            </tr>
        <tr>
            <td><strong>Output   Temperature</strong></td>
            <td>
        <?php
        // put your code here
        
        //   MAHMUDUL   HASAN   KHAN   Talha   Training
        
        if(isset($_POST["convert_btn"]))
            
            switch ($_POST["converter"]){
            
            case "c_to_f":
                echo $_POST["input_temp"]*180/100+32;
                break;
            case "f_to_c":
                echo ($_POST["input_temp"]-32)*100/180;
                break;
            
            }
            
        
        ?>
            </td>
        </tr>
        </table>
            
        </form>
    </body>
</html>
