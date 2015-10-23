<?php
function checkout_view(){

		$data['checkout'] = model('checkout')->get_bill();
		$data['template_file'] = 'products/view_checkout.php';
		render('layout.php', $data);
}
function checkout_addnew(){
	if(isset($_POST['submit'])){
		date_default_timezone_set('Asia/Ho_Chi_Minh');
	 	$date1 = date("Y-m-d H:i:s");

    $temp = array();
    $temp['name_customer'] = $_POST['name_customer'];
    $temp['email'] = $_POST['email'];
    $temp['phone'] = $_POST['phone'];
    $temp['bank'] = $_POST['bank'];
    $temp['time'] = $date1;
    $temp['payed'] =false;
    $temp['deliveried'] = false;
 	$temp['total'] = $_SESSION['total'];

 	db_insert('checkout',$temp);
 	//tru bot so luong cua san pham
 	foreach ($_SESSION['cart'] as $key => $value) {
 		//truy van toi san pham trong csdl
 		$where = "`id`=$key";
       
 		$result = model('products')->get_product_byid($key);
 		$result[0]['status'] = $result[0]['status'] - $value['qty'];


 		db_update('products',$result[0],$where);
 	}

 	$data['cart'] = model('products')->get_product_session();
    $data['bill'] = $temp;
    $data['template_file'] = 'products/paybill.php';
    render('layout.php', $data);
    unset($_SESSION['cart']);
  }
  elseif(isset($_SESSION['cart'])){
    $data['cart'] = model('products')->get_product_session();
    $data['template_file'] = 'products/checkout.php';
    render('layout.php', $data);

  }
}

 ?>
