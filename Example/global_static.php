<?php

// 比较global、GLOBALS、static  
$k = 0;
function test1()
{
    global $k;
    static $i = 0;
    echo 'i:', ++$i, PHP_EOL;
    echo 'k:', ++$k, PHP_EOL;
}

test1();
test1();
echo 'i:', $i, PHP_EOL;
echo 'k:', $k, PHP_EOL;

echo '------------------';

function test2()
{
    global $k;
    static $i = 0;
    echo 'i:', ++$i, PHP_EOL;
    echo 'k:', ++$k, PHP_EOL;
}

test2();
test2();
echo 'i:', $i, PHP_EOL;
echo 'k:', $k, PHP_EOL;

$m = 0;
$n = 0;
function test3()
{
    global $m;
    echo 'm:', $m++, PHP_EOL;
    echo 'n:', $GLOBALS['n']++, PHP_EOL;
    unset($m, $GLOBALS['n']);
}

echo '------------------';
test3();

echo 'm:', $m, PHP_EOL;
echo 'n:', $n, PHP_EOL;

echo '------------------';

static $x = 0;
function test4()
{
    echo 'x:', $x++, PHP_EOL;
}

test4();  