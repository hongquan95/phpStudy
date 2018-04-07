
<?php
  class Person {
    function hello() {
      echo "Hello"."<br/>";
    }
  }
  $person1 = new Person();
  $person2 = new Person();
  echo get_class($person1);
  if (is_a($person1,"Person"))
    echo "True"."<br/>";
  else
    echo "False"."</br>";
  $person1->hello();

 ?>
