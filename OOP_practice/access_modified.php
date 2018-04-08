<?php
class Example {
public $a = 1;
protected $b = 2;
private $c = 3;

function show() {
  echo $this->a;
  echo $this->b;
  echo $this->c;
  }
}
$ex1 = new Example();
echo "public a: {$ex1->a}<br/>";
echo "protected b: {$ex1->b}<br/>";
echo "private c: {$ex1->c}<br/>";
$ex1->show();
 ?>

