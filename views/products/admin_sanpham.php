<a href="index.php?c=admin&m=addproduct"><button class="btn2" type="buttom">Thêm sản phẩm</button></a>
<table border="solid 1px">
	<tr>
	
		<td>ID</td>
		<td colspan="" rowspan="" headers="">Tên</td>
		<td colspan="" rowspan="" headers="">Giá</td>
		<td colspan="" rowspan="" headers="">Số lượng</td>
		<td colspan="" rowspan="" headers="">Ảnh</td>
		<td colspan="" rowspan="" headers="">Mô tả</td>
			<td colspan="" rowspan="" headers="">Loại</td>
		<td></td>
	</tr>
	<?foreach ($product as $p) { ?>
	<tr>
	   <td><?echo $p['id']?></td>
	   <td><?echo $p['name_product']?></td>
	   <td><?echo $p['price']?></td>
	   <td><?echo $p['status']?></td>
	   <td><img width="300" height="200" src="<?echo $p['image']?>" alt=""></td>
	   <td><?echo $p['description']?></td>
	   <td><?echo $p['type']?></td>

	   <td>
	   <!-- tao action delete bang form -->
	   <form action="" method="post">
	   		<input type="hidden" name="id" value="<?echo $p['id']?>">
	   		<button type="submit" onclick='return confirm("Bạn muốn xóa sản phẩm này?");'> Xóa</button></a>
	   </form>
		  <!-- tao action delete bang token -->
		  <!--  <? $token = md5(uniqid('author',true)); $_SESSION['token'] = $token;?>
			<form action="controllers/deleteproduct.php" method="post">
				<input type="hidden" name="id" value="<?echo $p['id']?>">
				<input type="hidden" name="token" value="<?echo $token?>">
	   			<button type="submit"  onclick='return confirm("Bạn muốn xóa sản phẩm này?");'> Xóa</button></a>
			</form> -->
			<br>
			<a href="index.php?c=admin&m=updateProduct&id=<?echo $p['id']?>"><button>Sửa</button></a>
	   </td>


	<?}

	?>


</table>
<script type="text/javascript">


</script>
