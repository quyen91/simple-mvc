<?php foreach ($post as $p) { ?>

	<h1><?echo $p['title'];?></h1>
	<h6>Author: <small> <?echo $p['author']; echo "<br>";?></small></h6>
	<h6>Date post: <small> <?echo $p['time'];?></small></h6>
	<h6>Tag: 
	    <? foreach ($tag as $t) {?>
	    	<a class="tag" href="index.php?c=news&m=getPostByTag&id=<?echo $t['id']?>"><?echo $t['name']; echo '&nbsp';?></a>
	   <? }?>
		
	</h6>
	<br><br><br>
	<p><?echo $p['content'];?></p>


	<div class="get_comments">
		<h3><small>Leave Comment</small></h3>


		<form id="cm" action="" method="post">
		    <input type="hidden" name="id" class='hidden-id' value="<?echo $post[0]['ID']?>">
			<label>Name</label>
			<input type="text" name="name" value=""> <br>
			<label> Mail</label>
			<input type="text" name="email" value=""> <br>
			<label> Comment</label>
			<textarea name="comment" rows="2" cols="100"></textarea> <br>
			<!-- <input id="but-comment" type="submit"  value="Đăng"> -->
			<button id ="submit" >Đăng</button>
		</form>
	</div>


	<h3 ><span class="qty-cm"><?echo count($comment)?> </span>Comment</h3> <hr/>
	<div class="display_comments">
	
	<? foreach ($comment as $c) {?>
	<div class="item-cm">
		<img src="styles/img/news/download.jpg" alt="">
		<h4 style="color: red" class="author-cm"> <?echo $c['author']?> </h4>
		<p class="content-cm"><?echo $c['content']?>  </p>
		<p><i><?echo $c['time']?></i> </p> <hr/>
	</div>
		
	<?}?>
	
	</div>
	
<? } ?>

<script>
  
  		$("#submit").click(function(e){

  			var t = $('#cm').serialize();
  			var h = t + "&id="+ <?echo $post[0]['ID']?>; // or + $('.hidden-id').val();
  			
  			$.ajax({
				type: 'post',
				url: 'index.php?c=news&m=test',
				dataType: 'json',
				data: h,
				
				success: function(data){
					
					var bien = '<div class="item-cm"><img src="styles/img/news/download.jpg" alt="">' + data['name']
					+ data['comment'] + data['time'] + '</div>';
					$('.display_comments').prepend(bien);

					$('.qty-cm').html(data['qty_comment'] + " ");


				},
				error: function() {
					alert('e');
				},
			
		});
  			
				e.preventDefault();
				$("#cm")[0].reset();


  		});




</script>