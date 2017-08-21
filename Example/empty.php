<?php

var_dump(0 == '') . PHP_EOL;        // true
var_dump('0' == '') . PHP_EOL;      // false
var_dump(2 == '2') . PHP_EOL;       // true
var_dump(empty(0)) . PHP_EOL;     // true
var_dump(empty('0')) . PHP_EOL;   // true
