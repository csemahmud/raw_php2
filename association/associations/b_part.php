<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Associations;

/**
 * Description of b_part
 *
 * @author MAHMUDUL   HASAN   KHAN   DIU   143-25-417
 */
class B_Part {
    //put your code here
    
    private $number1 = NULL;
    private $text1 = NULL;
    private static $sid = 0;
    private $id = 0;
    
    public function __construct() {
        static::$sid++;
        $this->id = static::$sid;
    }

        public function set_number1($number1) {
        $this->number1 = $number1;
    }
    
    public function get_number1() {
        return $this->number1;
    }
    
    public function set_text1($text1) {
        $this->text1 = $text1;
    }
    
    public function get_text1() {
        return $this->text1;
    }
    
    public function to_string() {
        return "\n\tB_Part".$this->id." : [ number1 = ".$this->number1."; text1 = ".$this->text1."; ]";
    }
}
