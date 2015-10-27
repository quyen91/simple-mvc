<?php
function admin_products(){
	//check isAdmin
	if(isAdmin()){
		//xay ra neu co hanh dong tu form xoa
		if(isPostRequest()){
			$id= $_POST['id'];

			admin_deleteProduct($id);
		}
		$data = array();
		$data['product'] = model('products')->get_product();
		$data['template_file'] = 'products/admin_sanpham.php';
		render('layout.php', $data);
		
	}else {
		$data['template_file'] = 'user/error.php';
		render('layout.php', $data);
	}
}

function admin_updateProduct(){
	
	if(isAdmin()){
		$id = $_GET['id'];
		if(isPostRequest()){
			$edit = array();
			$edit['id'] = $_POST['id'];
			$edit['name_product'] = $_POST['name'];
			$edit['price'] = $_POST['price'];
			$edit['type'] = $_POST['type'];
			$edit['description'] = $_POST['description'];
			$edit['content'] = $_POST['content_'];
		//img upload
			if($_FILES['image']['name']==NULL){
				$edit['image'] = $_POST['url-img'];

			}else{
				$edit['image'] = "styles/img/product/".$_FILES['image']['name'];
			$path = 'styles/img/product/'.$_FILES['image']['name']; // Đường dẫn chưa file upload
			move_uploaded_file($_FILES['image']['tmp_name'], $path);
		}
		//update vao co so du lieu
		$where = "`id`=$id";
		$t = db_update('products',$edit,$where);
		redirect('index.php?c=admin&m=products');
	}
	$data = array();
	$data['product'] = model('products')->get_product_byid($id);
	$data['template_file'] = 'products/update.php';
	render('layout.php', $data);

}

}

function admin_addproduct(){
	if(isAdmin()){
		if(isPostRequest()){
			$edit = array();
			$edit['id'] = $_POST['id'];
			$edit['name_product'] = $_POST['name'];
			$edit['price'] = $_POST['price'];
			$edit['type'] = $_POST['type'];
			$edit['description'] = $_POST['description'];
			$edit['content'] = $_POST['content_'];

			$edit['image'] = "styles/img/product/".$_FILES['image']['name'];
		$path = 'styles/img/product/'.$_FILES['image']['name']; // Đường dẫn chưa file upload
		move_uploaded_file($_FILES['image']['tmp_name'], $path);

		db_insert('products',$edit);
		redirect('index.php?c=admin&m=products');
	}
	$data['template_file'] = 'products/addNewProduct.php';
	render('layout.php', $data);
}

}

function admin_deleteProduct($id){

	if(isAdmin()){
		$where = "`id`=$id";
		db_delete('products',$where);
		redirect('index.php?c=admin&m=products');
	}
}

function admin_news(){

	//check isAdmin
	if(isAdmin()){
		if(isPostRequest()){
			$id= $_POST['id'];
			admin_deleteNews($id);
		}
		$data = array();
		$data = array();
		$data['news'] = model('news')->get_post();
		$data['template_file'] = 'news/admin_news.php';
		render('layout.php', $data);
	}else{
		$data['template_file'] = 'user/error.php';
		render('layout.php', $data);

	}

}

function admin_deleteNews($id){
	if(isAdmin()){
		$id = $_POST['id'];
		$where = "`ID`=$id";
		db_delete('news',$where);
		redirect('index.php?c=admin&m=news');
	}

}

function admin_updateNews(){

	if(isAdmin()){
		$id = $_GET['id'];
		if(isPostRequest()){

			$edit = array();
			$edit['ID'] = $_POST['ID'];
			$edit['title'] = $_POST['title'];
			$edit['author'] = $_POST['author'];
			$edit['content'] = $_POST['content_'];
			$edit['time'] = date("Y-m-d H:i:s");
			$edit['slogan'] = $_POST['slogan'];
			$edit['tag'] = $_POST['tag'];
			//xoa bang post_tag where id=idpost
			$temp_ = $_POST['ID'];
			$where_ = "`post_id`=$temp_";
			
			//goi ham xu li tag
			$t = model('news')->add_tag($_POST['ID'],$_POST['tag']);

			//upload image
			if($_FILES['image']['name']==NULL){
				$edit['figimage'] = $_POST['img-url'];
			}else{
			$path = 'styles/img/news/'.$_FILES['image']['name']; // Đường dẫn chưa file upload
			move_uploaded_file($_FILES['image']['tmp_name'], $path);
			$edit['figimage'] = "styles/img/news/".$_FILES['image']['name'];
		}
		
		//update vao co so du lieu
		$where = "`ID`= $id";
		//var_dump($where);die();
		$t = db_update('news',$edit,$where);
		redirect('index.php?c=news&m=mainpage');
	}

	$data['news'] = model('news')->get_detail($id);
	$data['template_file'] = 'news/update.php';
	render('layout.php', $data);
}	
}
function admin_addnews(){
	
	if(isAdmin()){
		if(isPostRequest()){
			$edit = array();
			$edit['ID'] = $_POST['ID'];
			$edit['title'] = $_POST['title'];
			$edit['author'] = $_POST['author'];
			$edit['content'] = $_POST['content_'];
			$edit['time'] = date('yy-mm-dd h:i:s');
			$edit['slogan'] = $_POST['slogan'];
			$edit['tag'] = $_POST['tag'];

		//goi ham xu li tag
			$t = model('news')->add_tag($_POST['ID'],$_POST['tag']);
		//upload image

			$path = 'styles/img/news/'.$_FILES['image']['name']; // Đường dẫn chưa file upload
			move_uploaded_file($_FILES['image']['tmp_name'], $path);
			$edit['figimage'] = "styles/img/news/".$_FILES['image']['name'];
			db_insert('news',$edit);
			redirect('index.php?c=news&m=mainpage');
		}


		$data['template_file'] = 'news/addNews.php';
		render('layout.php', $data);
	}

}
function admin_checkoutView(){
	if(isAdmin()){
		$data['checkout'] = model('checkout')->get_bill();
		$data['template_file'] = 'products/view_checkout.php';
		render('layout.php', $data);
	}
}
function admin_checkout_add(){
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