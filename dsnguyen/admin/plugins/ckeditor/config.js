/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	// config.toolbar_TRiGCustom =
    [
        ['Bold','Italic','Underline','-','JustifyLeft','JustifyCenter','-','Blockquote'],
        ['FontSize'],
        ['Undo','Redo'],
        ['Link','Unlink','Image','Table'],
        ['NumberedList', 'BulletedList'],
        ['Source'],
        ['Maximize']
    ];
    config.toolbar = 'TRiGCustom';
    config.forcePasteAsPlainText = true;
    config.forceSimpleAmpersand = true;
    config.resize_enabled = false;
    config.toolbarCanCollapse = false;
    config.scayt_autoStartup = true;
    config.language = 'en';
    config.uiColor = '#76BC49';
    config.width = '97%';
    config.extraPlugins = 'maximize';
    config.allowedContent = true;
    config.extraPlugins = 'videoembed';
};
