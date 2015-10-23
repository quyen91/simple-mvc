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
	   <td><a href="index.php?c=admin&m=deleteNews&id=<?echo $p['ID']?>">Xóa</a><br> <a href="index.php?c=admin&m=updateNews&id=<?echo $p['ID']?>"> Sửa</a></td>
	</tr>
	<?}?>


</table>
