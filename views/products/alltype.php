<div class="product">
	<div class="row span12 banner">
		<img src="styles/img/product/banner_product.jpg" alt="">
	</div>

	<h3>Danh mục sản phẩm</h3> <hr/>
	<div class="main-product">
		<div class="row span12">
			<?  foreach ($product as $p) {?>

			<div class="item-product span4">
				<div class="feture-item">
					<img src="<? echo $p['img']?>" alt="">
				</div>
				<div class="desc">
					<div class="left-desc">
						<h4><a href="index.php?c=products&m=pagination&type=<?echo $p['id']?>&name=<? echo $p['name']?>&page=1"> <? echo $p['name']?></a> </h4>
						
					</div>
					<div class="right-desc">
						<a href="index.php?c=products&m=pagination&type=<?echo $p['id']?>&name=<? echo $p['name']?>&page=1"><button class="btn2" type="submit"> Xem chi tiet</button></a>
					</div>
				</div>
			</div>
			<?}?>
		</div>
	</div>

</div>

<script type="text/javascript">
	$('.main-nav li').removeClass('active');
	$('.main-nav li#products').addClass('active');
</script>
