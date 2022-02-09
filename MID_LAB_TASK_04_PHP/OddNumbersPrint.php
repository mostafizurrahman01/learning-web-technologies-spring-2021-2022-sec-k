<?php

    function Odd($number)
    {
        if($number % 2 != 0)
        {
            echo $number." ";
        }
    }

    for($i = 10; $i <101; $i++)
    {
        Odd($i); echo "\n";
    }

?>