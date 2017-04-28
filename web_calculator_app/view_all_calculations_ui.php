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
        <table border="1">
            <tr>
                
                <th>Calculation   ID</th>
                <th>First   Number</th>
                <th>Second   Number</th>
                <th>Function</th>
                <th>Result</th>
            
            </tr>
        <?php
        // put your code here
        
        //   MAHMUDUL   HASAN   KHAN   TALHA   TRAINING
        
        require_once './classes/bll/calculation_manager.php';
        
        $calculation_objs = Calculation_Manager::get_all_calculations();
        
        foreach ($calculation_objs as $row) {
    ?>
        
            <tr>
                <td><?php echo $row->get_calculation_id(); ?></td>
                <td><?php echo $row->get_first_number(); ?></td>
                <td><?php echo $row->get_second_number(); ?></td>
                <td><?php echo $row->get_function(); ?></td>
                <td><?php echo $row->get_result(); ?></td>
                
            </tr>
        
        <?php
}
        
        ?>
        </table>
        <a href="web_calculator_form.php" target="_blank">Claculate   Again</a>
    </body>
</html>
