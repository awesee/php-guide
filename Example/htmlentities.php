<?php

echo html_entity_decode('&#x91cd;&#x5e86;&#x6cbb;&#x7597;&#x8840;&#x5c0f;&#x677f;&#x51cf;&#x5c11;&#x4e0d;&#x9519;&#x7684;&#x533b;&#x9662;') . PHP_EOL;

//执行结果是：重庆治疗血小板减少不错的医院

echo '&#x91cd;&#x5e86;&#x6cbb;&#x7597;&#x8840;&#x5c0f;&#x677f;&#x51cf;&#x5c11;&#x4e0d;&#x9519;&#x7684;&#x533b;&#x9662;' . PHP_EOL;

$str = '重庆治疗血小板减少不错的医院';

echo htmlentities($str, ENT_HTML401, 'UTF-8', TRUE) . PHP_EOL;

function unicode_encode($name)
{
    $name = iconv('UTF-8', 'UCS-2', $name);
    $len = strlen($name);
    $str = '';
    for ($i = 0; $i < $len - 1; $i = $i + 2) {
        $c = $name[$i];
        $c2 = $name[$i + 1];
        if (ord($c) > 0) {    // 两个字节的文字
            $str .= '\u' . base_convert(ord($c), 10, 16) . base_convert(ord($c2), 10, 16);
        } else {
            $str .= $c2;
        }
    }
    return $str;
}
