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
        .footer{
            border:none;
            text-align: center;
        }
        .footerH{
            border:2px solid black;
        }
    </style>

        <a href="../views/home.php"> Back </a> |
            <a href="../controllers/logout.php"> logout </a>
            <br><br>

        <table border="2" class="table" width="100%">
            <tr width="600px">
            <td width="100px">
                <b>Admin Account</b><br/>
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
                <h4 class="namePrint">Welcome <?=$_SESSION['user']['name'] ?></h4>
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