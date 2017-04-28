<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Accounts;

require_once 'account.php';

/**
 * Description of checking_account
 *
 * @author MAHMUDUL   HASAN   KHAN   BASIS   5
 */
class Checking_Account extends Account {
    //put your code here
    
    private $no_of_transactions = NULL;
    private $service_charge = NULL;

    public function __construct($acc_no,$service_charge) {
        parent::__construct($acc_no);
        $this->service_charge = $service_charge;
        $this->no_of_transactions = 0;
    }
    
    public function get_no_of_transactions() {
        return $this->no_of_transactions;
    }
    
    public function get_service_charge() {
        return $this->service_charge;
    }
    
    public function withdraw($amount) {
        $this->balance -= $amount;
        return "<tr><td>Withdrawn </td><td>".$amount." BDT</td><td> successfully .</td></tr>";
    }
}
