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
                        <option value="A+">A+ <?php if(isset($_POST ['submit']) && $_POST ['bloodG'] == 'A+') echo 'selected'; ?></option>
                        <option value="O+">O+ <?php if(isset($_POST ['submit']) && $_POST ['bloodG'] == 'O+') echo 'selected'; ?> </option>
                        <option value="B+">B+ <?php if(isset($_POST ['submit']) && $_POST ['bloodG'] == 'B+') echo 'selected'; ?></option>
                        <option value="AB+">AB+ <?php if(isset($_POST ['submit']) && $_POST ['bloodG'] == 'AB+') echo 'selected'; ?></option>
                        <option value="A-">A- <?php if(isset($_POST ['submit']) && $_POST ['bloodG'] == 'A-') echo 'selected'; ?></option>
                        <option value="B-">B- <?php if(isset($_POST ['submit']) && $_POST ['bloodG'] == 'B-') echo 'selected'; ?></option>
                        <option value="AB-">AB- <?php if(isset($_POST ['submit']) && $_POST ['bloodG'] == 'AB-') echo 'selected'; ?></option>
                        <option value="O-">O- <?php if(isset($_POST ['submit']) && $_POST ['bloodG'] == 'O-') echo 'selected'; ?></option>
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