<html>
	<head>
		<title> PHP Test LOL </title>
	</head>
	<body>
		<?php echo '<p>Hi Wurld</p>'; ?>
		<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo 'You are using Internet Explorer.<br />';}
else {echo 'you arent using ie. <br />';}
echo $_SERVER['HTTP_USER_AGENT'];
?>

?>

	</body>
</html>