<?php
/**
 *
 */

class News extends Model
{
  public $table = 'news';
  public $table_comment = 'comments';
  public $table_tag = 'tag';
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
   public function add_tag($idPost,$tag){
      
      $arrTag = explode(",",$tag);
      
      foreach ($arrTag as $t) {
        $idTag = "";
        $t = trim($t);  //bo cac khoang trang
        //query tag table
        $sql = "SELECT * FROM `{$this->table_tag}` where `name` = '$t'";
        $result = db_get_all($sql);
        if(count($result)==0){
            $temp = array(
              'name' => $t
              );
            db_insert($this->table_tag,$temp);
            $idTag = mysql_insert_id();
        }
        else{
          //lay id cua tag nay
          $idTag = $result[0]['id'];
        }

        $temp2 = array(
          'post_id' => $idPost,
          'tag_id' => $idTag
        );
        db_insert('post_tag',$temp2);
      }
   }
   public function viewAlltag(){
       $sql = "SELECT * FROM `{$this->table_tag}`";
       return db_get_all($sql);
   }
   public function getPostTagName($id){
       $sql = "SELECT t.name,t.id FROM `{$this->table_tag}` t JOIN `post_tag` pt on `id` = `tag_id` where `post_id`=$id";
        return db_get_all($sql);
   }
   public function getPost_byTagid($id){
      $sql = "SELECT *  FROM `{$this->table}` JOIN `post_tag` on `ID` = `post_id` where `tag_id`=$id";
      return db_get_all($sql);
   }



}


 ?>
