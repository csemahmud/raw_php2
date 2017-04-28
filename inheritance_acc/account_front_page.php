<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php 

require_once './accounts/account.php';
require_once './accounts/savings_account.php';
require_once './accounts/checking_account.php';

use Accounts\Account;
use Accounts\Savings_Account;
use Accounts\Checking_Account;

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Inheritance</title>
        <style type="text/css">
            
            .fail {
                color: #ff0000;
                font-family: cursive;
                font-style: italic;
            }
            
        </style>
    </head>
    <body>
        
        <h3><u>Inheritance    Account</u></h3>
        
        <?php
        // put your code her
        // 
        // @author MAHMUDUL   HASAN   KHAN   BASIS   5
        
        function show_transactions($accounts) {
            ?>
                <?php
            foreach ($accounts as $v_account) { ?>
                <table>
                <caption>Account No. <?php echo $v_account->get_acc_no(); ?></caption>
                <tr>
                    <th>Function</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
                <?php
                echo $v_account->deposit(5000);
                echo $v_account->withdraw(1000);
                echo $v_account->withdraw(10000);
            ?>
                </table>
                <?php echo $v_account->to_string(); ?>
                <hr>
                <?php } ?>
            <?php
        }
        
        $a_savings_accout_obj = new Savings_Account("SV:001", 4500);
        $a_checking_accout_obj = new Checking_Account("CK:001", 2500);
        $accounts = array();
        $accounts[0] = $a_savings_accout_obj;
        $accounts[1] = $a_checking_accout_obj;
        $accounts[2] = new Account("CK:002");
        show_transactions($accounts);
        
        ?>
    </body>
</html>
