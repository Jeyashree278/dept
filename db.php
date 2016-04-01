<?php
	$host="us-cdbr-iron-east-03.cleardb.net";
	$dbuser="be874b4cf34457";
	$dbname="ad_975da9f5b2e50df";
	$password="255637d5";
	$con=mysql_connect($host,$dbuser,$password);
	//echo $con . "<br>"; 
	if(!$con)
	{	
	die('could not connect:'. mysql_error());
	}
	mysql_select_db($dbname,$con);
?>