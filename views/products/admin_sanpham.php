<a href="index.php?c=admin&m=addproduct"><button class="btn2" type="buttom">Thêm sản phẩm</button></a>
<table border="solid 1px">
	<tr>
		<td>ID</td>
		<td colspan="" rowspan="" headers="">Tên</td>
		<td colspan="" rowspan="" headers="">Giá</td>
		<td colspan="" rowspan="" headers="">Số lượng</td>
		<td colspan="" rowspan="" headers="">Ảnh</td>
		<td colspan="" rowspan="" headers="">Mô tả</td>
	</tr>
	<?foreach ($product as $p) { ?>
	<tr>
	   <td><?echo $p['id']?></td>
	   <td><?echo $p['name_product']?></td>
	   <td><?echo $p['price']?></td>
	   <td><?echo $p['status']?></td>
	   <td><img width="300" height="200" src="<?echo $p['image']?>" alt=""></td>
	   <td><?echo $p['description']?></td>
	   <td><a href="index.php?c=admin&m=deleteProduct&id=<?echo $p['id']?>">Xóa</a><br> <a href="index.php?c=admin&m=updateProduct&id=<?echo $p['id']?>"> Sửa</a></td>
	</tr>
	<?}?>


</table>
