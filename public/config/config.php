<?php 
	$dblocation = 'localhost';
	$dbname = 'borisov';
	$dbuser = 'root';
	$dbpassword = '';
	
	$dbconnect = mysqli_connect($dblocation, $dbuser, $dbpassword, $dbname);
	if (!$dbconnect){
		exit('ERROR DB');
	}