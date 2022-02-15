<?php 

    if(isset($_REQUEST['submit'])){
        if($_REQUEST['bloodG'] == null){
            echo "Select a blood";
        }else{
            echo "Blood Group : ".$_REQUEST['bloodG'];;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Blood Group</legend>
            <table border="1">
                <tr>
                    <select name="bloodG" id="">
                        <option value="A+">A+</option>
                        <option value="O+">O+</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
                        <option value="A-">A-</option>
                        <option value="B-">B-</option>
                        <option value="AB-">AB-</option>
                        <option value="O-">O-</option>
                    </select>
                </tr>
                <br />
                <tr>
                    <input type="submit" name="submit" value="Submit">
                    <h4>Blood: <?=$bloodG?></h4>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>