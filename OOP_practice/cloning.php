<?php
class A {
  public $name;
  public function __construct(){
    echo "construct <br/>";
  }
  public function __clone() {
    echo "clone <br/>";
  }
}
$a = new A();
$a->name = 'top';
echo $a->name."<br/>";
$b = clone $a;

$b->name = 'quan';


echo $a->name."<br/>";
echo $b->name."<br/>";

 ?>
