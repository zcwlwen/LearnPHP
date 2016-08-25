<?php
/**
 * Created by PhpStorm.
 * User: abai
 * Date: 16/8/23
 * Time: 下午4:48
 */


function setcookie ($name, $value = null, $expire = null, $path = null, $domain = null, $secure = null, $httponly = null) {}
/**
 * Send a cookie without urlencoding the cookie value
 * @link http://php.net/manual/en/function.setrawcookie.php
 * @param string $name   Cookie名
 * @param string $value [optional] Cookie值
 * @param int $expire [optional]   Unix时间戳格式，默认为0，表示浏览器关闭即失效
 * @param string $path [optional] （有效路径）如果路径设置为'/'，则整个网站都有效
 * @param string $domain [optional]（有效域）默认整个域名都有效，如果设置了'www.imooc.com',则只在www子域中有效
 * @param bool $secure [optional]
 * @param bool $httponly [optional]
 * @return bool true on success or false on failure.
 * @since 5.0
 */
setcookie('test', time());
ob_start();
print_r($_COOKIE);
$content = ob_get_contents();
$content = str_replace(" ", '&nbsp;', $content);
ob_clean();
header("content-type:text/html; charset=utf-8");
echo '当前的Cookie为：<br>';
echo nl2br($content);

