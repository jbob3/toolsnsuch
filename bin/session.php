<?php
if(! isset($_SESSION['id']));
{
	session_start(); # ...lines in every file in the sequence!!!
	$_SESSION['id'] = time() . $_SERVER['REMOTE_ADDR'];
}

?>