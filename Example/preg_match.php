<?php

$pattern = '/^(ab)/';
$subject = 'abcdefghijklmnaopqrstababababuvwxyz';
preg_match($pattern, $subject, $matches);

var_dump($matches);
