<?php

/**
 * @Author: yuran
 * @Date:   2017-11-23 17:13:16
 * @Last Modified by:   yuran
 * @Last Modified time: 2017-11-28 09:38:55
 */
$appid = 'wx92b12a4a0cfd1933';
$redirect_uri = 'http://www.wxlogin.com/wxlogin.php';

//$url = "https://open.weixin.qq.com/connect/qrconnect?appid=$appid&redirect_uri=http://www.wxlogin.com/wxlogin.php&response_type=code&scope=snsapi_login&state=1&connect_redirect=1#wechat_redirect";
$url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appid&redirect_uri=$redirect_uri&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect";

header('location:'.$url);