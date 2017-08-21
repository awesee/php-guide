<?php

for ($i = 0; $i < 4; $i++) {
    echo $endtime = mktime(0, 0, 0, date("m") - 3 + $i, 1, date("Y")) . PHP_EOL;
    echo date("Y-m-d H:i:s", (int)$endtime) . PHP_EOL;
}
$weekMondayTime = strtotime('Monday this week');   // 2015-11-30 00:00:00
echo date("Y-m-d H:i:s", $weekMondayTime) . PHP_EOL;

$d = strtotime("last monday");          //   2015-11-23 00:00:00
echo date("Y-m-d H:i:s", $d) . PHP_EOL;

$d = strtotime("-1 monday");          //   2015-11-23 00:00:00
echo date("Y-m-d H:i:s", $d) . PHP_EOL;

$d = strtotime("-2 monday");          //   2015-11-16 00:00:00
echo date("Y-m-d H:i:s", $d) . PHP_EOL;

$month = mktime(0, 0, 0, date("m"), 1, date("Y"));
echo date("Y-m-d H:i:s", $month) . PHP_EOL;

$month = mktime(0, 0, 0, date("m") - 1, 1, date("Y"));
echo date("Y-m-d H:i:s", $month) . PHP_EOL;

$month = mktime(0, 0, 0, date("m") - 2, 1, date("Y"));
echo date("Y-m-d H:i:s", $month) . PHP_EOL;


// $month = strtotime('first day of this month');
// echo date("Y-m-d H:i:s", $month) . PHP_EOL;

// $month = strtotime('first day of -1 month');
// echo date("Y-m-d H:i:s", $month) . PHP_EOL;

// $month = strtotime('first day of -2 month');
// echo date("Y-m-d H:i:s", $month) . PHP_EOL;

// $month = strtotime('first day of -3 month');
// echo date("Y-m-d H:i:s", $month) . PHP_EOL;

// $lastmonth = mktime(0, 0, 0, date("m"), date("d")-7,   date("Y"));
// echo date("Y-m-d H:i:s", $lastmonth) . PHP_EOL;
$weekMondayTime = strtotime('Monday this week');  //2015-11-30 00:00:00
echo date("Y-m-d H:i:s", $weekMondayTime) . PHP_EOL;


$d = strtotime("-1 Monday"); //2015-11-23 00:00:00
echo date("Y-m-d H:i:s", $d) . PHP_EOL;

$d = strtotime("-2 Monday");//2015-11-16 00:00:00
echo date("Y-m-d H:i:s", $d) . PHP_EOL;

$d = strtotime("-3 Monday");//2015-11-09 00:00:00
echo date("Y-m-d H:i:s", $d) . PHP_EOL;

$d = strtotime("-4 Monday");//2015-11-02 00:00:00
echo date("Y-m-d H:i:s", $d) . PHP_EOL;

$d = strtotime("-5 Monday");//2015-10-26 00:00:00
echo date("Y-m-d H:i:s", $d) . PHP_EOL;


echo date("Y-m-d", strtotime("2009-01-31 next month")) . PHP_EOL; // PHP:  2009-03-03
echo date("Y-m-d", strtotime("2009-01-31 +1 month")) . PHP_EOL; // PHP:  2009-03-03
echo date("Y-m-d", strtotime("2009-01-31 +2 month")) . PHP_EOL; // PHP:  2009-03-31

echo strtotime("now"), "\n";
echo strtotime("10 September 2000"), "\n";
echo strtotime("+1 day"), "\n";
echo strtotime("+1 week"), "\n";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
echo strtotime("next Thursday"), "\n";
echo strtotime("last Monday"), "\n";
