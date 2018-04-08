<?php
  class GetterAndSetter {
    private $a = 1;
    public function get_value(){
      return $this->a;
    }
    public function set_value($value){
      $this->a = $value;
    }
  }
  $var = new GetterAndSetter();
  echo $var->get_value();
  echo $var->a;
 ?>
