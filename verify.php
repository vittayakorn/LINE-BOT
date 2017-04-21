<?php
$access_token = '2Jzs//UusGskjjlWxp0sbItd2EiaRejHjOkA4xabVoxVvlqDU7wPCNA2eUA0QIs2RITMSs1FIc4hPNtyt9DZ8XMesX0OsGm+9NhoZYp/hFf3lxXTWruLbJE5F1bpNerhxfwZMpB6v5u1cojixCw7XAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
