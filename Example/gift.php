<?php

$prize_arr = array(
    '0' => array('id' => 1, 'title' => 'iphone5s', 'v' => 5),
    '1' => array('id' => 2, 'title' => '联系笔记本', 'v' => 10),
    '2' => array('id' => 3, 'title' => '音箱设备', 'v' => 20),
    '3' => array('id' => 4, 'title' => '30GU盘', 'v' => 30),
    '4' => array('id' => 5, 'title' => '话费50元', 'v' => 10),
    '5' => array('id' => 6, 'title' => 'iphone6s', 'v' => 15),
    '6' => array('id' => 7, 'title' => '谢谢，继续加油哦！~', 'v' => 10),
);

foreach ($prize_arr as $key => $val) {
    $arr[$val['id']] = $val['v'];
}

$res = array();
for ($i = 0; $i < 10000; $i++) {
    $prize_id = getRand($arr); //根据概率获取奖品id 
    $res[$prize_id] = isset($res[$prize_id]) ? $res[$prize_id] + 1 : 1;
}

print_r($res);

function getRand($proArr)
{ //计算中奖概率
    $rs = ''; //z中奖结果 
    $proSum = array_sum($proArr); //概率数组的总概率精度 
    //概率数组循环 
    foreach ($proArr as $key => $proCur) {
        $randNum = mt_rand(1, $proSum);
        if ($randNum <= $proCur) {
            $rs = $key;
            break;
        } else {
            $proSum -= $proCur;
        }
    }
    unset($proArr);
    return $rs;
}