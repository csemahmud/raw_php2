<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//   MAHMUDUL   HASAN   KHAN   TALHA   TRAINING

/**
 * Description of user_dao
 *
 * @author User
 */
class User_DAO {
    //put your code here
    
    private $user_id = NULL;
    private $first_name = NULL;
    private $middle_name = NULL;
    private $last_name = NULL;
    private $nick_name = NULL;
    private $reg_no = NULL;
    private $email = NULL;
    private $password = NULL;
    private $mobile_no = NULL;
    private $address = NULL;
    private $city = NULL;
    private $company_name = NULL;
    private $zip_code = NULL;
    private $country = NULL;
    private $gender = NULL;
    private $age = NULL;
    private $reg_date = NULL;
    private $color_code = NULL;
    private $browser = NULL;

    function __construct($data) {
        if(isset($data["user_id"]))
            $this->user_id = $data["user_id"];
        $this->first_name = $data["first_name"];
        $this->middle_name = $data["middle_name"];
        $this->last_name = $data["last_name"];
        $this->nick_name = $data["nick_name"];
        if (isset($data["reg_no"]))
            $this->reg_no = $data["reg_no"];
        $this->email = $data["email"];
        if(isset($data["password"]))
            $this->password = $data["password"];
        $this->mobile_no = $data["mobile_no"];
        $this->address = $data["address"];
        $this->city = $data["city"];
        $this->company_name = $data["company_name"];
        $this->zip_code = $data["zip_code"];
        $this->country = $data["country"];
        $this->gender = $data["gender"];
        $this->age = $data["age"];
        $this->reg_date = $data["reg_date"];
        $this->color_code = $data["color_code"];
        $this->browser = $data["browser"];
    }
    
    function get_user_id(){
        return $this->user_id;
    }
    function get_first_name(){
        return $this->first_name;
    }
    function get_middle_name(){
        return $this->middle_name;
    }
    function get_last_name(){
        return $this->last_name;
    }
    function get_full_name(){
        if($this->middle_name=="")
            return $this->first_name." ".$this->last_name;
        else {
            return $this->first_name." ".$this->middle_name." ".$this->last_name;
        }
    }
    function get_nick_name(){
        return $this->nick_name;
    }
    function get_reg_no(){
        return $this->reg_no;
    }
    function get_email(){
        return $this->email;
    }
    function get_password(){
        $encripted_password = md5($this->password);
        return $encripted_password;
    }
    function get_mobile_no(){
        return $this->mobile_no;
    }
    function get_address(){
        return $this->address;
    }
    function get_city(){
        return $this->city;
    }
    function get_company_name(){
        return $this->company_name;
    }
    function get_zip_code(){
        return $this->zip_code;
    }
    function get_country(){
        return $this->country;
    }
    function get_gender(){
        return $this->gender;
    }
    function get_age(){
        return $this->age;
    }
    function get_reg_date(){
        return $this->reg_date;
    }
    function get_color_code(){
        return $this->color_code;
    }
    function get_browser(){
        return $this->browser;
    }
}

?>
