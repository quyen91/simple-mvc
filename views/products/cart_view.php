<h1>Giỏ hàng của bạn</h1>

 <table border="1" style="width:60%" id='cart-table'>
  <tr>
    <td>ID</td>
    <td>Tên</td>
    <td>Số lượng</td>
    <td> Giá</td>
    <td> </td>
  </tr>
  <? $sum_money=0; for($i=0;$i<count($cart);$i++){ ?>
  	<tr>
    <td><?echo $cart[$i][0]['id'];?></td>
    <td><?echo $cart[$i][0]['name_product'];?></td>
     <td><input type="number" onkeyup="update_cart(this, <?echo $cart[$i][0]['id'];?>);" name="quality" value="<?echo abs($cart[$i][0]['sl'])?>"/> 
     <br><span class="qty_"><?echo abs($cart[$i][0]['sl']);?></span></td>
    <td><?echo $cart[$i][0]['price'];?> <u>VND</u></td>
    <td><a href="#" onclick="delete_oneCart(this,<?echo $cart[$i][0]['id'];?>)">Xóa</a>
    </td>
  </tr>


<? $sum_money += ($cart[$i][0]['sl']*$cart[$i][0]['price']);}?>
<tr>
<td>Tổng tiền</td>
<td colspan="3" rowspan="" headers="">
<span class="total"><?echo $sum_money. " VND"; $_SESSION['total']=$sum_money?></span>
</td>
<td> <a href="#" onclick="delete_AllCart(this)">Xóa tất cả</a>
</td>
</tr>

</table>
<br>
<p><form action="" method="post" class="form_update"><button type="submit" class="btn2"> Cập nhật</button></form></p>
<p><a href="index.php?c=products&m=viewAlltype"><button type="button" class="btn2">Tiếp tục mua</button></a> </p>
<p><a href="index.php?c=admin&m=checkout_add"><button type="button" class="btn2" id="thanhtoan"> Thanh toán</button></a></p>
<script>
	function update_cart(o, id) {
		$('#thanhtoan').attr('disabled', 'disabled');
		var qty = $(o).val();
		$.ajax({
			type: 'post',
			url: 'index.php?c=cart&m=update',
			dataType: 'json',
			data: {
				qty: qty,
				id: id
			},
			success: function(r){
				$('.total').html(r.total + ' VND');
				$(o).parent().children('span.qty_').html(r.qty);
			},
			error: function() {
				alert('e');
			},
			complete: function(){
				$('#thanhtoan').removeAttr('disabled');
			}
		});
	}
	function delete_oneCart(o,id) {
		
		$.ajax(
		{
			type: 'post',
			url: 'index.php?c=cart&m=deleteOne',
			dataType: 'json',
			data:{
				id: id
			},
			success: function(r){
				alert('Đã xóa');
				$(o).closest('tr').remove();
				$('#cart_total').html(' (' +r.cart_total+ ')');
				 document.getElementById("tableId").innerHTML = "";

			},
			error: function(){
				alert('e');
			},

		}); //end ajax


	}
	function delete_AllCart(o) {
		
		$.ajax(
		{
			type: 'post',
			url: 'index.php?c=cart&m=deleteAll',
			dataType: 'text',

			success: function(r){
				alert('Xóa giỏ hàng');
				var html = "";
				html+= '<tr>';
					html+= '<td> ID </td><td> Tên </td><td>Số lượng </td><td> Giá </td> <td></td>';
				html += '</tr>';
				html+= '<tr>';
					html+= '<td> Tổng tiền</td> <td colspan="3"> 0 VND</td> <td width="126px"> </td>' ;
				html += '</tr>';
				$('#cart-table').html(html);
				// document.getElementById("cart-table").innerHTML = "";
				 $('#cart_total').html(' (0' + ')');
				
			},
			error: function(){
				alert('e');
			},

		}); //end ajax
	}
</script>