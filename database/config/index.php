<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "musys";
	$conexion = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Error: En la conexion");
	mysql_select_db($dbname);
	mysql_query("SET NAMES utf8");
	mysql_query("SET CHARACTER_SET utf");
?>