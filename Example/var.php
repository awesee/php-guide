<?php

$num = 10;
function test($num)
{
    $num = $num * 10;
    var_dump($GLOBALS);
    echo $num, PHP_EOL;
    echo '=====', '=====', PHP_EOL;
}

test($num);
echo $num . PHP_EOL;

// 10
