<?php

		$id = $_POST['id'];
		$where = "`id`=$id";
		db_delete('products',$where);
		redirect('index.php?c=products&m=mainpage');


 ?>
