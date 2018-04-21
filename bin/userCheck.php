<?php


include_once session.php;
include users.php;

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
}

?>