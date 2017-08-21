<?php

function generateTree($items)
{
    $tree = array();
    foreach ($items as $k => $item) {
        if (isset($items[$item['pid']])) {
            $items[$item['pid']]['son'][] = &$items[$k];
        } else {
            $tree[] = &$items[$k];
        }
        // print_r($items);
        // print_r($tree);exit;
    }
    return $tree;
}

$items = array(
    array('id' => 1, 'pid' => 0, 'name' => '安徽省'),
    array('id' => 2, 'pid' => 0, 'name' => '浙江省'),
    array('id' => 3, 'pid' => 1, 'name' => '合肥市'),
    array('id' => 4, 'pid' => 3, 'name' => '长丰县'),
    array('id' => 5, 'pid' => 1, 'name' => '安庆市'),
);
$items = array_column($items, null, 'id');
// print_r($items);exit();
print_r(generateTree($items));
