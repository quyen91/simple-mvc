<?php
 function news_mainpage(){
  $data = array();
  $data['post'] = model('news')->get_post();
  $data['alltag'] = model('news')->viewAlltag();
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
	 $data['alltag'] = model('news')->viewAlltag();
	 //lay ra mang tag của bài viết vơi id -> 
	 $data['tag'] = model('news')->getPostTagName($id);
	 //var_dump($data['tag']);die();
	 $data['comment'] = model('News')->get_comments($id); // display comment
 	 $data['post'] = model('news')->get_detail($id);
	 $data['template_file'] = 'news/postdetail.php';
	 render('layout.php', $data);



}
function news_getPostByTag(){
	$idTag = $_GET['id'];
	$data = array();
 	$data['post'] = model('news')->getPost_ByTagid($idTag);
 	$data['alltag'] = model('news')->viewAlltag();
  	$data['template_file'] = 'news/mainpage.php';
 	 render('layout.php', $data);


}

 ?>
