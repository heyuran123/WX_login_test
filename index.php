<?php

/**
 * @Author: yuran
 * @Date:   2017-11-23 17:13:16
 * @Last Modified by:   yuran
 * @Last Modified time: 2017-11-28 09:26:23
 */
$appid = 'wx92b12a4a0cfd1933';

$url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appid&redirect_uri=http://www.wxlogin.com/wxlogin.php&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect";

header('location:'.$url);