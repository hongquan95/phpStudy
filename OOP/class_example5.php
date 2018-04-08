<?php
class Person {
  var $first_name;
  var $last_name;
  var $legs_num = 2;
    function hello() {
      echo "Hello". get_class($this) ."<br/>";
    }
    function say_hello() {
      $this->hello();
    }
  }
  $person = new Person();
  $person->legs_num = 3;
  $person->first_name = 'TOP';
  $vars = get_class_vars('Person');
  foreach ($vars as $var=>$value) {
    echo "{$var}:{$value}"."<br/>";
  }
  $new_person = new Person();


 ?>

