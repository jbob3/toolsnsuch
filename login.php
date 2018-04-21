<?php

include_once('bin/session.php');

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Untitled</title>
  <meta name="description" content="L33t tools by Jbob">
  <meta name="author" content="Jbob">
  <link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body>


 <table style="width:100%">
  <tr>
    <td class="nav">
    <?php include_once 'bin/nav.php'; ?>
    </td>
    <td class="body">
    <p>Please fill in your credentials to login.</p>

<form action="bin/userCheck.php" method="post">

        <label>Username</label><br>

        <input type="text" name="username"><br><br>

        <label>Password</label><br>

        <input type="password" name="password" ><br><br>

        <input type="submit"value="Login"><br><br>

    <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>

</form>

   

     
    </td>
  </tr>
</table> 
</body>
</html>

