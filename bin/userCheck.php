<?php


include_once session.php;
include users.php;
if($_POST['username']) {
    $user = $_POST['username'];
	$_SESSION['passHash'] = $u["$user"];
}
$checkUser = $_POST['username'];
$inputPass = $_POST['password'];
$passHash = $_SESSSION['passHash'];

if(password_verify($inputPass, $passHash)){
    header("location: /../index.php");
}
else {
    echo '<h1>If you are seeing this you can leave</h1>';
    echo $inputPass;
    var_dump($_SESSION);
    var_dump($_POST);
    var_dumb($u);
}

?>