/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	
	 config.filebrowserBrowseUrl = '../kcfinder/browse.php?opener=ckeditor?type=Files';
	 config.filebrowserUploadUrl = '../../dist/php/upload_img.php?type=Files';
										    
										    
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
	 
	   { name: 'insert' },
	     { name: 'others' },
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'links', groups: [ 'links' ] },
		
		{ name: 'forms', groups: [ 'forms' ] },
		{ name: 'tools' },
		 { name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
	 
		
		// '/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'styles' },
		{ name: 'colors' }
		//{ name: 'about' }
		
		
		/*
		
		// toolboxgenerator : http://ckeditor.com/tmp/4.5.0-beta/ckeditor/samples/toolbarconfigurator/index.html#basic
		
	   { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'about', groups: [ 'about' ] }
		
		*/
	];

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';
	
	   config.extraPlugins = 'widgettemplatemenu';
	   config.extraPlugins = 'widgetbootstrap';
      config.extraPlugins = 'youtube';
      config.extraPlugins = 'videodetector';
      config.extraPlugins = 'lineutils';
      config.extraPlugins = 'widgetcommon';
      config.extraPlugins = 'oembed';
      config.extraPlugins = 'leaflet';
      config.extraPlugins = 'html5audio';
      config.extraPlugins = 'chart';
     
      
     
	  //config.toolbar = [{ name: 'others', items: ['Image', 'Youtube']}];
	  
};
