<?php
$access_token = 'IcuAQNSEYdYl/DfQMCViSjn1EpwaF0WM0Siv18qlnofbVh8AOKXGpfO1supeW8vquBQdZhcPcR9gtKn/o4oQS4sOGLakJE3BX7wrVi7DBRjC2lyBHF+xioOavatRMAvfLSG8eS9uo4+nx7hivF0DegdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
