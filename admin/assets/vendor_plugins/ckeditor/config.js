/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	config.filebrowserBrowseUrl = 'http://localhost/redline/admin/assets/vendor_plugins/kcfinder/browse.php?opener=ckeditor&type=files';
	config.filebrowserImageBrowseUrl = 'http://localhost/redline/admin/assets/vendor_plugins/kcfinder/browse.php?opener=ckeditor&type=images';
	config.filebrowserFlashBrowseUrl = 'http://localhost/redline/admin/assets/vendor_plugins/kcfinder/browse.php?opener=ckeditor&type=flash';
	config.filebrowserUploadUrl = 'http://localhost/redline/admin/assets/vendor_plugins/kcfinder/upload.php?opener=ckeditor&type=files';
	config.filebrowserImageUploadUrl = 'http://localhost/redline/admin/assets/vendor_plugins/kcfinder/upload.php?opener=ckeditor&type=images';
	config.filebrowserFlashUploadUrl = 'http://localhost/redline/admin/assets/vendor_plugins/kcfinder/upload.php?opener=ckeditor&type=flash';
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.removeButtons = 'Underline,Subscript,Superscript';

	config.extraPlugins = 'ckeditor-gwf-plugin';
    config.font_names = 'GoogleWebFonts;' + config.font_names;
};
