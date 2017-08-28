<?php
$url = (isset($_GET['url'])) ? $_GET['url'] : false;
if(!$url) exit;

$referer = (isset($_SERVER['HTTP_REFERER'])) ? strtolower($_SERVER['HTTP_REFERER']) : false;
$is_allowed = $referer && strpos($referer, strtolower($_SERVER['SERVER_NAME'])) !== false; //deny abuse of your proxy from outside your site

$opts = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"));
$context = stream_context_create($opts);

$string = ($is_allowed) ? utf8_encode(file_get_contents($url,false,$context)) : 'You are not allowed to use this proxy!';
$json = json_encode($string);
$callback = (isset($_GET['callback'])) ? $_GET['callback'] : false;
if($callback){
	$jsonp = "$callback($json)";
	header('Content-Type: application/javascript');
	echo $jsonp;
	exit;
}
echo $json;