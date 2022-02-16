<?php
    session_start();
    if (isset($_REQUEST['revive'])) {
        $email = $_REQUEST['email'];
        if (!is_null($email)) {
            $user = $_SESSION['user'];
            if ($user['email'] == $email) {
                $_SESSION['status'] = true;
                setcookie('status', 'true', time() + 3600, '/recover.php');
                header('location: ./recover.php');
            } else {
                echo "invalid user..";
            }
        } else {
            echo "null submission";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>

<body>
    <table border="2" style="border-collapse: collapse;" width="100%">
        <tr style="border: 2px solid black;">
            <td style="border:none;">
                <img src="https://i.ibb.co/rdtj8BQ/image.png" alt="logo"></a>
            </td>
            <td style=" padding:12px; border:none; text-align: right">
                <a href="./public_home.php">Home</a> |
                <a href="./Login.php">Login</a> |
                <a href="./registration.php">Registration</a>
            </td>
        </tr>
        <td colspan="2" align="center" valign="center" style="border:none; padding:10px;height: 300px;">
            <fieldset style="display: inline-block">
                <legend>FORGOT PASSWORD</legend>
                <form action="" method="post">
                    <table>
                        <tr>
                            <td>
                                Enter Email
                            </td>
                            <td>
                                : <input type="email" name="email"><br>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                    </table>
                    <hr>
                    <div align=left>
                        <input type="submit" name="revive" value="Submit">
                    </div>
                </form>
            </fieldset>
        </td>
        </td>
        </tr>
        <tr style="border: 2px solid black;">
            <td colspan="2" style="border:none; text-align: center; padding: 15px;">
                Copyright &copy; 2017
            </td>
        </tr>
    </table>
</body>

</html>
