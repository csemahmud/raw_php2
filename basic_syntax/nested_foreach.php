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
        
        //   MAHMUDUL   HASAN   KHAN   BASIS   5
        
        function get_data()
        {
        
            $data = array();
        
            $data[0]["name"] = "Mahmud";
            $data[0]["age"] = 23;
            $data[0]["cgpa"] = 3.2;
            $data[1]["name"] = "Zaman";
            $data[1]["age"] = 22;
            $data[1]["cgpa"] = 2.9;
            $data[2]["name"] = "Aminul";
            $data[2]["age"] = 22;
            $data[2]["cgpa"] = 3.6;
            $data[3]["university"] = "MBSTU";
            $data[3]["dept"] = "CSE";
            
            return $data;
        
        }
        
        foreach (get_data() as $key_row => $row_value)
        {
            echo "<li>[$key_row]  =>   ";
            
            foreach ($row_value as $key_col => $col_value) {
                echo "$key_col : $col_value   |   ";
            }
            
            echo "</li>";
        }
        
        ?>
            
        </ul>
    </body>
</html>
