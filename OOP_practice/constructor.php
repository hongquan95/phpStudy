<?php
  class Table {
    public $legs;
    public static $table_totals = 0;
    function __construct() {
      $this->legs = 4;
      self::$table_totals ++;
    }
  }

  $table = new Table();
  echo $table->legs . "<br/>";
  echo Table::$table_totals . "<br/>";

  $t1 = new Table();
  echo Table::$table_totals . "<br/>";
  $t2 = new Table();
  echo Table::$table_totals . "<br/>";



 ?>
