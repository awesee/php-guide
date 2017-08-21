<?php

// 冒泡排序
$arr = array(32, 343, 54, 32, 43, 23, 535, 342, 43, 898);
$len = count($arr);
for ($i = 1; $i < $count; $i++) {
    for ($k = 0; $k < $len - $i; $k++) {
        if ($arr[$k] > $arr[$k + 1]) {
            list($arr[$k], $arr[$k + 1]) = array($arr[$k + 1], $arr[$k]);
        }
    }
}

print_r($arr) . PHP_EOL;
