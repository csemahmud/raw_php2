<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$name = '';
if(isset($_GET['n'])){
    $name = $_GET['n'];
}

?>

<table>
    
    <tr>
        
        <th><strong>Name</strong></th>
        <td>:</td>
        <td><i><?php echo $name; ?></i></td>
        
    </tr>
    
</table>
<form name="test_form" id="test_form" action="" method="post">
    
    <select id="test_select" name="test_select" onchange="show_selection(this.value)" onshow="select_value()" onloadstart="select_value()">
        
        <option value=" ">----- Select -----</option>
        <option value="1">First Test Option</option>
        <option value="2">Second Test Option</option>
        
    </select>
    
</form>
<script type="text/javascript">
function select_value(){
document.forms['test_form'].elements['test_select'].value = '2';
}
document.write('second_test');

</script>
