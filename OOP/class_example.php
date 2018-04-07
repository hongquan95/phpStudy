
<!DOCTYPE html>
<html>
<head>
  <title>TOP</title>
</head>
<body>
<?php
  class Person {

  }
  $classes = get_declared_classes();
  foreach($classes as $class) {
    if (class_exists("Person")) {
      echo $class . "<br/>";
    }
  }
 ?>

</body>
</html>
</body>
</html>
