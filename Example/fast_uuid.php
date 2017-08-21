<?php

/**
 * fast_uuid 方法提供了另一种解决方案：
 * 使用 64bit 整数存储主键，主键由 fast_uuid 方法在创建记录时调用生成。
 *
 * 参数 suffix_len指定 生成的 ID 值附加多少位随机数，默认值为 3。
 *  即便不附加随机数也不会生成重复 ID，但附加的随机数可以让 ID 更难被猜测。
 *
 * @param int suffix_len
 *
 * @return string
 */

function fast_uuid($suffix_len = 3)
{
    //! 计算种子数的开始时间
    static $being_timestamp = 1336681180;// 2012-5-10

    $time = explode(' ', microtime());
    $id = ($time[1] - $being_timestamp) . sprintf('%06u', substr($time[0], 2, 6));
    if ($suffix_len > 0) {
        $id .= substr(sprintf('%010u', mt_rand()), 0, $suffix_len);
    }
    return $id;
}
