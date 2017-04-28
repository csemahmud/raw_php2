<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style type="text/css">
            
            a{
                background-color: #ffffff;
            }
            
        </style>
        <script type="text/javascript" src="js/country.js"></script>
        <script type="text/javascript" src="js/jsval.js"></script>
    </head>
    <!--   MAHMUDUL   HASAN   KHAN   BASIS   5-->
    <body>
        
        <div>
            <table border="1" width="980px" align="center" cellpadding="10px" cellspacing="10px" bgcolor="Cyan">
                <tr>
                    <td id="Logo" width="150px" height="150px">
                        LOGO
                        <img src="images/MSFT_logo_png.png" width="150" height="100">
                    </td>
                    <td colspan="2">
                        BANNER
                        <div>TODO write content</div>
                        <div>日本語能力試験 JLPT</div>
                        <a href="https://www.facebook.com/dosto.bou?ref=stream&hc_location=stream" target="_blank">
                        <h2>দোস্ত তোর বউ আমার বউ,আমার বউ তোর ভাবি:p</h2>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" height="40px">
                        MENU
                        <a href="first_html_table.html">Home</a>   |   
                        <a href="gallery.html">Gallery</a>   |   
                        <a href="signup.html">Sign Up</a>
                        
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        LEFT
                    </td>
                    <td bgcolor="olive" height="1000px" valign="top">
                        CONTENT 
                        <a href="#Footer">Footer</a>
                        <h3>Sign Up   !</h3>
                        <hr/>
                        <form action="details_form.php" method="post" onsubmit="return validateStandard(this);">
        
                            <?php
        
                            //   MAHMUDUL   HASAN   KHAN   TALHA   TRAINING
        
                            require_once './classes/bll/dal/models/user_dao.php';
                            require_once './classes/bll/user_manager.php';
        
                            $user_manager_obj = new User_Manager();
                            if(isset($_GET["user_id"]))
                                $user_obj = $user_manager_obj->get_user_by_id($_GET["user_id"]);
                            elseif (isset($_POST["update_button"])) {
                                $_POST["delete_button"] = NULL;
                                $user_obj = new User_DAO($_POST);
                                echo "<h3>".$user_manager_obj->update_user($user_obj)."</h3>";
                            }
                            
                            elseif (isset ($_POST["delete_button"])) {
                                $_POST["update_button"] = NULL;
                                $user_obj = new User_DAO($_POST);
                                echo "<h3>".$user_manager_obj->delete_user($user_obj->get_user_id(), 
                                        $user_obj->get_full_name())."</h3>";
                            }
        
                            ?>
                            <?php 
                            
                            if(!isset ($_POST["delete_button"])){
                            
                            ?>
                                    
                            
                            <table bgcolor="skyblue" align="center">
                                <tr>
                                    <td><strong>First Name : </strong></td>
                                    <td>:</td>
                                    <td>
                                        <input type="hidden" name="user_id" value="<?php echo $user_obj->get_user_id();?>">
                                        <input type="text" id="first_name" name="first_name" size="54" maxlength="25" placeholder="Enter First Name..." required="required" tabindex="1" 
                                               onchange="display_full_name();" onmouseout="display_full_name();" onblur="display_full_name();" onkeyup="display_full_name();"
                                               value="<?php echo $user_obj->get_first_name();?>">
                                        <span style="color:orangered">*</span>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td><strong>Middle Name : </strong></td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" id="middle_name" name="middle_name" size="54" maxlength="25" placeholder="Enter Middle Name..." tabindex="2" 
                                               onchange="display_full_name();" onmouseout="display_full_name();" onblur="display_full_name();" onkeyup="display_full_name();"
                                               value="<?php echo $user_obj->get_middle_name();?>">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td><strong>Last Name : </strong></td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" id="last_name" name="last_name" size="54" maxlength="25" placeholder="Enter Last Name..." required="required" tabindex="3" 
                                               onchange="display_full_name();" onmouseout="display_full_name();" onblur="display_full_name();" onkeyup="display_full_name();"
                                               value="<?php echo $user_obj->get_last_name();?>">
                                        <span style="color:orangered">*</span>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td><strong>Full Name : </strong></td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" id="full_name" name="full_name" size="54" tabindex="4"
                                               onmouseout="display_full_name();" onmousemove="display_full_name();" onmouseover="display_full_name();" disabled="disabled"
                                               value="<?php echo $user_obj->get_full_name();?>">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td><strong>Nick Name : </strong></td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" name="nick_name" size="54" maxlength="4" placeholder="4 Letters only..." tabindex="5"
                                               value="<?php echo $user_obj->get_nick_name();?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Registration   No : </strong></td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" name="reg_no" size="36" maxlength="20" placeholder="For registered members only..." tabindex="6" disabled="disabled"
                                               value="<?php echo $user_obj->get_reg_no();?>">
                                        [For   registered   members   only]
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Email : </strong></td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" name="email" size="54" maxlength="100" placeholder="Enter Email Address..." required="required" tabindex="7"   regexp="JSVAL_RX_EMAIL"
                                               value="<?php echo $user_obj->get_email();?>">
                                        <span style="color:orangered">*</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Confirm   Email : </strong></td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" name="confirm_email" size="54" maxlength="100" placeholder="Confirm Email Address..." required="required" tabindex="8" 
                                               equals="email_address" err="Confirm   Email   Address   must   be   same   as   Email   Address"
                                               value="<?php echo $user_obj->get_email();?>">
                                        <span style="color:orangered">*</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Mobile   No.# : </strong></td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" id="mobile_no" name="mobile_no" size="54" maxlength="15" placeholder="Enter Mobile No.# ..." tabindex="11"
                                               value="<?php echo $user_obj->get_mobile_no();?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Address : </strong></td>
                                    <td>:</td>
                                    <td>
                                        <textarea name="address" rows="6" cols="44" placeholder="Enter Full Address..." required="required" spellcheck="true" 
                                                  tabindex="12"><?php echo $user_obj->get_address();?>
                                        </textarea>
                                        <span style="color:orangered">*</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>City : </strong></td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" id="cty" name="city" size="54" maxlength="50" placeholder="Enter Company Name ..." required="required" tabindex="13"
                                               value="<?php echo $user_obj->get_city();?>">
                                        <span style="color:orangered">*</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Company   Name : </strong></td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" id="company_name" name="company_name" size="54" maxlength="100" placeholder="Enter Company Name ..." tabindex="14"
                                               value="<?php echo $user_obj->get_company_name();?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>ZIP   Code : </strong></td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" id="zip_code" size="54" maxlength="5" name="zip_code" required="required" placeholder="Enter ZIP Code ..." tabindex="15"
                                               value="<?php echo $user_obj->get_zip_code();?>">
                                        <span style="color:orangered">*</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Country : </strong></td>
                                    <td>:</td>
                                    <td>
                                        <select required="required" exclude=" " name="country" tabindex="16"
                                                value="<?php echo $user_obj->get_country();?>">
                                            <option value=" ">Select Country...</option>
                                            <script type="text/javascript">
                                            
                                                printCountryOptions();
                                            
                                            </script>
                                        </select>
                                        <span style="color:orangered">*</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Gender : </strong></td>
                                    <td>:</td>
                                    <td>
                                        <input type="radio" name="gender" value="male" 
                                               <?php if ($user_obj->get_gender()=="male") { ?>
                                               checked="checked" <?php } ?>
                                               tabindex="17">Male
                                        <input type="radio" name="gender" value="female" 
                                               <?php if ($user_obj->get_gender()=="female") { ?>
                                               checked="checked" <?php } ?> 
                                               tabindex="18">Female
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Age : </strong></td>
                                    <td>:</td>
                                    <td>
                                        <input type="number" name="age" tabindex="19" required="required" 
                                               value="<?php echo $user_obj->get_age();?>">
                                        <span style="color:orangered">*</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Date   of   Registration : </strong></td>
                                    <td>:</td>
                                    <td>
                                        <input type="date" name="reg_date" required="required" tabindex="20"
                                               value="<?php echo $user_obj->get_reg_date();?>">
                                        <span style="color:orangered">*</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Profile Color Code : </strong></td>
                                    <td>:</td>
                                    <td>
                                        <input type="color" name="color_code" tabindex="21"
                                               value="<?php echo $user_obj->get_color_code();?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Browser : </strong></td>
                                    <td>:</td>
                                    <td>
                                        <input list="browser" name="browser" tabindex="22"
                                               value="<?php echo $user_obj->get_browser();?>">
                                        <datalist id="browser">
                                            <option value="Chrome"></option>
                                            <option value="Firefox"></option>
                                            <option value="Internet Explorer"></option>
                                            <option value="Opera"></option>
                                            <option value="Safari"></option>
                                        </datalist>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Profile Complete : </td>
                                    <td>:</td>
                                    <td>
                                        <meter value="25" min="0" max="100">25%</meter>
                                        <br>
                                        <meter value=".1">25%</meter>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Progress : </td>
                                    <td>:</td>
                                    <td>
                                        <progress value="89"  max="100">89%</progress>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Profile Image : </strong></td>
                                    <td>:</td>
                                    <td>
                                        <input type="file" name="profile_Image" tabindex="23">
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <input type="button" name="click_button" value="Click">
                                        <input type="submit" name="update_button" value="Update" tabindex="25">
                                        <input type="submit" name="delete_button" value="Delete" tabindex="26"
                                               onclick="return  confirm(
                                                           'Are   you   sure   that,   you   want  to   delete   User : <?php 
                                                           
                                                           echo $user_obj->get_full_name();
                                                           
                                                           ?>   with   id : <?php 
                                                           
                                                           echo $user_obj->get_user_id();
                                                           
                                                           ?>   ?')"
                                               >
                                    </td>
                                </tr>
                            </table>
                            
                            <?php
                            
                            
                            }
                            
                            ?>
                            
                        </form>
                        <a href="view_all_users_ui.php">View   all   users</a>
                    </td>
                    <td width="200px" valign="top">
                        RIGHT
                    </td>
                </tr>
                <tr>
                    <td id="Footer" colspan="3" height="60px">
                        FOOTER
                        <a href="#Logo">Top</a>
                    </td>
                </tr>
            </table>
        </div>
        <script type="text/javascript">
        
            function display_full_name()
            {
                var first_name = document.getElementById("first_name").value;
                var middle_name = document.getElementById("middle_name").value;
                var last_name = document.getElementById("last_name").value;
                if(middle_name)
                    document.getElementById("full_name").value
                    = first_name + " " + middle_name + " " + last_name;
                    else
                        document.getElementById("full_name").value
                        = first_name + " " + last_name;
            }
        
        </script>
    </body>
</html>
