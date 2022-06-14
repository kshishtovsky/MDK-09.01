<?php
function alo($string) {
    if ($string == strrev($string))
        return "Да";
    else
        return "Нет";
}
echo alo('hope')."<br>";
echo alo('aboba');
