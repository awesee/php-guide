<?php

function IntToChr($index = 0, $start = 65)
{
    $str = '';
    if (floor($index / 26) > 0) {
        $str .= IntToChr(floor($index / 26) - 1);
    }
    return $str . chr($index % 26 + $start);
}

echo IntToChr(0);
