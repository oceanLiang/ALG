<?php

/**
 * @description: 插入排序
 * @param $arr
 * @return array|bool
 * @create:      dat
 * @author:      ocean <linaghaiyng@163.com>
 * ----------------------------------------------------
 *
 * 时间复杂度: O (n^2)
 *
 * ----------------------------------------------------
 *
 * 思路:选择一个带插入的元素(假设从第一个开始),分别和已经插入有顺序
 * 的元素比较,如果要插入元素比比较元素小,则位置交换
 *
 *
 * ----------------------------------------------------
 *
 *
 */
function insertSort($arr){
    if(!is_array($arr)) return false;
    //外层循环插入次数
    for($i=1;$i<count($arr);$i++){
        $tmp = $arr[$i];//要插入的元素
        //内层循环比较和插入
        for($j=$i-1;$j>=0;$j--){
            //发现要插入的元素小
            if($tmp < $arr[$j]){
                //将后边的元素和前面的元素交换
                $arr[$j+1]=$arr[$j];
                //把前面的数设置为当前需要交换的数
                $arr[$j] = $tmp;
            }
        }
    }
    return $arr;
}