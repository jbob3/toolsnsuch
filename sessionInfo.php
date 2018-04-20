<?php
include_once 'bin/session.php';
?>

<h4>Session info:</h4>
<?php
foreach($_SESSION as $key => $val) {
  echo "<li>$key -> $val</li>";
}
?>