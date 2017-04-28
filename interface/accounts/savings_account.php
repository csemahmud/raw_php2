<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Accounts;

require_once 'account.php';

/**
 * Description of savings_account
 *
 * @author MAHMUDUL   HASAN   KHAN   BASIS   5
 */

class Savings_Account implements Account {
    //put your code here
    
    private $interest_amount = NULL;
    private $acc_no = NULL;
    private $balance = NULL;


    public function __construct($acc_no,$interest_amount) {
        $this->acc_no = $acc_no;
        $this->interest_amount = $interest_amount;
        $this->balance = 0.0000;
    }
    
    public function get_interest_amount() {
        return $this->interest_amount;
    }
    
    public function withdraw($amount) {
        if(($this->balance-$amount) >= 1000)  {
            $this->balance -= $amount;
            return "<tr><td>Withdrawn </td><td>".$amount." BDT</td><td> successfully .</td></tr>";
        }
        return '<tr class = "fail"><td> Withdraw </td><td>'.$amount
                ."   BDT   </td><td>Underflow !!! Insufficient Balance .</tr>";
    }

    public function deposit($amount) {
        $this->balance += $amount;
        return "<tr><td>Deposited </td><td>".$amount." BDT</td><td> successfully .</td></tr>";
    }

    public function get_acc_no() {
        return $this->acc_no;
    }

    public function get_balance() {
        return $this->balance;
    }

    public function to_string() {
        return "\n\tYour Account No. is : ".$this->acc_no." and its Balance is : ".$this->balance." BDT only";
    }

}
