<?php

$data = array(
    "uid" => "1",
    "pageNo" => "1",
    "pageSize" => "10"
);
ksort($data);
$sign = '';
foreach ($data as $v) {
    $sign .= $v;
}
$sign .= 'master';
$md5_sign = md5($sign);

echo $md5_sign, PHP_EOL;
