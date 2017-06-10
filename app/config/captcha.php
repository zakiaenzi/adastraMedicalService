<?php
/**
 * Created by PhpStorm.
 * User: cedric
 * Date: 10/06/2017
 * Time: 11:50
 */

if (!class_exists('CaptchaConfiguration')) { return; }

// BotDetect PHP Captcha configuration options

return [
    // Captcha configuration for example page
    'ExampleCaptcha' => [
        'UserInputID' => 'captchaCode',
        'ImageWidth' => 250,
        'ImageHeight' => 50,
    ],

];