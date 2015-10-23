<script src="ckeditor/ckeditor.js"></script>
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
	<div class="row span12">
		<div class="left-update">Loại sản phẩmL</div>
		<div class="right-update"><input type="number" name="type" value="<?echo $product[0]['type']?>"></div>
	</div>
	<div class="row span12">
		<div class="left-update">Bài đánh giá</div>
		<div class="right-update"><textarea  name="content_" value=""><?echo $product[0]['content']?> </textarea> </div>
	</div>
	<button type="submit"> Hoàn tất</button>

</div>
</form>
<script type="text/javascript">


                     		     var input = CKEDITOR.replace('content_', {
                                filebrowserBrowseUrl: "ckeditor/ckfinder/ckfinder.html",
                                filebrowserImageBrowseUrl: "ckeditor/ckfinder/ckfinder.html?ty­pe=Images",
                                filebrowserFlashBrowseUrl: "ckeditor/ckfinder/ckfinder.html?ty­pe=Flash",
                                filebrowserUploadUrl: "ckeditor/ckfinder/core/connector/p­hp/connector.php?command=QuickUpload&­;type=Files",
                                filebrowserImageUploadUrl: "ckeditor/ckfinder/core/connector/p­hp/connector.php?command=QuickUpload&­;type=Images",
                                filebrowserFlashUploadUrl: "ckeditor/ckfinder/core/connector/p­hp/connector.php?command=QuickUpload&­;type=Flash",
                                width: '100%',
                                height: '300px',
                                uiColor: '#535656',
                                language: 'vi',
                                toolbar: [
                                    ['Undo', 'Redo', 'Find', 'Replace'],
                                    ['Form', 'Checkbox', 'Radio'],
                                    ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript'],
                                    ['Image', 'Table', 'HorizontalRule', 'SpecialChar'],
                                    ['RemoveFormat', 'NumberedList', 'BulletedList'],
                                    ['Outdent', 'Indent'],
                                    ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
                                    ['Link', 'Unlink'],
                                    ['Styles', 'Format', 'Font', 'FontSize', 'ShowBlocks'],
                                    ['TextColor', 'BGColor'],
                                    ['Source']
                                ]
 });

document.getElementById('content_').text = input.getData();

</script>
