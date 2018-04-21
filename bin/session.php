<?php

if(session_id() == "")
{
	session_start(); # ...lines in every file in the sequence!!!
	$_SESSION['id'] = '';
	$_SESSION['indexPath'] = '\..\index.php';
	$_SESSION['startTime'] = time();
	$_SESSION['userIP'] = $_SERVER['REMOTE_ADDR'];
	$_SESSION['id'] = $_SESSION['startTime'] . ':' . $_SESSION['userIP'];
}


?>