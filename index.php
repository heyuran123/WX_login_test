<?php

/**
 * @Author: yuran
 * @Date:   2017-11-23 17:13:16
 * @Last Modified by:   yuran
 * @Last Modified time: 2017-11-24 10:23:18
 */
$appid = 'wx534200b90641e999';

$url = "https://open.weixin.qq.com/connect/qrconnect?appid=$appid&redirect_uri=http://www.wxlogin.com/wxlogin.php&response_type=code&scope=snsapi_login&state=1&connect_redirect=1#wechat_redirect";

header('location:'.$url);