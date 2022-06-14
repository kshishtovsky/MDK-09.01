<?php

function resultFact($input)
{
    $fact = 1;
    for($i=1; $i<=$input; $i++) {
        $fact *= $i;
    }
    echo "Факториал числа " .$input." равен " . $fact;
}
resultFact(5);