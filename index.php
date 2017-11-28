<?php

/**
 * @Author: yuran
 * @Date:   2017-11-23 17:13:16
 * @Last Modified by:   yuran
<<<<<<< HEAD
 * @Last Modified time: 2017-11-24 11:05:59
 */
$appid = 'wx8a584b7982c81418';
=======
 * @Last Modified time: 2017-11-28 09:06:43
 */
$appid = 'wx92b12a4a0cfd1933';
>>>>>>> 95lian

$url = "https://open.weixin.qq.com/connect/qrconnect?appid=$appid&redirect_uri=http://www.wxlogin.com/wxlogin.php&response_type=code&scope=snsapi_login&state=1&connect_redirect=1#wechat_redirect";

header('location:'.$url);