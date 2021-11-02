<?php

$db_host = "";
$db_user = "";
$db_password = "";
$db_name = "";
$scriptServerName = $_SERVER["SERVER_NAME"];

if($scriptServerName == "localhost"){
	$db_host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_name = "babykish";
}else{
	$db_host = "";
	$db_user = "";
	$db_password = "";
	$db_name = "";
}

$con = mysqli_connect($db_host,$db_user,$db_password,$db_name) or die("Connection was not established");
