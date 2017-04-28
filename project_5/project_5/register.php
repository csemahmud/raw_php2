<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Assignment</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" href="css/style.css" rel="stylesheet">
        <script type="text/javascript" src="scripts/country.js"></script>
        <script type="text/javascript" src="scripts/jsval.js"></script>
        <script type="text/javascript">
            function displayname()
            {
                var firstname=document.getElementById('firstname');
                var lastname=document.getElementById('lastname');
                document.getElementById('display').value=firstname.value+' '+lastname.value;
            }
        </script>
    </head>
    <body>
        <div id="wrapper">
            <div id="stick">
                <p><a href="">Give FeedBack</a></p>
            </div>
            <div id="header">
                <div id="logo">
                    <h1>premium<span style="color:#94030D">series</span>
                        <span style="font-size: 11px;color:#270E0F">Designed by Zaied</span></h1>
                </div>
                <div id="social_icon">
                    <img src="images/facebook.png" alt="">
                    <img src="images/twitter.png" alt="">
                    <img src="images/google.png" alt="">
                    <img src="images/rss.png" alt="">
                    <br/>
                    <p><a href="">Member Login</a></p>
                </div>
            </div>
            <div id="menu">
                <?php include_once 'menu.php';?>
            </div>
            <div id="content">
                <div id="left">
                    <h3>Recent Posts</h3>
                    <ul>
                        <li><a href="">Aliquam libero</a></li>
                        <li><a href="">Consectetuer adipiscing elit</a></li>
                        <li><a href="">Metus aliquam pellentesque</a></li>
                        <li><a href="">Suspendisse iaculis mauris</a></li>
                        <li><a href="">Proin gravida orci porttitor</a></li>
                        <li><a href="">Aliquam libero</a></li>
                        <li><a href="">Consectetuer adipiscing elit</a></li>
                    </ul>
                    <h3>Recent Comments</h3>
                    <ul>
                        <li><a href="">Free CSS Templates on Aliquam libero</a></li>
                        <li><a href="">Free CSS Templates on Consectetuer adipiscing elit</a></li>
                        <li><a href="">Free CSS Templates on Metus aliquam pellentesque</a></li>
                        <li><a href="">Free CSS Templates on Suspendisse iaculis mauris</a></li>
                        <li><a href="">Proin gravida orci porttitor</a></li>
                        <li><a href="">Free CSS Templates on Urnanet non molestie semper</a></li>
                    </ul>
                    <h3>Categories</h3>
                    <ul>
                        <li><a href="">Aliquam libero</a></li>
                        <li><a href="">Consectetuer adipiscing elit</a></li>
                        <li><a href="">Metus aliquam pellentesque</a></li>
                        <li><a href="">Suspendisse iaculis mauris</a></li>
                        <li><a href="">Proin gravida orci porttitor</a></li>
                        
                    </ul>
                    <h3>Archives</h3>
                    <ul>
                        <li><a href="">September (23)</a></li>
                        <li><a href="">August (31)</a></li>
                        <li><a href="">July (30)</a></li>
                        <li><a href="">June (30)</a></li>
                        <li><a href="">May (31)</a></li>
                        
                    </ul>
                </div>
                <div id="register">
                    <form action="" method="post" onsubmit="return validateStandard(this)">
                    <table width="500" cellpadding="0" cellspacing="0" border="0" align="center" class="bg_table">
                        <tr>
                            <td valign="top" colspan="2">
                                <h3>Login Details</h3>
                            </td>
                        </tr>
                        <tr>
                            <td class="td_padd" width="125">Your Email:</td>
                            <td class="td_padd"><input class="radius" type="text"  name="email_address" size="30" placeholder="User Name" required="required" regexp="JSVAL_RX_EMAIL"></td>
                        </tr>
                        <tr>
                            <td class="td_padd" width="125">Confirm Email:</td>
                            <td class="td_padd"><input class="radius" type="text" name="lname" size="30" placeholder="Email" required="required"></td>
                        </tr>
                        <tr>
                            <td class="td_padd" width="125">Password:</td>
                            <td class="td_padd">
                                <input class="radius" type="password" size="30">
                                <p class="error">At least 10 characters</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="td_padd" width="125">Confirm Password:</td>
                            <td class="td_padd"><input class="radius" type="password" size="30"></td>
                        </tr>
                    </table>
                    <table width="500" cellpadding="0" cellspacing="0" border="0" align="center" class="bg_table">
                        <tr>
                            <td valign="top" colspan="2">
                                <h3>Personal Info</h3>
                            </td>
                        </tr>
                        <tr>
                            <td class="td_padd" width="125">First Name:</td>
                            <td class="td_padd">
                                <input class="radius" type="text" name="fname" size="30" id="firstname" placeholder="First Name" required="required">
                            </td>
                        </tr>
                        <tr>
                            <td class="td_padd" width="125">Last Name:</td>
                            <td class="td_padd">
                                <input class="radius" type="text" name="lname" size="30" id="lastname" placeholder="Last Name" required="required">
                            </td>
                        </tr>
                        <tr>
                            <td class="td_padd" width="125">Full Name:</td>
                            <td class="td_padd">
                                <input class="radius" type="text" name="fullname" size="30" placeholder="Full Name" id="display" onclick="displayname()" onkeyup="displayname()">
                            </td>
                        </tr>
                        <tr>
                            <td class="td_padd" width="125">Date Of Birth:</td>
                            <td class="td_padd"><input class="radius" type="number" placeholder="dd/mm/year" required="required" style="width: 200px"></td>
                        </tr>
                        <tr>
                            <td class="td_padd" width="125">Company Name:</td>
                            <td class="td_padd"><input class="radius" type="text" size="30"></td>
                        </tr>
                        <tr>
                            <td class="td_padd" width="125">Job Title:</td>
                            <td class="td_padd"><input class="radius" type="text" size="30"></td>
                        </tr>
                        <tr>
                            <td class="td_padd" width="125">Address:</td>
                            <td class="td_padd"><input class="radius" type="text" required="required" size="30"></td>
                        </tr>
                        <tr>
                            <td class="td_padd" width="125">City:</td>
                            <td class="td_padd"><input class="radius" type="text" size="30"></td>
                        </tr>
                        <tr>
                            <td class="td_padd" width="125">Country:</td>
                            <td class="td_padd">
                                <select name="country" style="background: #ddd;width: 200px;height: 30px;" class="radius">
                                    <option>Select Country</option>
                                    <script type="text/javascript">
                                        printCountryOptions();
                                    </script>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="td_padd" width="125">State:</td>
                            <td class="td_padd"><input class="radius" type="text" size="30"></td>
                        </tr>
                        <tr>
                            <td class="td_padd" width="125">Zip Code:</td>
                            <td class="td_padd"><input class="radius" type="number" required="required" style="width: 200px"></td>
                        </tr>
                        <tr>
                            <td class="td_padd" width="125">
                                Image Uplaod
                            </td>
                            <td class="td_padd">
                                <input class="radius" type="file"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td width="60" align="right" style="padding: 1px;">
                                            <input type="checkbox" required="required"/>
                                        </td>
                                        <td align="left" class="td_padd">
                                            I agree the terms and condition of your company.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center">
                                            <input class="radius" type="submit" value="Give Permission" style="background: #890208;font-weight: bold;color:#fff;
                                                   border: 2px solid #cccaaa;cursor: pointer" />
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
                <div id="right">
                    <h3>Site Search</h3>
                    <input type="search" value="" size="26" placeholder="Search" name="s">
                    <h3>Tags</h3>
                    <p>
                        dolor ipsum lorem sit amet dolor ipsum lorem sit amet
                    </p>
                    <h3>Categories</h3>
                    <ul>
                        <li><a href="">Aliquam libero</a></li>
                        <li><a href="">Consectetuer adipiscing elit</a></li>
                        <li><a href="">Metus aliquam pellentesque</a></li>
                        <li><a href="">Suspendisse iaculis mauris</a></li>
                        <li><a href="">Proin gravida orci porttitor</a></li>
                        <li><a href="">Aliquam libero</a></li>
                        <li><a href="">Consectetuer adipiscing elit</a></li>
                        <li><a href="">Aliquam libero</a></li>
                        <li><a href="">Consectetuer adipiscing elit</a></li>
                        <li><a href="">Metus aliquam pellentesque</a></li>
                        <li><a href="">Suspendisse iaculis mauris</a></li>
                        <li><a href="">Proin gravida orci porttitor</a></li>
                        <li><a href="">Aliquam libero</a></li>
                        <li><a href="">Consectetuer adipiscing elit</a></li>
                        <li><a href="">Aliquam libero</a></li>
                        <li><a href="">Consectetuer adipiscing elit</a></li>
                        <li><a href="">Metus aliquam pellentesque</a></li>
                        <li><a href="">Suspendisse iaculis mauris</a></li>
                        <li><a href="">Proin gravida orci porttitor</a></li>
                        <li><a href="">Aliquam libero</a></li>
                        <li><a href="">Consectetuer adipiscing elit</a></li>
                        <li><a href="">Metus aliquam pellentesque</a></li>
                        <li><a href="">Suspendisse iaculis mauris</a></li>
                        <li><a href="">Proin gravida orci porttitor</a></li>
                    </ul>
                </div>
            </div>
            <div id="footer"></div>
        </div>
    </body>
</html>
