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
        
        //   MAHMUDUL   HASAN   KHAN   BASIS   5
        
        function search_arrray($param)
        {
            $data = array("html","css","javascript","js","jquery","ajax","php","mysql","codeigniter","ci");
            $test = in_array($param, $data);
            if ($test){
                echo "<p><i>$param</i>   has   been   found   in  the  array</p>";
            }
            else {
                echo "<p><i>$param</i>   has   <strong>NOT</strong>   been   found   in  the  array</p>";
            }
            return $test;
        }
        
        ?>
        
        <form action="" method="post">
            
            <table>
                
                <tr>
                    
                    <td><strong>Enter   a   string   to   search</strong></td>
                    <td><input type="text" name="input_str" value="<?php 
                    
                    if (isset($_POST["input_str"]))
                        echo $_POST["input_str"];
                    
                    ?>"></td>
                    
                </tr>
                <tr>
                    
                    <td></td>
                    <td><input type="submit" name="search_btn" value="Search   String"></td>
                    
                </tr>
                <tr>
                    
                    <td></td>
                    <td><?php 
                    if(isset($_POST["search_btn"]))
                        echo search_arrray($_POST["input_str"]); ?>
                    </td>
                    
                </tr>
                
            </table>
            
        </form>
        
    </body>
</html>
