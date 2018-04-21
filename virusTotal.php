<?php

include_once 'bin/session.php';


?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Jbob's Tools</title>
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
      <h2>Virus Total IP Search:</h2>
      <form action="bin/vtApi.php" method:"get">
        IP to Search:<br>
        <input type="text" name="ip" ><br><br>
        <input type="submit" value="Submit">
      </form> 
      <hr>
      <p><a href='sessionInfo.php'>Session Info</a></p>
    </td>
  </tr>
</table> 
</body>
</html>