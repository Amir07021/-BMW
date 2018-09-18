<?php

$mysqli = false
function connectDB (){
	global $mysqli
	$mysqli = new mysqli ("localhost", "root", "" , "bmwbase");
	$mysqli->query ("SET NAMES 'utf-8');
}
functions closeDB (){
	global $mysqli;
	$mysqli->close ();
}

?>