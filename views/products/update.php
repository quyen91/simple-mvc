
<form action="" method="post" enctype="multipart/form-data">
	


<div class="main-update contain span12">
	<div class="row span12">
		<div class="left-update">ID</div>
		<div class="right-update"><input type="text" name="id" value="<?echo $product[0]['id']?>"></div>
	</div>
	<div class="row span12">
		<div class="left-update">Tên</div>
		<div class="right-update"><input type="text" name="name" value="<?echo $product[0]['name_product']?>"></div>
	</div>
	<div class="row span12">
		<div class="left-update">Giá</div>
		<div class="right-update"><input type="text" name="price" value="<?echo $product[0]['price']?>"></div>
	</div>
		<div class="row span12">
		<div class="left-update">Ảnh URL</div>
		<div class="right-update"><input type="text" name="url-img" value="<?echo $product[0]['image']?>"></div>
	</div>
	<div class="row span12">
		<div class="left-update">Upload Ảnh</div>
		<div class="right-update"><input type="file" name="image"></div>
	</div>
	<div class="row span12">
		<div class="left-update">Mô tả</div>
		<div class="right-update"><textarea  name="description" value=""><?echo $product[0]['description']?> </textarea> </div>
	</div>
	<button type="submit"> Hoàn tất</button>

</div>
</form>