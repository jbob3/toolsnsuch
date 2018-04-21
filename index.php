<?php

include_once('bin/session.php');

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Jbob's Tools</title>
  <meta name="description" content="L33t tools by Jbob">
  <meta name="author" content="Jbob">


</head>

<body>
<h1>Check out the sweet tools</h1><hr>
<br><hr>
<h4>Virus Total IP Search:</h4>
 <form action="bin/vtApi.php" method:"get">
  IP to Search:<br>
  <input type="text" name="ip" ><br><br>
  <input type="submit" value="Submit">
</form> 
<hr>
<p><a href='sessionInfo.php'>Session Info</a></p>
</body>
</html>