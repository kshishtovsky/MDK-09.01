<?php
$area=0;

function resultArea($i, $w)
{
    $area = $i*$w;
    echo "Площадь равна ".$area." при ширине ".$i." и высоте ". $w;
}
resultArea(4,5);