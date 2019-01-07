/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
    config.skin='v2';  // có thể đổi thành 1 trong 3 giá trị sau: v2, kama, office2003
    config.enterMode = CKEDITOR.ENTER_BR;
    config.language = nv_sitelang;
    config.toolbar_Full =
    [
    ['Source','-','Save','NewPage','Preview','-','Templates'],
    ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
    ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
    ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
    '/',
    ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
    ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
    ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
    ['BidiLtr', 'BidiRtl' ],
    ['Link','Unlink','Anchor'],
    ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe'],
    '/',
    ['Styles','Format','Font','FontSize'],
    ['TextColor','BGColor'],
    ['Maximize', 'ShowBlocks','-','About']
    ];
    config.filebrowserBrowseUrl = 'http://Spa_ChoMeo/ckfinder/ckfinder.html';
    config.filebrowserImageBrowseUrl = 'http://Spa_ChoMeo/ckfinder/ckfinder.html?type=Images';
    config.filebrowserFlashBrowseUrl = 'http://Spa_ChoMeo/ckfinder/ckfinder.html?type=Flash';
    config.filebrowserUploadUrl = 'http://Spa_ChoMeo/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
    config.filebrowserImageUploadUrl = 'http://Spa_ChoMeo/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
    config.filebrowserFlashUploadUrl = 'http://Spa_ChoMeo/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
