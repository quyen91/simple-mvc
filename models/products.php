<?php
/**
 *
 */
class Products extends Model
{
	public $table = 'products';
	public $table_type = 'product_type';
	public $primary_key = 'id';

	public function get_product(){
		$sql = "select * from `{$this->table}`";
		return db_get_all($sql);
	}
	public function get_product_byid($id){
		$sql = "select * from `{$this->table}` where `id`='$id'";
		return db_get_all($sql);
	}
	public function get_product_alltype(){
		$sql = "select * from `{$this->table_type}`";
		return db_get_all($sql);
	}
	public function get_product_bytype(){
		$id = $_GET['type'];
	    $sql = "select * from `{$this->table}` where `type`='$id'"; 

		return db_get_all($sql);
	}
	public function get_product_session(){
		$result = array();
		if(isset($_SESSION['cart'])){
			foreach($_SESSION['cart'] as $id => $sl){
				$sql = "select * from `{$this->table}` where `id`='$id'";
				$temp = db_get_all($sql);
				$temp[0]['sl'] = $sl['qty'];		
				array_push($result,$temp);
			}
		}


		return $result;

	}

	public function paginate($page, $per_page = 20, $where = '') {
        //$page = abs($page) - 1;
        $skip = ($page - 1) * $per_page;
        $sql = "SELECT * FROM `{$this->table}` {$where} LIMIT {$per_page} OFFSET {$skip}";
        
        return db_get_all($sql);
    }


}


?>
