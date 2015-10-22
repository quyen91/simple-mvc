<h1>Hóa đơn</h1>
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
    <td><?echo $cart[$i][0]['sl']?> </td>
   <td><?echo $cart[$i][0]['price'];?> <u>VND</u></td>
 </tr>


<? $sum_money += ($cart[$i][0]['sl']*$cart[$i][0]['price']);}?>
<tr>
<td>Tổng tiền</td>
<td colspan="3" rowspan="" headers="">
<?
 echo $sum_money. "VND"

?>
</td>
<td> <a href="index.php?c=cart&m=view">Quay lại</a>
</td>
</tr>
</table>
<!--tao form cho nguoi dung nhap vao thong tin  -->
<br>
<br>
<h4>Nhập thông tin của bạn</h4>
<div class="form-checkout span12">
  <form class="" action="" method="post">
<div class="form-group"> <p class="span3">Tên:</p> <input class="span6" type="text" name="name_customer" value=""></div>
<div class="form-group"> <p class="span3">Email:</p> <input class="span6" type="email" name="email" value=""></div>
<div class="form-group"><p class="span3">Số điện thoại:</p> <input class="span6" type="number" name="phone" value=""></div>
<div class="form-group"><p class="span3">Số tài khoản:</p>  <input class="span6" type="number" name="bank" value=""></div>

  <input class="btn2" type="submit" name="submit" value="Hoàn tất"/>
</form>
</div>

