/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
config.filebrowserBrowseUrl = 'admin_assets/ckfinder/ckfinder.html';
config.filebrowserImageBrowseUrl = 'admin_assets/ckfinder/ckfinder.html?type=Images';
config.filebrowserFlashBrowseUrl = 'admin_assets/ckfinder/ckfinder.html?type=Flash';
config.filebrowserUploadUrl = 'admin_assets/ckfinder/core/connector/php/connector. php?command=QuickUpload&type=Files';
config.filebrowserImageUploadUrl = 'admin_assets/ckfinder/core/connector/php/connector. php?command=QuickUpload&type=Images';
config.filebrowserFlashUploadUrl = 'admin_assets/ckfinder/core/connector/php/connector. php?command=QuickUpload&type=Flash';

config.enterMode = CKEDITOR.ENTER_BR // pressing the ENTER KEY input <br/>
        config.shiftEnterMode = CKEDITOR.ENTER_P; //pressing the SHIFT + ENTER KEYS input <p>
        config.autoParagraph = false; // stops automatic insertion of <p> on focus
};