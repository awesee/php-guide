<?php

    // 测距
    // $url = 'http://apis.baidu.com/apistore/distance/waypoints?waypoints=118.77147503233%2C32.054128923368%3B116.3521416286%2C+39.965780080447%3B116.28215586757%2C39.965780080447&output=json&coord_type=bd09ll';
    
    // 图灵机器人
    $url = 'http://apis.baidu.com/turing/turing/turing?key=879a6cb3afb84dbf4fc84a1df2ab7319&info=%E6%9F%A5%E5%A4%A9%E6%B0%94%E2%80%9C%E5%8C%97%E4%BA%AC%E4%BB%8A%E5%A4%A9%E5%A4%A9%E6%B0%94%E2%80%9D&userid=eb2edb736';

    $header = array(
            'apikey: e2763d886ac1134713f24dcb72aa16f3',
        );
    
    $ch = curl_init();
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);

    var_dump(json_decode($res));
