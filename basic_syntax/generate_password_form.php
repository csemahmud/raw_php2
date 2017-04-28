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
        
        //   MAHMUDL   HASAN   KHAN   BASIS   5
        
        function generate_password($lenght)
        {
            $data = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t",
                "u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q",
                "R","S","T","U","V","W","X","Y","Z","0","1","2","3","4","5","6","7","8","9");
            $str = "";
            for($i=0;$i<$lenght;$i++)
            $str.=$data[rand(0, (count($data)-1))];
            return $str;
        }
        
        ?>
        
        <form action="" method="post">
            
            <table>
                
                <tr>
                    
                    <td><strong>Input   Length</strong></td>
                    <td><input type="number" name="length" value="<?php 
                    if (isset($_POST["length"]))echo $_POST["length"];
                        ?>"></td>
                    
                </tr>
                <tr>
                    
                    <td></td>
                    <td><input type="submit" name="generate_btn" value="Generate   Password"></td>
                    
                </tr>
                <tr>
                    
                    <td><strong>The   password   is : </strong></td>
                    <td>
                        
                        <?php 
                        if (isset($_POST["length"]))
                                echo generate_password($_POST["length"]); 
                                ?>
                        
                    </td>
                    
                </tr>
                
            </table>
            
        </form>
        
    </body>
</html>
