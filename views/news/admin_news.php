<a href="index.php?c=admin&m=addnews"><button class="btn2" type="button">Post bài</button></a> 
<table border="solid 1px">

	<tr>
		<td colspan="" rowspan="" headers="">ID</td>
		<td colspan="" rowspan="" headers="">Tiêu đè</td>
		<td colspan="" rowspan="" headers="">Mô tả</td>
		<td colspan="" rowspan="" headers="">Thời gian</td>
		<td colspan="" rowspan="" headers="">Feature image</td>
	</tr>
	<?foreach ($news as $p) { ?>
	<tr>
	   <td><?echo $p['ID']?></td>
	   <td><?echo $p['title']?></td>
	  
	   <td><?echo $p['slogan']?></td>
	   <td><?echo $p['time']?></td>
	   <td><img src="<?echo $p['figimage']?>" alt="" height="100" width="150"></td>

		<td> <!-- tao action delete bang form -->
	   <form action="" method="post">
	   		<input type="hidden" name="id" value="<?echo $p['ID']?>">
	   		<button type="submit" onclick='return confirm("Bạn muốn xóa sản phẩm này?");'> Xóa</button></a>
	   </form>
	   	 <!--/ tao action delete bang form -->

	   <a href="index.php?c=admin&m=updateNews&id=<?echo $p['ID']?>"><button>Sửa</button></a>
	   </td>
	</tr>
	<?}?>


</table>
