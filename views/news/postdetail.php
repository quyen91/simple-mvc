<?php foreach ($post as $p) { ?>

	<h1><?echo $p['title'];?></h1>
	<h6>Author: <small> <?echo $p['author']; echo "<br>";?></small></h6>
	<h6>Date post: <small> <?echo $p['time']; echo "<br><br><br>";?></small></h6>
	<p><?echo $p['content'];?></p>

	<div class="display_comments">

		<h3> <?echo count($comment)?> Comment</h3>

		<? 	$i=0; foreach ($comment as $c) { ?>
			<?if($i>=2) { ?>
				<a href=""><strong> <u>Xem thêm</u>>>></strong></a>

		<? break; }else{ ?>
		
				<div class="c-left">
				<img src="styles/img/news/download.jpg" alt="">
					<h4 style="color: red"><?echo $c['author']?></h4>
					<p> <small><i><? echo $c['time']?></i></small></p>
				</div>
				<div class="c-right">
					<p><? echo $c['content']?> </p> <hr/>
				</div>
				
			


		<?} $i++ ;} 	?>


	</div>
	<div class="get_comments">
		<h3><small>Leave Comment</small></h3>


		<form class="" action="" method="post">
			<label>Name</label>
			<input type="text" name="name" value=""> <br>
			<label> Mail</label>
			<input type="text" name="email" value=""> <br>
			<label> Comment</label>
			<textarea name="comment" rows="2" cols="100"></textarea> <br>
			<input id="but-comment" type="submit"  value="Đăng">
		</form>
	</div>

<? } ?>

<script type="text/javascript">
	$(document).ready(function(){
		$(#but-comment).onclick(function(){
			alert("Cảm ơn bạn đã bình luận");
		});

	});
</script>
