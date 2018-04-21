<?php

include_once 'bin/session.php';

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
    <p>Please fill this form to create an account.</p>

    <form action="bin/usersCreation.php" method="post">

        <label>Username</label><br>

        <input type="text" name="username"><br><br>

        <label>Password</label><br>

        <input type="password" name="password"><br><br>

        <label>Confirm Password</label><br>

        <input type="password" name="confirm_password" ><br><br>

        <input type="submit" class="btn btn-primary" value="Submit"><br>

        <input type="reset" class="btn btn-default" value="Reset"><br><br>

    <p>Already have an account?<br><br> <a href="login.php">Login here</a></p>

</form>

</div>    
     
    </td>
  </tr>
</table> 
</body>
</html>