<?php
function resultProst($number)
{
    for ($i = 2; $i < $number; $i++) { // проверить, делится ли число..

        if ($number % $i == 0)
            return false;
        else
            return true;
    }

}
$num = resultProst(49);
if($num == false)
    echo "число непростое";
else
    echo "число простое";
