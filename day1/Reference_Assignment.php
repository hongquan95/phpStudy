<!DOCTYPE html>
<html>
<head>
  <title>Reference Assignment</title>
</head>
<body>
  <?php
    $a = 1;
    $b = $a;
    $b = 2;
    echo "a:{$a}  b:{$b}" . "<br/>.<hr/>";

    $a = 1;
    $b = & $a;
    $b = 2;
    echo "a:{$a}  b:{$b}" . "<br/>.<hr/>";

    unset($a);
    echo "a:{$a}  b:{$b}" . "<br/>.<hr/>";
  ?>

</body>
</html>
