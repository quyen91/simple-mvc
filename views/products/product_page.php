    <div class="product">
    <div class="row span12 banner">
		<img src="styles/img/product/banner_product.jpg" alt="">
	</div>

	<h3>Các sản phẩm thuộc danh mục <?echo $_GET['name']?></h3> <hr>
	<div class="main-product">
		<div class="row span12">
			<? foreach ($product as $p) {?>

			
			<div class="item-product span4">
				<div class="feture-item">
					<img src="<? echo $p['image']?>" alt="">
				</div>
				<div class="desc">
					<div class="left-desc">
						<h4><a href="index.php?c=products&m=detail&id=<?echo $p['id']?>"> <? echo $p['name_product']?></a> </h4>
						<h6><u> <? echo $p['price']?> VND</u> </h6>
					</div>
					<div class="right-desc">
						<button class="btn2" onclick="add_to_cart(<?echo $p['id']?>,<?echo $p['price']?>)" > Cho vào giỏ</button>

					</div>
				</div>
			</div>

			<?}?>
		</div>
	</div>
	</div>

<!-- code phan trang o day -->
<div class="pagination">
	<ul>
		<?
		if(count($product)>0){
		$t = ceil(count($product_all)/2);
		$name = $_GET['name']; //ten cua muc san pham
		$type_ = $product_all[0]['type'];
		for($i=1;$i<=$t;$i++){
			echo "<li><a href='index.php?c=products&m=pagination&page=$i&type=$type_&name=$name'>$i</a></li>";
		}
}else echo "Không có sản phẩm thuộc danh mục này";

		?>
	
	</ul>
</div>


<script type="text/javascript">
	$('.main-nav li').removeClass('active');
	$('.main-nav li#products').addClass('active');

	function add_to_cart(id,price){
		
		$.ajax(
		{
			type: 'post',
			url : 'index.php?c=cart&m=add',
			dataType: 'json',
			data:  {
				id: id,
				price: price
			},
			
			success: function(r){
				alert('Đã thêm vào giỏ hàng');
				$('#cart_total').html(' (' +r.cart_total+ ')');
			},
			error: function() {
				alert('e');
				//se co loi neu file 'index.php?c=cart&m=add' này không trả về giá trị
			},

		}
		); //end ajax
	}

	




</script>
