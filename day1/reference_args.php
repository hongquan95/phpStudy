<!DOCTYPE html>
<html>
<head>
  <title>Reference args</title>
</head>
<body>
<?php

  function test(&$var)
  {
     $var = $var * 2;
  }
  $a = 10;
  test($a);
  echo $a;


?>
</body>
</html>
