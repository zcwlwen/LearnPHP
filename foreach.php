<?php
/**
 * Created by PhpStorm.
 * User: abai
 * Date: 16/8/23
 * Time: 下午2:27
 */
$students = array(
    '2010'=>'令狐冲',
    '2011'=>'林平之',
    '2012'=>'曲洋',
    '2013'=>'任盈盈',
    '2014'=>'向问天',
    '2015'=>'任我行',
    '2016'=>'冲虚',
    '2017'=>'方正',
    '2018'=>'岳不群',
    '2019'=>'宁中则',
);//10个学生的学号和姓名，用数组存储

//使用循环结构遍历数组,获取学号和姓名
foreach ($students as $k=>$v)
{
    echo $k;//输出（打印）姓名
    echo "<br />";
    echo $v;//输出（打印）姓名
    echo "<br />";
}
