<!DOCTYPE html>
<html>
<head>
	<title> Find your public IP address here </title>
	<link rel="icon" href="images/Favicon/nepal.ico" type="image/x-ico">
	<style>
	button {
		background: #4B8DF9 none repeat scroll 0% 0%;
		padding: 5px 10px 6px;
		color: #FBF7F7;
		font-weight: bold;
		border-radius: 5px;
		box-shadow: 0px 1px 3px #999;
		text-shadow: 0px -1px 1px #222;
		cursor: pointer;
		font-size: 18px;
		font-family: Verdana,Geneva,sans-serif;
		align
	}
	button:hover{ 
	background-color: #4C0000; }
	.ip strong{
		font-size:32px;
	}
	.ip{
		font-size:24px;
	}
	</style>
</head>
<body>
<?php
	$address = getenv("REMOTE_ADDR");

	echo "<div align=center class=\"ip\"><strong>Your public IP address:</strong> $address </div>";
	echo "";
?>
<br>

	<div align="center"><button onclick="window.location.href='/index.html'">Back to home</button></div>
</body>
</html>