<!DOCTYPE html>
<html>
<head>
  <title>Reference Returns</title>
</head>
<body>
  <?php
    function &test()
    {
      global $a;
      $a = $a + 5;
      return $a;
    }
    $a = 1;
    $b = &test();
    echo "a = {$a}, b = {$b}"."<br/>";
    $b = 5;
    echo "a = {$a}, b = {$b}"."<br/>";
    ?>

</body>
</html>
