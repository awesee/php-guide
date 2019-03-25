<?php

$arr = [1, 3, 5, 7, 9, 2, 4, 6, 8];

function selectionSort(&$arr)
{
    $len = count($arr);
    for ($i = 0; $i < $len - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < $len; $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        list($arr[$i], $arr[$min]) = [$arr[$min], $arr[$i]];
    }
}

selectionSort($arr);

print_r($arr);
