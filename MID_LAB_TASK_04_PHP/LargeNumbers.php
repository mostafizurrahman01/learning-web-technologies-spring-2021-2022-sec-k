<?php 

    function largeNumber($num1, $num2 , $num3)
    {
        if($num1 > $num2 && $num1 > $num3)
        {
            echo $num1." is the largest number among all numbers";
        }
        elseif ($num2 > $num1 && $num2 > $num3)
        {
            echo $num2." is the largest number among all numbers";
        }
        else {
            echo $num3." is the largest number among all numbers";
        }

    }

    largeNumber(20,10,15);



?>