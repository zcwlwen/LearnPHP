<?php
/**
 * Created by PhpStorm.
 * User: abai
 * Date: 16/8/26
 * Time: 下午3:17
 */

//$curl = curl_init("http:www.baidu.com");
//
//curl_exec($curl);
//curl_close($curl);


$curlobj = curl_init();
curl_setopt($curlobj,CURLOPT_URL,"https://www.baidu.com/");
curl_setopt($curlobj,CURLOPT_RETURNTRANSFER,true);

$output = curl_exec($curlobj);
curl_close($curlobj);

//var_dump($output);
echo  str_replace("百度",'屌丝',$output);