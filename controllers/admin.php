<?php
function admin_products(){
	//xay ra neu co hanh dong tu form xoa
	if(isPostRequest()){
		$id= $_POST['id'];

		admin_deleteProduct($id);
	}

	//check isAdmin
	if(isAdmin()){
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
		//var_dump($where);die();
		$t = db_update('products',$edit,$where);
		redirect('index.php?c=products&m=mainpage');



	}


	$data = array();
	$data['product'] = model('products')->get_product_byid($id);
	$data['template_file'] = 'products/update.php';
	render('layout.php', $data);
}
function admin_addproduct(){
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
			redirect('index.php?c=products&m=mainpage');

		}

		$data['template_file'] = 'products/addNewProduct.php';
		render('layout.php', $data);

	}


	function admin_deleteProduct($id){

	//$id = $_GET['id'];
		$where = "`id`=$id";
		db_delete('products',$where);
		redirect('index.php?c=products&m=mainpage');

	}
	function admin_news(){

	//check isAdmin
		if(isAdmin()){

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
	function admin_deleteNews(){
		$id = $_GET['id'];
		$where = "`ID`=$id";
		db_delete('news',$where);

		redirect('index.php?c=news&m=mainpage');
	}
	function admin_updateNews(){
		$id = $_GET['id'];
		if(isPostRequest()){

			$edit = array();
			$edit['ID'] = $_POST['ID'];
			$edit['title'] = $_POST['title'];
			$edit['author'] = $_POST['author'];
			$edit['content'] = $_POST['content_'];
			$edit['time'] = $_POST['time'];
			$edit['slogan'] = $_POST['slogan'];

		//upload image
			if($_FILES['image']['name']==NULL){
				$edit['figimage'] = $_POST['img-url'];
			}else{
			$path = 'styles/img/news/'.$_FILES['image']['name']; // Đường dẫn chưa file upload
			move_uploaded_file($_FILES['image']['tmp_name'], $path);
			$edit['figimage'] = "styles/img/news/".$_FILES['image']['name'];
		}
		//var_dump($edit);die();
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
function admin_addnews(){
	if(isPostRequest()){
		$edit = array();
		$edit['ID'] = $_POST['ID'];
		$edit['title'] = $_POST['title'];
		$edit['author'] = $_POST['author'];
		$edit['content'] = $_POST['content_'];
		$edit['time'] = $_POST['time'];
		$edit['slogan'] = $_POST['slogan'];

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


	?>