/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */



CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.filebrowserBrowseUrl = 'http://abc.com/ckfinder/ckfinder.html';
 
config.filebrowserImageBrowseUrl = 'http://abc.com/ckfinder/ckfinder.html?type=Images';
 
config.filebrowserFlashBrowseUrl = 'http://abc.com/ckfinder/ckfinder.html?type=Flash';
 
config.filebrowserUploadUrl = 'http://abc.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
 
config.filebrowserImageUploadUrl = 'http://abc.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
 
config.filebrowserFlashUploadUrl = 'http://abc.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';


};

