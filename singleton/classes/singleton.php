<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Classes;

/**
 * Description of singleton
 *
 * @author MAHMUDUL   HASAN   KHAN   DIU   143-25-417
 */
class Singleton {
    //put your code here

	private static $unique_instance = NULL;
	private static $id = 0;
	
	private $number1 = 0;
	private $text1 = '';
        
        private function __construct() {
            Singleton::$id++;
        }

	/**
	 * @return the number1
	 */
	public function get_number1() {
		return $this->number1;
	}

	/**
	 * @param number1 the number1 to set
	 */
	public function set_number1($number1) {
		$this->number1 = $number1;
	}

	/**
	 * @return the text1
	 */
	public function get_text1() {
		return $this->text1;
	}

	/**
	 * @param text1 the text1 to set
	 */
	public function set_text1($text1) {
		$this->text1 = $text1;
	}

	/**
	 * @return the uniqueInstance
	 */
	public static function get_unique_instance() {
		if(Singleton::$unique_instance == NULL) {
			Singleton::$unique_instance = new Singleton();
		}
		return Singleton::$unique_instance;
	}
        
	public function to_string() {
		return "Singleton : ".Singleton::$id." :[number1=".$this->number1.", text1=".$this->text1."]";
	}

}
