<?php 
    session_start();
    if(isset($_COOKIE['status'])){

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
            <tr class="top" >
                <td class="editImg" >
                    <img  src="https://i.ibb.co/rdtj8BQ/image.png" alt=""></a>
                </td>
                <td class="editNav">
                    Logged in as
                    <a href="viewProfile.php"><?=$_SESSION['user']['name']?></a> |
                    <a href="logout.php">Logout</a>
                </td>
            </tr>
            <tr width="600px">
                <td width="100px">
                    <b>Account</b><br/>
                    <ul>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="viewProfile.php">View Profile</a></li>
                        <li><a href="editProfile.php">Edit Profile</a></li>
                        <li><a href="changePP.php">Change Profile Picture</a></li>
                        <li><a href="changePassword.php">Change Password</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </td>

                <td width="400px">
                    <fieldset>
                        <legend>PROFILE</legend>
                            <form method="post" action="editProfileCorrection.php">
                                <table>
                                    <tr>
                                        <td >
                                            Name :
                                        </td>
                                        <td>
                                            <input type="text" name="name" value="<?=$_SESSION['user']['name']?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            Email :
                                        </td>
                                        <td>
                                             <input type="email" name="email" value=" <?=$_SESSION['user']['email']?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        Gender :
                                    </td>
                                    <td>
                                        <input type="radio" name="gender" <?php if ($_SESSION['user']['gender'] == 'Male')  echo ' checked="checked"';?> value="Male"> Male
                                        <input type="radio" name="gender" <?php if ($_SESSION['user']['gender'] == 'Female')  echo ' checked="checked"';?> value="Female"> Female
                                        <input type="radio" name="gender" <?php if ($_SESSION['user']['gender'] == 'Other')  echo ' checked="checked"';?> value="Other"> Other
                                    </td>
                                </tr>
                                <tr>
                                    <td >
                                        Date Of Birth :
                                    </td>
                                    <td>
                                        <input type="text" name="dob" value="<?=$_SESSION['user']['dob']['dd']?>/<?=$_SESSION['user']['dob']['mm']?>/<?=$_SESSION['user']['dob']['yyyy']?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" name="editClick" value="Submit">
                                      </td>
                                </tr>
                            </table>
                        </form>
                    </fieldset>
                </td>
        </tr>
        <tr class="footerH">
            <td colspan="2" class="footer">
                <h3>Copyright @ 2017</h3> 
            </td>
        </tr>   
       
    </table>
</body>
</html>

<?php 
    }else
    {
        echo "Log in first.";
    }
?>