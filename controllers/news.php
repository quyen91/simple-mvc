<?php
 function news_mainpage(){
  $data = array();
  $data['post'] = model('news')->get_post();
  $data['template_file'] = 'news/mainpage.php';
  render('layout.php', $data);
}

function news_detailpage(){
 	$data = array();
 	$id = $_GET['id'];


	 if(isPostRequest()){
	 	date_default_timezone_set('Asia/Ho_Chi_Minh');
	 	$date1 = date("Y-m-d H:i:s");

	 	$comment = array(
	 		'id_post' => $id,
	 		'author' => $_POST['name'],
	 		'email' => $_POST['email'],
	 		'content' => $_POST['comment'],
	 		'time' => $date1

	 		);

	 	model('News')->save_comments($comment);

	 }
	 $data['comment'] = model('News')->get_comments($id); // display comment
 	$data['post'] = model('news')->get_detail($id);
	 $data['template_file'] = 'news/postdetail.php';
	 render('layout.php', $data);



}

 ?>
