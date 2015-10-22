<h1><?echo $product[0]['name_product']?></h1>
<div class="product-detail row span12">
	<div class="product-img span6">
		<img src="<?echo $product[0]['image']?>" alt="">
	</div>
	<div class="product-desc span6">
	<h3>Thông tin chi tiết</h3>
	<h5>Mô tả : </h5> <p> <?echo $product[0]['description'] ?></p>
	<h5>Giá: </h5> <p><?echo $product[0]['price']?></p>
	<h5>Tình trạng: </h5> <p><? if($product[0]['status']==1) echo "Còn hàng"; else echo "Hết hàng"; ?></p>
	<p><a href="index.php?c=cart&m=add&id=<?echo $product[0]['id']?>&price=<?echo $product[0]['price']?>"><button class="btn2" type="submit"> Cho vào giỏ</button></a></p>
	</div>


	
</div>
