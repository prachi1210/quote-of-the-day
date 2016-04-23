<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="author" content="Prachi Manchanda">
	<meta name="description" content="Quote of the Day">
	<title>Quote of the Day</title>
</head>
<body bgcolor="#98AFC7">
	<center>			
		<h1><font face ="Tw Cen MT" color="#151b54">Quote of the Day</h1>
		<h3><font face ="Tw Cen MT" color="#151b54">Powered By</h3>
		<img src="images/logo.gif" alt="GoodReads" >
	</center>
	<br>
</body>
</html>
<?php

	function get_curl($url)
	{
		$curl_handle=curl_init();
		
		curl_setopt($curl_handle, CURLOPT_URL, $url);
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 5);
		$result= curl_exec($curl_handle);
		return $result;
	}
		
	
		$res = get_curl("http://www.goodreads.com/quotes_of_the_day");
		
		$start = strpos($res, 'About this quote:');
		$end = strpos($res,'View this quote', $start);
		$length = $end-$start;
		
		$res = substr($res, $start, $length);

		$res=str_replace("href=", "",$res);
	
	echo $res;
?>
