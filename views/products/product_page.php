
<div class="product">
	<div class="row span12 banner">
		<img src="styles/img/product/banner_product.jpg" alt="">
	</div>

	<h3>Danh mục các sản phẩm</h3> <hr></hr>
	<div class="main-product">
		<div class="row span12">
			<? $i=0; foreach ($product as $p) {?>

			<? if($i<2){

			}?>
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
						<a href="index.php?c=cart&m=add&id=<?echo $p['id']?>&price=<?echo $p['price']?>"><button class="btn2" type="submit"> Cho vào giỏ</button></a>
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
