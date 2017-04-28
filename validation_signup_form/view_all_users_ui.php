<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        //   MAHMUDUL   HASAN   KHAN   TALHA   TRAINING
        
        require_once './classes/bll/user_manager.php';
        require_once './classes/bll/dal/models/user_dao.php';
        
        $user_manager_obj = new User_Manager();
        $user_objs = $user_manager_obj->get_all_users();
        
        ?>
        <table border="1">
            
            <tr>
                
                <th>User   Id</th>
                <th>First   Name</th>
                <th>Middle   Name</th>
                <th>Last   Name</th>
                <th>Nick   Name</th>
                <th>Reg   No.#</th>
                <th>Email</th>
                <th>Password</th>
                <th>Mobile   No</th>
                <th>Address</th>
                <th>City</th>
                <th>Company   Name</th>
                <th>Zip   Code</th>
                <th>Country</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Reg   Date</th>
                <th>Color  Code</th>
                <th>Browser</th>
                <th></th>
                
            </tr>
            
            <?php 
            
        foreach ($user_objs as $user_obj)
        {
            ?>
                
                
            <tr>
                
                <td><?php echo $user_obj->get_user_id() ?></td>
                <td><?php echo $user_obj->get_first_name() ?></td>
                <td><?php echo $user_obj->get_middle_name() ?></td>
                <td><?php echo $user_obj->get_last_name() ?></td>
                <td><?php echo $user_obj->get_nick_name() ?></td>
                <td><?php echo $user_obj->get_reg_no() ?></td>
                <td><?php echo $user_obj->get_email() ?></td>
                <td><?php echo $user_obj->get_password() ?></td>
                <td><?php echo $user_obj->get_mobile_no() ?></td>
                <td><?php echo $user_obj->get_address() ?></td>
                <td><?php echo $user_obj->get_city() ?></td>
                <td><?php echo $user_obj->get_company_name() ?></td>
                <td><?php echo $user_obj->get_zip_code() ?></td>
                <td><?php echo $user_obj->get_country() ?></td>
                <td><?php echo $user_obj->get_gender() ?></td>
                <td><?php echo $user_obj->get_age() ?></td>
                <td><?php echo $user_obj->get_reg_date() ?></td>
                <td><?php echo $user_obj->get_color_code() ?></td>
                <td><?php echo $user_obj->get_browser() ?></td>
                <td><a href="details_form.php?user_id=<?php echo $user_obj->get_user_id() ?>">Details</a></td>
                
            </tr>
                
                
                <?php
        }
            
            ?>
            
        </table>
        <a href="validation_signup_form.php">Insert   New   User</a>
    </body>
</html>
