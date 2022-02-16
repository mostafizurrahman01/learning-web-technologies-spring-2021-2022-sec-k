<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <style>
        .remember{
            margin-bottom: 15px;
        }
        .input{
            width: 100%;
        }
    </style>

    <fieldset>
        <legend>Login</legend>
    
        <form method="post" action="loginCheck.php">
            <table>

                <tr>
                    <td>Username :</td>
                    <td ><input class="input"  type="text" name="username" value=""></td>
                </tr>

                <tr>
                    <td>Password :</td>
                    <td><input class="input" type="password" name="password" value=""></td>
                </tr>

                <tr>
                    <td></td>
                </tr>

                <tr>
                    <td><input class="remember" type="checkbox" name="remember" value="">Remember Me</td>
                </tr>

                <tr>
                    <td><input type="submit" name="submit" value="Submit"><a href=""> Forget Password?</a></td>
                </tr>

        </table>
        </form>


</body>

</html>