<h3>Menu Chính</h3>
<ul class="nav nav-tabs nav-stacked">

	<?php
	if(!isLogged()){
		?>
		<li><a href="index.php?c=user&m=login">Login</a></li>
		<li><a href="index.php?c=user&m=signup">Signup</a></li>
		<?php
	}else{ 
		?>
		<li><a href="index.php?c=admin&m=products">Quan li san pham</a>
		</li>
		<li><a href="index.php?c=admin&m=news">Quan li bai dang</a></li>
		<li><a href="index.php?c=checkout&m=view">Xem hóa đơn</a></li>
		<li><a href="index.php?c=user&m=logout">Logout</a></li>
		
	
		
	<?}?>

</ul>
