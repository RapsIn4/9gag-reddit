<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>reddit: front page of the internet</title>
</head>

<body>

<?php 

	// Report all PHP errors
	error_reporting(-1);
	
	$url = 'http://www.reddit.com/.json?';
	
	$json = file_get_contents($url);
	$data = json_decode($json,TRUE);
	
	foreach ($data['data']['children'] as $item) {
		var_dump($item);
		echo '<hr>';	
	}
	
?>

</body>
</html>