
<script src="ckeditor/ckeditor.js"></script>
<form action="" method="post" enctype="multipart/form-data">



<div class="main-update contain span12">
	<div class="row span12">
		<div class="left-update span4">ID</div>
		<div class="right-update span8"><input type="text" name="ID" value="<?echo $news[0]['ID']?>"></div>
	</div>
	<div class="row span12">
		<div class="left-update span4">Tiêu đề</div>
		<div class="right-update span8"><input type="text" name="title" value="<?echo $news[0]['title']?>"></div>
	</div>
	<div class="row span12">
		<div class="left-update span4">Tác giả</div>
		<div class="right-update span8"><input type="text" name="author" value="<?echo $news[0]['author']?>"></div>
	</div>
	<div class="row span12">
		<div class="left-update span4">Mô tả</div>
		<div class="right-update span8"><input type="text" name="slogan" value="<?echo $news[0]['slogan']?>"></div>
	</div>
	<div class="row span12">
		<div class="left-update span4">Tags</div>
		<div class="right-update span8"><input type="text" name="tag" value="<?echo $news[0]['tag']?>"></div>
	</div>
	<div class="row span12">
		<div class="left-update span4">Nội dung</div>
		<div class="right-update span8"><textarea  name="content_" value=""><?echo $news[0]['content']?></textarea> </div>
	</div>
	<div class="row span12">
		<div class="left-update span4">Feature image</div>
		<div class="right-update span8"><input type="text" name="img-url" value="<?echo $news[0]['figimage']?>"></div>
	</div>
	<div class="row span12">
		<div class="left-update span4">Thay đổi Feature img</div>
		<div class="right-update span8"><input type="file" name="image"></div>
	</div>

	<button type="submit"> Hoàn tất </button>

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
