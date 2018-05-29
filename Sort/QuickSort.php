<?php

/**
 * @description: 快速排序
 * @param array $arr
 * @return array
 * @create:      2018-05-29 下午4:29
 * @author:      ocean <linaghaiyng@163.com>
 *
 * -------------------------------------------------------------
 *
 * 思路分析：从数列中挑出一个元素，称为 “基准”（pivot)
 * 大O表示： O(n log n) 最糟 O(n 2)
 *
 * -------------------------------------------------------------
 *
 * 重新排序数列，所有元素比基准值小的摆放在基准前面
 * 所有元素比基准值大的摆在基准的后面（相同的数可以到任一边）。
 * 递归地（recursive）把小于基准值元素的子数列和大于基准值元素的子数列排序
 *
 * -------------------------------------------------------------
 *
 * PS & EX:
 * 快速排序使用分而治之【 divide and conquer,D&C 】的策略，D&C 解决问题的过程包括两个步骤
 * 1. 找出基线条件，这种条件必须尽可能简单
 * 2. 不断将问题分解（或者说缩小规模），直到符合基线条件
 * (D&C 并非解决问题的算法，而是一种解决问题的思路）
 *
 */

   function QuickSort(array $arr){
       $count = count($arr);
       if($count <=1 ){
           return $arr;
       }

       $pivot = $arr[0]; // 基准值 pivot
       $left = $right = [];

       for($i=1;$i<$count;$i++){
           if($arr[$i]>$pivot){
               $right[] = $arr[$i];
           }else{
               $left[] = $arr[$i];
           }
       }

       $left = QuickSort($left);
       $right = QuickSort($right);

       return array_merge($left,$arr[0],$right);

   }


