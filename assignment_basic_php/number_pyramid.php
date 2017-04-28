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
        <span><strong>Enter   Number   of  rows</strong></span>s
        <input type="number" name="row_number">
        <input type="submit" name="show_btn" value="Show   Number   Pyramid">
        </form>
        <hr/>
        <?php
        // put your code here
        
        //   MAHMUDUL   HASAN   KHAN   BASIS   5
        
        if(isset($_POST["show_btn"])){
            
            $total_row = $_POST["row_number"];
            
            for($row=1;$row<=$total_row;$row++)
            {
                 for($col=1;$col<=$row;$col++)
                 {
                     echo "$col   ";
                 }
                 echo "<br/>";
            }?>
                
            <hr/>
                
              <?php
            
            for($row=1;$row<=$total_row;$row++)
            {
                for($col=1;$col<=($total_row-$row);$col++)
                 {
                     echo "&nbsp";
                 }
                 for($col=1;$col<=$row;$col++)
                 {
                     echo "$col   ";
                 }
                 echo "<br/>";
            }?>
                
                <hr/>
                
             <?php
             
             
             $number=1;
             for($row=1;$row<=$total_row;$row++)
            {
                for($col=1;$col<=($total_row-$row);$col++)
                 {
                     echo "&nbsp&nbsp&nbsp";
                 }
                 for($col=1;$col<=$row;$col++)
                 {
                     echo "$number&nbsp&nbsp";
                     if ($number<10)
                         echo "&nbsp";
                     $number++;
                 }
                 echo "<br/>";
            }
             
        }
        ?>
    </body>
</html>
