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

class Savings_Account extends Account {
    //put your code here
    
    private $interest_amount = NULL;
    
    public function __construct($acc_no,$interest_amount) {
        parent::__construct($acc_no);
        $this->interest_amount = $interest_amount;
    }
    
    public function get_interest_amount() {
        return $this->interest_amount;
    }
    
    public function withdraw($amount) {
        if((parent::get_balance()-$amount) >= 1000)  {
            return parent::withdraw($amount);
        }
        return '<tr class = "fail"><td> Withdraw </td><td>'.$amount
                ."   BDT   </td><td>Underflow !!! Insufficient Balance .</tr>";
    }
    
}
