<?php

date_default_timezone_set('PRC');

//~/Library/Preferences/GoLand2017.3/eval/GoLand173.evaluation.key
$path = getenv('HOME') . '/Library/Preferences/';

is_dir($path) && chdir($path);

foreach (glob('*/eval/*.evaluation.key') as $file) {
    $file = realpath($file);
    if (empty($file)) {
        continue;
    }

    if (is_file($file)) {
        $time = time() - 86400 * 30;
        if (filemtime($file) < $time) {
            unlink($file);
        }
    }
}

