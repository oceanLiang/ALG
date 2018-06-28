<?php
/**
 * 二分查找
 *
 * -------------------------------------------------------------
 * 思路分析：数组中间的值floor((low+top)/2)
 * -------------------------------------------------------------
 * 先取数组中间的值floor((low+top)/2)然后通过与所需查找的数字进行比较，
 * 若比中间值大则将首值替换为中间位置下一个位置，继续第一步的操作；
 * 若比中间值小，则将尾值替换为中间位置上一个位置，继续第一步操作
 * 重复第二步操作直至找出目标数字
 */

/**
 * 非递归版 二分查找
 *
 * @param array $container
 * @param       $search
 * @return int|string
 */
function BinaryQuery(array $container, $search)
{
    $top = count($container);
    $low = 0;
    while ($low <= $top) {
        $mid = intval(floor(($low + $top) / 2));
        if (!isset($container[$mid])) {
            return '没找着哦';
        }
        if ($container[$mid] == $search) {
            return $mid;
        }
        $container[$mid] < $search && $low = $mid + 1;
        $container[$mid] > $search && $top = $mid - 1;
    }
}
/**
 * 递归版 二分查找
 *
 * @param array  $container
 * @param        $search
 * @param int    $low
 * @param string $top
 * @return int|string
 */
function BinaryQueryRecursive(array $container, $search, $low = 0, $top = 'default')
{
    $top == 'default' && $top = count($container);
    if ($low <= $top) {
        $mid = intval(floor($low + $top) / 2);
        if (!isset($container[$mid])) {
            return '没找着哦';
        }
        if ($container[$mid] == $search) {
            return $mid;
        }
        if ($container[$mid] < $search) {
            return BinaryQueryRecursive($container, $search, $mid + 1, $top);
        } else {
            return BinaryQueryRecursive($container, $search, $low, $mid - 1);
        }
    }
}