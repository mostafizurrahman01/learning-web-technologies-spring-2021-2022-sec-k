<?php 

    function vatCal($amount,$vat)
    {
        $result = ($amount * $vat) / 100;
        echo "Vat = ".$result;
    }

    $amount = 200;
    $vat = 15;

    vatCal($amount, $vat);
?>