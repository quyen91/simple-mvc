<h1>Giỏ hàng của bạn</h1>
<form action="" method="post" >
 

 <table border="1" style="width:60%">
  <tr>
    <td>ID</td>
    <td>Tên</td>
    <td>Số lượng</td>
    <td> Giá</td>
  </tr>
  <? $sum_money=0; for($i=0;$i<count($cart);$i++){ ?>
  	<tr>
    <td><?echo $cart[$i][0]['id'];?></td>
    <td><?echo $cart[$i][0]['name_product'];?></td>
     <td><input type="number" name="quality" value="<?echo $cart[$i][0]['sl']?>" min="0" max="10"/> <br><?echo $cart[$i][0]['sl'];?></td>
    <td><?echo $cart[$i][0]['price'];?> <u>VND</u></td>
    <td><a href="index.php?c=cart&m=deleteOne&id=<?echo $cart[$i][0]['id']?>">Xóa</a>
    </td>
  </tr>


<? $sum_money += ($cart[$i][0]['sl']*$cart[$i][0]['price']);}?>
<tr>
<td>Tổng tiền</td>
<td colspan="3" rowspan="" headers="">
<?
	echo $sum_money. "VND"

?>
</td>
<td> <a href="index.php?c=cart&m=deleteAll">Xóa tất cả</a>
</td>
</tr>

</table>
<br>
<p><input type="submit" value="Cập nhật"/></p>
</form>
