<?php

$str = "123456";
$key = 'pL2tn~kVQ9il3"y]=jGMg_+U0fwd,W.&P5O<F!BxT';

echo md5(sha1($str) . $key) . PHP_EOL;