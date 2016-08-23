<?php
/**
 * Created by PhpStorm.
 * User: abai
 * Date: 16/7/14
 * Time: 下午5:32
 */

$image = imagecreatetruecolor(100.30);

header('content-type: image/png');

imagepng($image);

imagedestroy($image);