<?php

var_dump(0 == '0') . PHP_EOL;           // true
var_dump(0 == '') . PHP_EOL;            // true
var_dump(0 == null) . PHP_EOL;          // true
var_dump('' == null) . PHP_EOL;         // true

var_dump('0' == null) . PHP_EOL;        // false
var_dump('0' == '') . PHP_EOL;          // false

var_dump(boolval(-1)) . PHP_EOL;      // true
var_dump((bool)(-1)) . PHP_EOL;       // true
var_dump((boolean)(-1)) . PHP_EOL;    // true
