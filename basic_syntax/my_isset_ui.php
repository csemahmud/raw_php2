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
        
        function my_isset($param)
        {
            if ($param==NULL)
                return FALSE;
            else {
                return TRUE;
            }
        }
        
        function show_val($param)
        {
            if(my_isset($param))
                echo "Value   is : $param<br/>";
            else {
                echo "No   value<br/>";
            }
        }


        $var1 = "asd";
        show_val($var1);
        show_val($var2);
        
        ?>
    </body>
</html>
