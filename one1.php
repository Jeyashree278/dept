<?php
	$host="localhost";
	$dbuser="root";
	$dbname="deptdevice";
	$password="";
	$con=mysql_connect($host,$dbuser,$password);
	//echo $con . "<br>"; 	
	//echo "hai";
	if(!$con)
	{	
	die('could not connect:'. mysql_error());
	}
	mysql_select_db($dbname,$con);
?>