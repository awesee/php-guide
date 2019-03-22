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

function quickSortV2(&$arr, $l, $r)
{
    if ($l < $r) {
        $mid = $arr[$l];
        $i = $l + 1;
        $head = $l;
        $tail = $r;
        while ($head < $tail) {
            if ($arr[$i] > $mid) {
                list($arr[$i], $arr[$tail]) = [$arr[$tail], $arr[$i]];
                $tail--;
            } else {
                list($arr[$i], $arr[$head]) = [$arr[$head], $arr[$i]];
                $head++;
                $i++;
            }
        }
        $arr[$head] = $mid;
        quickSortV2($arr, $l, $head - 1);
        quickSortV2($arr, $head + 1, $r);
    }
}

$arr2 = $arr;

quickSort($arr, 0, count($arr) - 1);
print_r($arr);

quickSortV2($arr2, 0, count($arr) - 1);
print_r($arr2);
