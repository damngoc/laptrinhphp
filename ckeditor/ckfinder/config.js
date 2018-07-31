/*
Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
For licensing, see license.txt or http://cksource.com/ckfinder/license
*/

CKFinder.customConfig = function( config )
{
	// Define changes to default configuration here.
	// For the list of available options, check:
	// http://docs.cksource.com/ckfinder_2.x_api/symbols/CKFinder.config.html

	// Sample configuration options:
	// config.uiColor = '#BDE31E';
	  config.language = 'vn';
	// config.removePlugins = 'basket';


$config['authentication'] = function () {
    return true;
};



// CKEDITOR.editorConfig = function( config ) {
// 	// Define changes to default configuration here. For example:
// 	// config.language = 'fr';
// 	// config.uiColor = '#AADC6E';
//    config.filebrowserBrowseUrl = '/ckfinder/ckfinder.html';
//    config.filebrowserImageBrowseUrl = '/ckfinder/ckfinder.html?Type=Images';
	
// };

CKEDITOR.editorConfig = function( config ) {
		config.filebrowserBrowseUrl = './ckeditor/ckfinder/ckfinder.html';
		config.filebrowserImageBrowseUrl = './ckeditor/ckfinder/ckfinder.html?type=Images';
		config.filebrowserFlashBrowseUrl = './ckeditor/ckfinder/ckfinder.html?type=Flash';
		config.filebrowserUploadUrl = './ckeditor/ckfinder/core/connector/php/connector. php?command=QuickUpload&type=Files';
		config.filebrowserImageUploadUrl = './ckeditor/ckfinder/core/connector/php/connector. php?command=QuickUpload&type=Images';
		config.filebrowserFlashUploadUrl = './ckeditor/ckfinder/core/connector/php/connector. php?command=QuickUpload&type=Flash';
		};


};
