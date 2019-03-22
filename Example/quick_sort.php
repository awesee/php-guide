<?php

$arr = [5, 4, 3, 2, 10, 6, 7, 8, 9, 1];

function quickSort(&$arr, $l, $r)
{
    if ($l < $r) {
        $v = $arr[$l];
        $i = $l;
        $j = $r;
        while ($i < $j) {
            while ($i < $j && $arr[$j] >= $v) {
                $j--;
            }
            if ($i < $j) {
                $arr[$i] = $arr[$j];
            }

            while ($i < $j && $arr[$i] <= $v) {
                $i++;
            }
            if ($i < $j) {
                $arr[$j] = $arr[$i];
            }
        }
        $arr[$i] = $v;
        quickSort($arr, $l, $i - 1);
        quickSort($arr, $i + 1, $r);
    }
}

quickSort($arr, 0, count($arr) - 1);
