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
        ?>
        
        <form action="" method="post">
            
            <table>
                
                <tr>
                    
                    <td><strong>First   Number : </strong></td>
                    <td><input type="text" name="first_number" 
                               value="<?php if(isset($_POST["first_number"]))echo $_POST["first_number"];?>" required="required"></td>
                    
                </tr>
                <tr>
                    
                    <td><strong>Second   Number : </strong></td>
                    <td><input type="text" name="second_number" 
                               value="<?php if(isset($_POST["second_number"]))echo $_POST["second_number"];?>" required="required"></td>
                    
                </tr>
                <tr>
                    
                    <td><strong>Function : </strong></td>
                    <td>
                        <input type="submit" name="function" value="Add(+)">   |   
                    <input type="submit" name="function" value="Subtract(-)">   |   
                    <input type="submit"  name="function" value="Multiply(*)">   |   
                    <input type="submit" name="function" value="Divide(/)">   |   
                    <input type="submit" name="function" value="Modulous(%)">
                    </td>
                    
                </tr>
                <tr>
                    
                    <td><strong>Result : </strong></td>
                    <td><?php 
                    
                        //   MAHMUDUL   HASAN   KHAN   TALHA   TRAINING
                    
                            require_once './classes/bll/calculation_manager.php';
                            
                            if (isset($_POST["function"])) {
                                
                                echo Calculation_Manager::calculate($_POST);
                                
                            }
                    
                    ?></td>
                    
                </tr>
                
            </table>
            
        </form>
        <a href="view_all_calculations_ui.php" target="_blank">View   all   Calculations</a>
        <pre>

        <?php
        
        print_r($_POST);
        
        ?>

        </pre>
        
    </body>
</html>
