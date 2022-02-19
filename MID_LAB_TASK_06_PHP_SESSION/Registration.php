<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<body>
    <style>
        .ppText {
            text-align: center;
            height: 80px;
        }

        .infoText {
            margin-left: 10px;
        }
        .btnText
        {
           text-align: right;
        }
        .title{
            text-align: center;
            font-size:30px;
        }
        .form{
            /* text-align: center; */
            margin-left:380px;
            margin-top: 30px;
        }
    </style>

    <fieldset>

        <legend class="title">Registration</legend>

        <form method="post" action="regCheck.php">
            <table border="1" width="700px" class="form">

                <tr height="40px">
                    <td width="150px">
                        <label for="" class="infoText">Name</label>
                    </td>
                    <td>
                        <input type="text" name="name" id="" class="infoText">
                    </td>
                </tr>

                <tr height="40px">

                    <td width="150px">
                        <label for="" class="infoText">Email</label>
                    </td>
                    <td>
                        <input type="email" name="email" id="" class="infoText">
                    </td>
                </tr>

                <tr height="40px">

                    <td width="150px">
                        <label for="" class="infoText">Username</label>
                    </td>

                    <td>
                        <input type="text" name="username" id="" class="infoText">
                    </td>
                </tr>

                <tr height="40px">
                    <td width="150px">
                        <label for="" class="infoText">Password</label>
                    </td>
                    <td>
                        <input type="password" name="password" id="" class="infoText">
                    </td>
                </tr>

                <tr height="40px">
                    <td width="150px">
                        <label for="" class="infoText">Confirm Password</label>
                    </td>
                    <td>
                        <input type="password" name="confirmPassword" id="" class="infoText">
                    </td>
                </tr>

                <tr height="40px">
                    <td width="150px">
                        <label for="" class="infoText">Gender</label>
                    </td>

                    <td>
                        <input type="radio" name="gender" value="Male" id="" class="infoText"> Male
                        <input type="radio" name="gender" value="Female" id=""> Female
                        <input type="radio" name="gender" value="Other" id=""> Other
                    </td>
                </tr>

                <tr height="40px">

                    <td width="150px">
                        <label for="" class="infoText">Date Of Birth</label>
                    </td>

                    <td>
                        <input type="text" name="dd" id="" size="4" class="infoText"> /
                        <input type="text" name="mm" id="" size="4"> /
                        <input type="text" name="yyyy" id="" size="4"> (dd/mm/yyyy)
                    </td>
                </tr>

                <tr >
                    <td colspan="3" height="40px" class="btnText" >
                        <input type="submit" name="submit" value="Submit"/>
                        <input type="reset" name="reset" value="Reset"/>
                    </td>
                </tr>

            </table>
        </form>

    </fieldset>

</body>

</html>