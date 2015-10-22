<?php
function user_login(){
	if(!isLogged()){
		$data = array();
		if(isPostRequest()){

			$check = model('user')->checkUser($_POST['user_name']);
			if(count($check)>0){
				if($check[0]['password'] == md5($_POST['password'])){
					$_SESSION['logged']['name'] = $check[0]['name'];
					$_SESSION['logged']['user_name'] = $check[0]['user_name'];
					redirect('index.php');
				}
			}

		}
	    $data['template_file'] = 'user/login.php';
	    render('layout.php', $data);
	} else
		redirect('index.php');

}

function user_logout(){
	// session_destroy('logged');
	unset($_SESSION['logged']);
	redirect('index.php');
}

function user_signup(){

	if(isPostRequest()){

		$arr_user = array(
			'user_name' => $_POST['user_name'],
			'name' => $_POST['name'],
			'password' => md5($_POST['password'])
		);
		model('user')->signup($arr_user);
		redirect('index.php');
	}
	$data['template_file'] = 'user/signup.php';
    render('layout.php', $data);
}

 ?>
