
<?php
  class Person {
    function hello() {
      echo "Hello";
    }
  }
  $methods = get_class_methods("Person");
  foreach($methods as  $method) {
    echo $method . "<br/>";
  }
  if (method_exists("Person","hello"))
    echo "Method exists";
  else
    echo "Method not exists";

 ?>
