<?php
class Person {
    function hello() {
      echo "Hello". get_class($this) ."<br/>";
    }
    function say_hello() {
      $this->hello();
    }
  }
  $person = new Person();
  $person->hello();
  $person->say_hello();

 ?>

