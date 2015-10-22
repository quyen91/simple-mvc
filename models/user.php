<?php

class User extends Model {
    public $table = 'user';
    public $primary_key = 'id';

    public function checkUser($username){
    	$sql = "select * from `{$this->table}` where `user_name`='$username'";
    	return db_get_all($sql);

    
    }
    public function signup($arr_user){
    	return db_insert($this->table, $arr_user);
    }
}
