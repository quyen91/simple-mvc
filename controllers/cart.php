<?php
function cart_view(){
	$data['cart'] = model('products')->get_product_session();
	$data['template_file'] = 'products/cart_view.php';
	  render('layout.php', $data);
}
function cart_add(){
   //su dung ajax de truyen du lieu
   header('Content-Type: application/json');
	//$id = $_GET['id'];
   $id = $_POST['id'];

	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['qty'] ++;
		//$_SESSION['cart'][$id]['price'] = $price;
	}
	else{
		$_SESSION['cart'][$id]['qty'] = 1;
		//$_SESSION['cart'][$id]['price'] = $price;

	}
	
	//redirect('index.php?c=products&m=viewAlltype');
	$total_cart = count($_SESSION['cart']);
	echo json_encode(array('cart_total'=>$total_cart));

}
function cart_deleteAll(){

	unset($_SESSION['cart']);
	echo '0';

}
function cart_deleteOne(){
	header('Content-Type: application/json');
	$id=$_POST['id'];

	foreach ($_SESSION['cart'] as $pro => $sl) {
		if($pro==$id) {
			unset($_SESSION['cart'][$id]);
		}
	}
	//redirect('index.php?c=cart&m=view');
	$total_cart = count($_SESSION['cart']);
	echo json_encode(array('cart_total'=>$total_cart));
}
function cart_update(){

	header('Content-Type: application/json');
	$total = 0;
	

	$update = $_SESSION['cart'];
	$update[$_POST['id']]['qty']= abs($_POST['qty']);
	if($update[$_POST['id']]['qty']==0){
		unset($update[$_POST['id']]);
	}
	$_SESSION['cart'] = $update;
	// foreach ($update as $key => $value) {
	// 	$total+=$value['qty']*$value['price'];
	// }
	echo json_encode(array('qty' => $_POST['qty'], 'total' => $total));
	
}

 ?>
