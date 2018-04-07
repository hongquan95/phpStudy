
<!DOCTYPE html>
<html>
<head>
  <title>Test_array</title>
</head>
<body>
<?php
  $ar = array(1,2,3,4);
  echo "First arr =" ."<br/>";
  $a = array_shift($ar);
  echo "a =".$a . "<br/>";
  print_r($ar);
  echo "<br/><hr>";

  $ab = array(1,2,3,4);
  $b = array_unshift($ab,'var');
  echo "b = ".$b ."<br/>";
  print_r($ab);
  echo "<br/><hr>";
  //
  $var = array(1,2,3);
  array_push($var,4);
  echo "array_pop exemple<br/>";
  print_r($var);

  echo array_pop($var);




  ?>

</body>
</html>
