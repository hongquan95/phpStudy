<!DOCTYPE html>
<html>
<head>
  <title>Test_array</title>
</head>
<body>
<?php
  $ar = array(1,2,3,4);
  echo "First arr =" ."<br/>";
  print_r($ar);
  $a = array_shift($ar);
  $b = array_unshift($ar,'seascond');
  // echo $a ."<br/>";
  echo $b . "<br/>";
  print_r($ar);
  echo "<br/>";
  $c = array_unshift($ar,'third');
  print_r($ar);




  ?>

</body>
</html>
