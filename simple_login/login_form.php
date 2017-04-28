<?php session_start();

if(isset($_POST['log_out_btn'])) {
    unset($_SESSION['admin']);
}

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Log In</title>
    </head>
    <body>
        <?php if(!isset($_SESSION['admin'])) { ?>
            <div>
                <h3>Log In</h3>
            <?php
            // put your code here

            //   MAHMUDUL   HASAN   KHAN   TALHA   TRAINING

            ?>
                <form action="dashboard.php" method="post">

                    <table>

                        <tr>
                            <td><strong>Email :</strong></td>
                            <td><input type="email" name="email" required="required"></td>
                        </tr>
                        <tr>
                            <td><strong>Password :</strong></td>
                            <td><input type="password" name="password" required="required"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="log_in_btn" value="Log In"></td>
                        </tr>

                    </table>

                </form>
            </div>
        <?php }
        else {
            ?><a href="dashboard.php">Back to Dashboard</a><?php
        }
        ?>
    </body>
</html>
