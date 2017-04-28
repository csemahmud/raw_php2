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
        
        <ul>
        
        <?php
        // put your code here
        
        //   MAHMUDUL   HASAN   KHAN   Talha   Training
        
        class Test_Class{
            public $data1 = 1;
            public $data2 = "asd";
            public $data3 = -0.0123;
            
            function test_function1(){
                echo "From   Test   Function : 1";
            }
            
            function test_function2(){
                return "From   Test   Function : 2";
            }
        }
        
        $test_obj = new Test_Class();
        
        foreach ($test_obj as $key=>$value)
        {
            echo "<li>$key : $value</li>";
        }
        
        ?>
        
        </ul>
    </body>
</html>
