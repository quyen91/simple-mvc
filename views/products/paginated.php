
<div class="product">
	<div class="row span12 banner">
		<img src="styles/img/product/banner_product.jpg" alt="">
	</div>

	<h3>Các sản phẩm thuộc danh mục <?echo $_GET['name']?></h3> <hr></hr>
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
						<a href="index.php?c=cart&m=add&id=<?echo $p['id']?>"><button class="btn2" type="submit"> Cho vào giỏ</button></a>
					</div>
				</div>
			</div>
			<?}?>
		</div>
	</div>
</div>

<?php 


 ?>
<!-- code phan trang o day -->
<div class="pagination">
	<ul>
		<?
		$t = ceil(count($product)/2);
		$type_ = $product[0]['type'];
		for($i=1;$i<=$t;$i++){
			echo "<li><a href='index.php?c=products&m=pagination&id=$i&type=$type_'>$i</a></li>";
		}


		?>
	
	</ul>
</div>


<script type="text/javascript">
	$('.main-nav li').removeClass('active');
	$('.main-nav li#products').addClass('active');
</script>
