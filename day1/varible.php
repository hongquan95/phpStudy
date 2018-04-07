<!DOCTYPE html>
<html>
<head>
  <title>Varble Scope</title>
</head>
<body>
  <?php
  $var = 1;
  function test()
  {
    $var = 2;
    echo $var. "<br/>";
  }
  test();

  echo "$\var =$var ". "<br/><hr/>";

  $var = 1;
  function test2()
  {
    global $var;
    $var = 2;
    echo $var. "<br/>";
  }
  test2();

  echo "$\var global =$var ". "<br/><hr/>";

  //use static as count in local function
  function test3()
  {
    static $var = 0;
    echo $var. "<br/>";
    $var ++;
  }
  test3();
  test3();
  test3();

  ?>

</body>
</html>
