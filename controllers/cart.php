<?php
function cart_view(){
	$data['cart'] = model('products')->get_product_session();
	$data['template_file'] = 'products/cart_view.php';
	  render('layout.php', $data);
}
function cart_add(){
	$id = $_GET['id'];
	//$price =$_GET['price'];
	if(isset($_SESSION['cart'][$id])){
	
		$_SESSION['cart'][$id]['qty'] ++;
		//$_SESSION['cart'][$id]['price'] = $price;
	}
	else{
		$_SESSION['cart'][$id]['qty'] = 1;
		//$_SESSION['cart'][$id]['price'] = $price;

	}
	redirect('index.php?c=products&m=viewAlltype');

}
function cart_deleteAll(){
	unset($_SESSION['cart']);
	redirect('index.php?c=cart&m=view');
}
function cart_deleteOne(){
	$id=$_GET['id'];

	foreach ($_SESSION['cart'] as $pro => $sl) {
		if($pro==$id) {
			unset($_SESSION['cart'][$id]);
		}
	}
	redirect('index.php?c=cart&m=view');
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
