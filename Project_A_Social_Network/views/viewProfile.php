<?php 

    require_once('header.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <style>
        .top{
            border: 2px solid black;
        }
        .table{
            border-collapse: collapse;
        }
        .editNav{
            text-align: center;
            border-left: 0px solid; 
        }
        .editImg{
            border-right: 0px solid;
        }
        .namePrint{
            size:100px;
        }
        .imgChange{
            text-align: center; 
            padding-left: 100px; 
        }
        .footer{
            border:none;
            text-align: center;
        }
        .footerH{
            border:2px solid black;
        }
        .viewC{
            border-bottom: 1px solid gray;
        }
    </style>
        <table border="2" class="table" width="100%">
            <tr width="600px">
                <td width="100px">
                    <b>Account</b><br/>
                    <ul>
                        <li><a href="../views/viewProfile.php">View Profile</a></li>
                        <li><a href="../views/editAdminProfile.php?id=<?=$_SESSION['current_user'][0]?>">Edit Profile</a></li>
                        <li><a href="../views/changePP.php">Change Profile Picture</a></li>
                        <li><a href="changePassword.php">Change Password</a></li>
                        <li><a href='addAdmin.php'> Add Admin </a></li>
                        <li><a href='userlist.php'> User List </a> </li>
                        <li><a href='adminList.php'> Admin List </a></li>
                        <li><a href='manageRoles.php'> Roles Management </a></li>
                        <li><a href='reportReview.php'> Report Review </a></li>
                        <li><a href='../controllers/logout.php'> logout </a></li>
                    </ul>
                </td>

                <td width="400px">
                    <fieldset>
                        <legend>PROFILE</legend>
                            <form method="post" action="">
                                <table>
                                    <tr>
                                        <td class="viewC">
                                            Name
                                        </td>
                                        <td>
                                            : <?=$_SESSION['current_user'][1]?>
                                        </td>
                                        <td class="imgChange">
                                            <img src="image.png" alt="image" border="0"> <br>
                                            <a href="changePP.php">Change</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="viewC">
                                            Email
                                        </td>
                                        <td>
                                            : <?=$_SESSION['current_user'][3]?>
                                        </td>
                                    </tr>
                                    
                                <tr>
                                    <td>
                                        <a href="../views/editAdminProfile.php?id=<?=$_SESSION['current_user'][0]?>">Edit Profile</a>
                                      </td>
                                </tr>
                            </table>
                        </form>
                    </fieldset>
                </td>
        </tr>  
       
    </table>
</body>
</html>