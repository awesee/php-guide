<?php

$x = 0;
$y = 1;
$f = function () use (&$x, &$y) {
    list($x, $y) = array($y, $x + $y);
    return $x;
};

for ($i = 0; $i < 10; $i++) {
    echo $f(), PHP_EOL;
}
