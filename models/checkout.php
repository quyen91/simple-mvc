<?php
class Checkout extends Model{

  public $primary_key = 'id';
  public $table = 'checkout';
  public function get_bill(){
    $sql = "SELECT * FROM `{$this->table}`";
    return db_get_all($sql);
  }
  public function add_bill(){
  	$id = $_GET['id'];
  	$where = "`id`=$id";

  }

}

 ?>
