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
    <h4>Session info:</h4><hr>
    <?php
    foreach($_SESSION as $key => $val) {
    echo "<li>$key -> $val</li>";
    }
    echo session_status();
  ?>
     
    </td>
  </tr>
</table> 
</body>
</html>