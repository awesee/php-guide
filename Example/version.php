<?php

// 版本格式：主版本号.次版本号.修订号
function version($version, $carry = 1)
{
    preg_match('/^v(\d+)\.?(\d*)\.?(\d*)$/', $version, $matches);
    if (empty($matches)) {
        return 'v0.1.0';
    }
    for ($i = 3; $i >= 1; $i--) {
        $matches[$i] = intval($matches[$i]) + $carry;
        if ($i >= 2) {
            $carry = intval($matches[$i] / 100);
            $matches[$i] = $matches[$i] % 100;
        }
    }
    return sprintf('v%d.%d.%d', $matches[1], $matches[2], $matches[3]);
}
