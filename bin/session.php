<?php

if(session_id() == "")
{
	session_start(); # ...lines in every file in the sequence!!!
	$_SESSION['id'] = '';
	$_SESSION['indexPath'] = '\..\index.php';
	$_SESSION['startTime'] = time();
	$_SESSION['userIP'] = $_SERVER['REMOTE_ADDR'];
	$_SESSION['apiKey'] = '3e3a9397344f1024ea21ae38e29acaa5a78375618f5f5483d711aadb57f1cea6';
	$_SESSION['id'] = $_SESSION['startTime'] . ':' . $_SESSION['userIP'];
}
//sketchy ass authentication
if($_GET['id'] !== 'jbob' and $_SESSION['id'] !== 'jbob'){
	header("location: /../getOut.php");
}
if ($_GET['id'] === 'jbob')
{
	$_SESSION['id'] = 'jbob';
}
//check for $_SESSION['u'] == "" in login.php

if(time() > ($_SESSION['startTime'] + 100)){
	unset($_SESSION);
	session_destroy($_SESSION);
}
?>