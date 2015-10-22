<?php
/**
 *
 */

class News extends Model
{
  public $table = 'news';
  public $table_comment = 'comments';
  public $primary_key = 'id';

  public function get_post(){
    $sql = "SELECT * FROM `{$this->table}`";
    return db_get_all($sql);
  }
  public function get_detail($id){
  	 $sql = "SELECT * FROM `{$this->table}` WHERE `ID`='$id'";
  	 return db_get_all($sql);
  }
  public function save_comments($comment){
  	return db_insert($this->table_comment, $comment);
  }
   public function get_comments($id){
    $sql = "SELECT * FROM `{$this->table_comment}` where `id_post`='$id'  order by `id` DESC limit 5" ;
   	 return db_get_all($sql);

   }



}


 ?>
