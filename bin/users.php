<?php
if($_POST['username']) {
    $user = $_POST['username'];
	$_SESSION['passHash'] = $u[$user];
}
header('location: usersCreation.php');
$u['test'] = '$2y$10$SRUVZ8TqeI1U9Wb7Z8kk9Oq2c1jFVZlTy/6NHqfykdcyhseLLcL1m';