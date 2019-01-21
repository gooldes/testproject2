<?php 
$path = strtolower($_SERVER['REQUEST_URI']);
if(
	strpos($path,'.png') !== FALSE || 
	strpos($path,'.jpg') !== FALSE ||
	strpos($path,'.jpeg') !== FALSE || 
	strpos($path,'.css') !== FALSE ||
	strpos($path,'.js') !== FALSE ||
	strpos($path,'.gif') !== FALSE
){
	header('HTTP/1.0 404 Not Found');
	echo 'Resource not found!';
	exit();
} elseif(strpos($path,'thankyou') !== FALSE || strpos($path,'thank-you') !== FALSE) {
	header('Location: /thank-you.php');
} else {
	header('Location: /');
}