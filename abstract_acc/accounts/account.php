<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Accounts;

/**
 * Description of account
 *
 * @author MAHMUDUL   HASAN   KHAN   BASIS   5
 */
abstract class Account {
    //put your code here
    
    private $acc_no = NULL;
    protected $balance = NULL;
            
    public function __construct($acc_no) {
        $this->acc_no = $acc_no;
        $this->balance = 0.0000;
    }
    
    public function to_string() {
        return "\n\tYour Account No. is : ".$this->acc_no." and its Balance is : ".$this->balance." BDT only";
    }
    
    public function get_acc_no() {
        return $this->acc_no;
    }
    
    public function get_balance() {
        return $this->balance;
    }
    
    public function deposit($amount) {
        $this->balance += $amount;
        return "<tr><td>Deposited </td><td>".$amount." BDT</td><td> successfully .</td></tr>";
    }
    
    public abstract function withdraw($amount); //{
        //$this->balance -= $amount;
        //return "<tr><td>Withdrawn </td><td>".$amount." BDT</td><td> successfully .</td></tr>";
    //}
}
