<?php
/**
 * Created by PhpStorm.
 * User: abai
 * Date: 16/7/14
 * Time: 下午3:16
 */

//echo preg_replace_callback('~-([a-z])~', function ($match) {return strtoupper($match[1]);}, 'hello-world');
function foo($var)
{
    $var = $var+1;
    return $var;
}

$a=5;
$a = foo($a);
echo $a;
//echo $b;