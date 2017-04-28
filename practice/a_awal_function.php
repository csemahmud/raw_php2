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
        
        function calculate_area($radius){
            $area = 3.1416*$radius*$radius;
            /*echo $area;*/
            return $area;
        }
        
        ?>
        
        <table>
            
            
            <tr>
                
                <td>Hello   world</td>
                
            </tr>
            <tr>
                
                <td>Hello   Bangladesh</td>
                
            </tr>
            
        </table>
        
        <?php
        
        echo "<h1>Test</h1>";
        
        $x =  calculate_area(6);
        echo "<br/>";
        calculate_area(7);
        echo "<br/>";
        calculate_area(8);
        echo "<br/>";
        calculate_area(9);
        echo "<br/>";
        echo $x+5;
        
        ?>
        
        
    </body>
</html>
