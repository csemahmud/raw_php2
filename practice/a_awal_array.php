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
        
        /*$data = array(34,"asd",3.1416,"name"=>"Abdul   Awal");
        
        for($i = 0;$i<3;$i++)
        {
            echo $data[$i]."<br/>";
        }
        
        echo "<hr/>";
        
        foreach ($data as $asd=>$zxc)
        {
            echo "$asd    $zxc<br/>";
        }*/
        
        
        $data = array();
        
        $data[0]["name"]  =  "Mahmud";
        $data[0]["age"] = "23";
        $data[0]["cgpa"] = "3.2";
        $data[1]["name"] = "Zaman";
        $data[1]["age"] = "21";
        $data[1]["cgpa"] = "2.9";
        $data[2]["university"] = "MBSTU";
        $data[2]["dept"] = "CSE";
        
        for($row = 0;$row<3;$row++)
        {
            foreach ($data[$row] as $key=>$value)
            {
                echo "$key : $value   |   ";
            }
            echo "<br/>";
        }


        
        ?>
    </body>
</html>
