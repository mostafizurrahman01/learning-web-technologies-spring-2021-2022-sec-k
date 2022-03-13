<?php 
    require('header.php');

    if(isset($_REQUEST['submit']))
    {
       $src = $_FILES['myfile']['tmp_name'];
       $des = "upload/".$_FILES['myfile']['name'];

       if(move_uploaded_file($src, $des))
       {
           echo "success";
       }
       else
       {
           echo "error";
       }

   }
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
        .submit{
            margin-top:10px;
        }

    </style>
        <table border="2" class="table" width="100%">
                <td class="editNav">
                    Logged in as
                    <a href="viewProfile.php"><?=$_SESSION['current_user'][1]?></a> |
                    <a href="logout.php">Logout</a>
                </td>
            <tr width="600px">
                <td width="100px">
                    <b>Admin Dashboard</b><br/>
                    <ul>
                        <li><a href="viewProfile.php">View Profile</a></li>
                        <li><a href="editProfile.php">Edit Profile</a></li>
                        <li><a href="changePP.php">Change Profile Picture</a></li>
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
                        <legend>PROFILE PICTURE</legend> 
                        <form method="POST" action="" enctype="multipart/form-data">
                            Image: <input type="file" name="myfile">
                            <input type="submit" name="submit" value="Submit">
                        </form> 
                    </fieldset>
                </td>
        </tr>  
       
    </table>
</body>
</html>