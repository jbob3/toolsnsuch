<?php
include_once 'bin/session.php';

$v = array();
$handle = fopen('users.php', 'a');
$usersFile = 'users.php';

if (is_writable($usersFile)) { 
    foreach($_POST as $key => $val) {
        $v[$key] = $val;
        
        }
    $v['passwordHash'] = password_hash($v['password'], PASSWORD_BCRYPT);
    $userString = '$u[\'' . $v['username'] . '\'] = \'' . $v['passwordHash'] . '\';' . "\n";
    fwrite($handle, $userString);
    $v['success'] = true;
}
else {
    echo 'Error: File not writeable';
}


fclose($handle);

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Untitled</title>
  <meta name="description" content="L33t tools by Jbob">
  <meta name="author" content="Jbob">
  <link rel="stylesheet" type="text/css" href="/../css/main.css">

</head>

<body>


 <table style="width:100%">
  <tr>
    <td class="nav">
    <?php include_once 'nav.php'; ?>
    </td>
    <td class="body">
    <h3>Password Confirmation</h3>
    <?php
    if($v['success']){
        echo '<h4>User added!</h4>';
    }
    else {
        echo '<h4>User not saved</h4>';
    }


    ?>
    </td>
  </tr>
</table> 
</body>
</html>