<?php

$dbhost = "10.104.203.174";
$dbuser = "root";
$dbpass = "panicap";
$dbname = "k8sdb";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$con){
	echo "failed\n";
	exit();
	} 
	
?>
