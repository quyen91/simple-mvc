<?php
function checkout_view(){

		$data['checkout'] = model('checkout')->get_bill();
		$data['template_file'] = 'products/view_checkout.php';
		render('layout.php', $data);
}
function checkout_addnew(){
	
}

 ?>
