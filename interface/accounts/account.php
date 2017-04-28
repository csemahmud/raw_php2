<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Accounts;

/**
 *
 * @author MAHMUDUL   HASAN   KHAN   BASIS   5
 */
interface Account {
    //put your code here
    
    function to_string();
    
    function get_acc_no();
    
    function get_balance();
    
    function deposit($amount);
    
    function withdraw($amount);
    
}
