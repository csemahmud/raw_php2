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
        //   MAHMUDUL   HASAN   KHAN   Talha   Training
        
        require_once './utility.php';
        
        $abcd = new Utility();
        
        $result1 = $abcd->add(5,3);
        echo "$result1<br/>";
        $full_name = $abcd->concat("Mahmudul   ","Hasan");
        echo "$full_name<br/>";
        $result2 = $abcd->child_sub(50, 10);
        echo "$result2<br/>";
        $result3 = $abcd->child_sub(10, 50);
        echo "$result3<br/>";
        $abcd->show_range(25,35);
        $abcd->show_range(60,50);
        ?>
    </body>
</html>
