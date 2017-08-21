<?php

$ar = array(
    array('id' => 0, 'pid' => 0, 'name' => '节点名称'),
    array('id' => 1, 'pid' => 2, 'name' => '节点名称'),
    array('id' => 2, 'pid' => 5, 'name' => '节点名称'),
    array('id' => 3, 'pid' => 0, 'name' => '节点名称'),
    array('id' => 4, 'pid' => 6, 'name' => '节点名称'),
    array('id' => 5, 'pid' => 0, 'name' => '节点名称'),
    array('id' => 6, 'pid' => 6, 'name' => '节点名称'),
    array('id' => 7, 'pid' => 3, 'name' => '节点名称'),
    array('id' => 8, 'pid' => 3, 'name' => '节点名称'),
    array('id' => 9, 'pid' => 5, 'name' => '节点名称')

);
/**
 * 创建父节点树形数组
 * 参数
 * $ar 数组，邻接列表方式组织的数据
 * $id 数组中作为主键的下标或关联键名
 * $pid 数组中作为父键的下标或关联键名
 * 返回 多维数组
 **/
function find_parent($ar, $id = 'id', $pid = 'pid')
{
    foreach ($ar as $v) $t[$v[$id]] = $v;
    foreach ($t as $k => $item) {
        if ($item[$pid]) {
            if (!isset($t[$item[$pid]]['parent'][$item[$pid]]))
                $t[$item[$id]]['parent'][$item[$pid]] =& $t[$item[$pid]];
        }
    }
    return $t;
}


/**
 * 创建子节点树形数组
 * 参数
 * $ar 数组，邻接列表方式组织的数据
 * $id 数组中作为主键的下标或关联键名
 * $pid 数组中作为父键的下标或关联键名
 * 返回 多维数组
 **/
function find_child($ar, $id = 'id', $pid = 'pid')
{
    foreach ($ar as $v) $t[$v[$id]] = $v;
    foreach ($t as $k => $item) {
        if ($item[$pid]) {
            $t[$item[$pid]]['child'][$item[$id]] =& $t[$k];
        }
    }
    return $t;
}

print_r(find_child($ar));
