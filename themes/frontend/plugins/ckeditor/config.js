/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	
	config.allowedContent=true;
  config.extraAllowedContent = 'iframe[*]';
  config.toolbar = 'Full';
  config.extraPlugins = 'justify,iframe,colordialog,colorbutton,font';
  config.colorButton_colors= 'CF5D4E,454545,FFF,CCC,DDD,CCEAEE,66AB16'

config.toolbar_Full =
[
    { name: 'document', items: ['Source'] },
    { name: 'clipboard', items: ['PasteFromWord'] },
    
    { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat'] },
    { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
    },
    { name: 'links', items: ['Link', 'Unlink'] },
    { name: 'insert', items: ['Image', 'Table', 'SpecialChar','Iframe'] },
    { name: 'tools', items: ['Maximize'] },
    { name: 'colors', items: ['TextColor', 'BGColor'] },
    { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize'] },
    
];

};


CKEDITOR.on('dialogDefinition', function( ev )
   {
      // Take the dialog name and its definition from the event
      // data.
      var dialogName = ev.data.name;
      var dialogDefinition = ev.data.definition;

      // Check if the definition is from the dialog we're
      // interested on (the Link and Image dialog).
      if (dialogName == 'image' )
      {
      	dialogDefinition.removeContents('Link');
      	dialogDefinition.removeContents( 'Upload' );
      }



      if ( dialogName == 'link')
      {
         // remove Upload tab
         
         dialogDefinition.removeContents('upload');
      
         	var targetTab = dialogDefinition.getContents('target');
        var targetField = targetTab.get('linkTargetType');
        targetField['default'] = '_blank';

      }






   });



// This is a check for the CKEditor class. If not defined, the paths must be checked.
if ( typeof CKEDITOR == 'undefined' )
{
	document.write(
		'<strong><span style="color: #ff0000">Error</span>: CKEditor not found</strong>.' +
		'This sample assumes that CKEditor (not included with CKFinder) is installed in' +
		'the "/ckeditor/" path. If you have it installed in a different place, just edit' +
		'this file, changing the wrong paths in the &lt;head&gt; (line 5) and the "BasePath"' +
		'value (line 32).' ) ;
}
else
{

var site_url = $("#site_url").attr("content");
var editor = CKEDITOR.instances.form_ckeditor;
if (editor) {

        editor.destroy(true); 
        
    }   

CKEDITOR.replace('form_ckeditor',
 {
	height: '350px',
	
	
 } 
 );


}
