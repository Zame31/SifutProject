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