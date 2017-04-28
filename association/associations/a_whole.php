<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Associations;

require_once 'b_part.php';

/**
 * Description of a_whole
 *
 * @author MAHMUDUL   HASAN   KHAN   DIU   143-25-417
 */
class A_Whole {
    //put your code here
    
    private $b_part1 = NULL;
    private $b_part2 = NULL;
    
    public function __construct($b_part1) {
        
        $this->b_part1 = $b_part1;   //   Aggregation
        
        $this->b_part2 = new B_Part();   //   Composition
        
        $this->b_part2->set_number1(500);
        $this->b_part2->set_text1("Pakistan");
    }
    
    public function change_b_part2($number,$text) {
        $this->b_part2->set_number1($this->b_part2->get_number1()+$number);
        $this->b_part2->set_text1($this->b_part2->get_text1().$text);
    }
    
    public function get_string_b_part1() {
        return $this->b_part1->to_string();
    }
    
    public function get_string_b_part2() {
        return $this->b_part2->to_string();
    }
    
    static public function determine_odd_even($b_part_prm) {
        
        //   Dependency
        
        if($b_part_prm->get_number1()%2) {
            return "This BPart has ODD number";
        }
        return "This BPart has EVEN number";
    }
}
