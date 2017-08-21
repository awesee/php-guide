<?php
date_default_timezone_set('Asia/Shanghai');

// echo (date('Y-m-d', time() - 86400*2));

/**
 * 获取 IP  地理位置
 * 淘宝IP接口
 * @Return: array
 */
function get_city_by_ip($ip)
{
    $url = "http://ip.taobao.com/service/getIpInfo.php?ip=" . $ip;
    $ipinfo = json_decode(file_get_contents($url));
    if ($ipinfo->code == '1') {
        return false;
    }
    $city = $ipinfo->data->region . $ipinfo->data->city; //省市县
    $ip = $ipinfo->data->ip; //IP地址
    $ips = $ipinfo->data->isp; //运营商
    $guo = $ipinfo->data->country; //国家
    if ($guo == '中国') {
        $guo = '';
    }
    return $guo . $city . $ips . '[' . $ip . ']';

}


// p(get_city_by_ip("115.239.211.112"));
// 多维数组排序
$a = array(
    array('key1' => 940, 'key2' => 'blah'),
    array('key1' => 93, 'key2' => 'this'),
    array('key1' => 894, 'key2' => 'that')
);

// p($a);

function asc_number_sort($x, $y)
{
    if ($x['key1'] > $y['key1']) {
        return true;
    } elseif ($x['key1'] < $y['key1']) {
        # code...
        return false;
    } else {
        return 0;
    }
}

function string_sort($x, $y)
{
    return strcasecmp($x['key2'], $y['key2']);
}

// usort($a,'asc_number_sort');
usort($a, 'string_sort');

// p($a);

// json_decode() 使用
$params = array(
    "uids" => array('1', '2', '3'),
    "content" => 'content'
);
if (is_array($params)) {
    $params = json_encode($params);
}
// var_dump($params);
// $params = json_decode($params);
$params = json_decode($params, true);
// var_dump($params);


/**
 * [p 格式化打印数组]
 * @param  [type] $array [数组/字符串]
 * @return [type]        [description]
 */
function p($array)
{
    echo '<pre>' . print_r($array, true) . '</pre>' . PHP_EOL;
    exit;
}


function my_scandir($dir)
{

    $files = array();

    if (is_dir($dir)) {

        if ($handle = opendir($dir)) {

            while (($file = readdir($handle)) !== false) {

                if ($file != "." && $file != "..") {

                    if (is_dir($dir . "/" . $file)) {

                        $files[$file] = my_scandir($dir . "/" . $file);
                    } else {

                        $files[] = $dir . "/" . $file;
                    }
                }
            }
            closedir($handle);
            return $files;
        }
    }
}

// print_r(my_scandir("/Users/Andy/Pictures"));


/**
 * [bubble_sort 冒泡排序（数组排序）]
 * @param  [type] $array [description]
 * @return [type]        [description]
 */
function bubble_sort($array)
{
    $count = count($array);
    if ($count <= 0) return false;
    for ($i = 0; $i < $count; $i++) {
        for ($j = $count - 1; $j > $i; $j--) {
            if ($array[$j] < $array[$j - 1]) {
                $tmp = $array[$j];
                $array[$j] = $array[$j - 1];
                $array[$j - 1] = $tmp;
            }
        }
    }
    return $array;
}

/**
 * [quicksort 快速排序（数组排序）]
 * @param  [type] $array [description]
 * @return [type]        [description]
 */
function quicksort($array)
{
    if (count($array) <= 1) return $array;
    $key = $array[0];
    $left_arr = array();
    $right_arr = array();
    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] <= $key)
            $left_arr[] = $array[$i];
        else
            $right_arr[] = $array[$i];
    }
    $left_arr = quicksort($left_arr);
    $right_arr = quicksort($right_arr);
    return array_merge($left_arr, array($key), $right_arr);
}


function test($a, $b, $c)
{

    $url = "http://www.sina.com.cn/abc/de/fg.php?id=1";     // 需要取出 php 或 .php

    $arr = parse_url($url);

    $file = basename($arr['path']);

    $ext = explode(".", $file);

    return $ext[1];


    // function getExt1($url) {

    //     $url = basename($url);

    //     $pos1 = strpos($url,”.”);

    //     $pos2 = strpos($url,”?”);

    //     if(strstr($url,”?”)){

    //         return substr($url,$pos1 + 1,$pos2 – $pos1 – 1);

    //     } else {

    //         return substr($url,$pos1);

    //     }
    // }

}

test(1, 2, 3);

