<?php

    session_start();

    $captcha = substr(md5(uniqid(rand(0, 6))), 0, 6);

    $_SESSION['code'] = $captcha;

    header('Content-type: image/png');

    $code_length = strlen($captcha);
    $width = imagefontwidth(5) * $code_length;
    $height = imagefontheight(5);

    $image = imagecreate($width, $height);

    $backg_color = imagecolorallocate($image, 0, 0, 0);
    $text_color = imagecolorallocate($image, 255, 255, 255);
    imagefill($image, 0, 0, $backg_color);

    imagestring($image, 5, 0, 0, $captcha, $text_color);

    imagepng($image);