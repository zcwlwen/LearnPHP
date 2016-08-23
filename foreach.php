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
//遍历key和value
foreach ($students as $k=>$v)
{
    echo $k;//输出（打印）姓名
    echo "<br />";
    echo $v;//输出（打印）姓名
    echo "<br />";
}
//只遍历value
foreach ($students as $v)
{
    echo $v;//输出（打印）姓名
    echo "<br />";
}

//嵌套条件嵌套
$totalMoney = 0;//总工资
$basicMoney =  300;//基本工资
$sex = "男";
$noHouse = TRUE; //是否有房
$houseMoney =  150;//住房补贴
$isPregnancy = TRUE; //是否怀孕
$pregnancyMoney =  100;//怀孕补贴
if($sex == "男")
{
    $totalMoney = $basicMoney  + 0;// 男的没奖金
    if($noHouse)
    {
        $totalMoney = $totalMoney  + $houseMoney;
    }
}
else if($sex == "女")
{
    $totalMoney = $basicMoney  + 300;// 女的有奖金300元
    if($isPregnancy)
    {
        $totalMoney = $totalMoney  + $pregnancyMoney;
    }
}
echo $totalMoney;
//循环嵌套


foreach($students as $key=>$val)
{ //使用循环结构遍历数组,获取学号
    echo $key; //输出学号
    echo ":";
    //循环输出姓名和分数
    foreach($val as $v)
    {
        echo $v;
    }
    echo "<br />";
}
//条件嵌套循环嵌套

$query = '2014';
//使用循环结构遍历数组,获取学号和姓名
foreach($students as $key =>$v)
{
    //使用条件结构，判断是否为该学号
    if($key == $query)
    {
        echo $v;//输出（打印）姓名
        break;//结束循环（跳出循环）
    }
}