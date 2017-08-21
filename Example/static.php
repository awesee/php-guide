<?php

function test()
{

    static $t = 0;
    echo $t, PHP_EOL;
    $t++;
}

for ($i = 0; $i < 10; $i++) {
    # code...
    // test();
}

/**
 *
 */
class ClassName
{

    function __construct()
    {
        # code...
    }

    public static function a()
    {

        echo 'Static Function', PHP_EOL;
    }

}

ClassName::a();