<?php

class Test_Method_Chain
{

    public function One()
    {

        echo "One" . PHP_EOL;
        return $this;
    }

    public function Two()
    {

        echo "Two" . PHP_EOL;
        return $this;
    }

    public function Three()
    {

        echo "Three" . PHP_EOL;
        return $this;
    }
}

$obj = new Test_Method_Chain();

$obj->One()->Two()->Three();
