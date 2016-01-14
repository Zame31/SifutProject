<?php
/**
 * Created by PhpStorm.
 * User: Doe
 * Date: 12/30/2015
 * Time: 6:19 AM
 */

function random($length)
{
    $karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz@#$%-+';
    $string = '';
    for($i = 0; $i < $length; $i++) {
        $pos = rand(0, strlen($karakter)-1);
        $string .= $karakter{$pos};
    }
    return $string;
}

function dateconvert($d) {
    $monthname = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
        "Oktober", "November", "Desember");

    $year = substr($d, 0, 4);
    $month = substr($d, 5, 2);
    $date = substr($d, 8, 2);

    $result = $date." ".$monthname[(int)$month-1]." ".$year;
    return($result);
}