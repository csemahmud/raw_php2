<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        $x= 10; $y= 15; $z= 20;
	echo "<br>X = ".$x." Y= ".$y." Z = ".$z;
	echo "<br>X + Y = ".$x.$y." Z= ".$z;
	echo "<br>X + Y + Z = ".$x.($y+$z);
	echo "<br>X".$x.$y.$z;

        ?>
        
        <hr/>
        
        <?php 
        
        $msg= "One Two Three Four Five Six";
        $astr=explode(" ",$msg);
        for($i=0; $i<count($astr); $i++) echo "<br>".$astr[$i];
        $mstr=implode(">",$astr);
        echo "<br>".$mstr;

        
        ?>
    </body>
</html>
