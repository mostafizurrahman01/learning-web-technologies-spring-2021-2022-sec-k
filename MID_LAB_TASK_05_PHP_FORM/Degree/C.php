<?php 
    if (isset($_REQUEST['submit']))
    {
        if($_REQUEST['degree'] == null){
            echo "Please enter a degree";
        }
        else{
            echo "Degree: ".$_REQUEST['degree'];
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
    <style>
        .buttonS{
            margin-top: 15px;
        }
    </style>
    <form method="post" action="">
        <fieldset>
            <legend>Degree</legend>
            <table border="1">
                <tr>
                <input type="checkbox" name="degree" value="SSC" <?php if (isset($_POST['submit']) && $_POST['degree'] == 'SSC')  echo ' checked="checked"';?> > SSC
                <input type="checkbox" name="degree" value="HSC" <?php if (isset($_POST['submit']) && $_POST['degree'] == 'HSC')  echo ' checked="checked"';?> > HSC
                <input type="checkbox" name="degree" value="BSc" <?php if (isset($_POST['submit']) && $_POST['degree'] == 'BSc')  echo ' checked="checked"';?> > BSc
                <input type="checkbox" name="degree" value="MSc" <?php if(isset($_POST['submit']) && $_POST['degree'] == 'MSc')   echo ' checked="checked"';?> > MSc
                </tr>
            </br>
                <tr >
                    <input class="buttonS" type="submit" name="submit" value="Submit"/>
                    <h4>Degree: <?=$degree?></h4>
                </tr>
            </fieldset>
            </table>
    </form>
</body>

</html> 

