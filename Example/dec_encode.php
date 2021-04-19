<?php

function dec_encode($n)
{
    $l = 0;
    while ($n < 1e9 && $l < 9) {
        $n = $n * 10 + mt_rand(0, 9);
        $l++;
    }
    return base_convert($n * 10 + $l, 10, 36);
}

function dec_decode($s)
{
    $n = base_convert($s, 36, 10);
    $d = pow(10, $n % 10 + 1);
    return intval($n / $d);
}
