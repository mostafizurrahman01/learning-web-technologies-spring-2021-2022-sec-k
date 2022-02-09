<?php 

    function evenOdd($value)
    {
        if($value % 2 == 0)
        {
            echo "This is even";
        }
        else {
            echo "This is odd";
        }
    }

    $value = 5;

    evenOdd($value); echo "\n";
    evenOdd(10);


?>