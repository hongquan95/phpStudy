<?php
class Student {
  static $total_count = 0;
  static function increase()
  {
    Student::$total_count ++;
  }
  static function welcome() {
    return "Hello";
  }
}
class One {
  static $foo;
}
class Two extends One {

}
class Three extends One {

}
One::$foo = 1;
Two::$foo = 2;
Three::$foo = 3;
echo One::$foo;
echo Two::$foo;
echo Three::$foo;

 ?>
