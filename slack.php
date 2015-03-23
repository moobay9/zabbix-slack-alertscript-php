#!/usr/bin/php
<?php
$config = parse_ini_file('config.ini');

$token   = $argv['1'];
$subject = $argv['2'];
$body    = $argv['3'];

$postdata = array('payload' => json_encode(
	array(
		'username' => $config['username'],
		'icon_url' => $config['icon'],
		'text'     => $body,
		'channel'  => $config['channel'],
	))
);

// $ch = curl_init($config['url'].'?'.http_build_query(array('token' => $token)));
$ch = curl_init($config['url']);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
curl_exec($ch);
curl_close($ch);
