<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$selection = '';
if(isset($_GET['s'])){
    $selection = $_GET['s'];
}

switch ($selection){
case '1':
    ?><h1>You   Have   Selected   One</h1><?php
            break;
case '2':
    ?><h1>You   Have   Selected   Two</h1><?php
            break;
default :
    ?><h1>You   Have   Selected   None</h1><?php
            break;
}

?>
