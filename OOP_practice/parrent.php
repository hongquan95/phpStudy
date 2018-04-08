<?php
class A {
  static $a = 1;
  static function modif_a(){
    return self::$a + 10;
  }
  public function hello() {
    echo "Hello<br/>";
  }
}
class B extends A {
  static function att_test() {
    echo parent::$a."<br/>";
  }
  static function method_test() {
    echo parent::modif_a()."<br/>";
  }
  public function instance_test() {
    // return $this->hello();
    return parent::hello();
  }
  public function hello()
  {
    echo "**********";
    parent::hello();
    echo "**********";
  }
}

echo B::$a."<br/>";
echo B::modif_a()."<br/>";
B::att_test();
B::method_test();

$object = new B();
echo $object->instance_test();
echo $object->hello();



 ?>

