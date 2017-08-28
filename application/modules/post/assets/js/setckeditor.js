
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
var editor = CKEDITOR.replace( 'editor1',
 {
 	filebrowserBrowseUrl : '../../../../assets/ckfinder/ckfinder.html',
 	filebrowserImageBrowseUrl : '../../../../assets/ckfinder/ckfinder.html?type=Images',
 	filebrowserFlashBrowseUrl : '../../../../assets/ckfinder/ckfinder.html?type=Flash',
 	filebrowserUploadUrl : '../../../../assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
 	filebrowserImageUploadUrl : '../../../../assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
 	filebrowserFlashUploadUrl : '../../../../assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
	height: '350px',
	toolbar: [
		{ name: 'document', items: [ 'Source', '-', '-', 'Templates' ] },	// Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
		[ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],	
		{ name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },																				
		{ name: 'basicstyles', items: [ 'Bold', 'Italic' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
	{ name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
		{ name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
	{ name: 'colors', items: [ 'TextColor', 'BGColor' ] },
	{ name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
		
	]
	
 } 
 );
 
 var editor2 = CKEDITOR.replace( 'editor2',
 {
 	filebrowserBrowseUrl : '../../../../assets/ckfinder/ckfinder.html',
 	filebrowserImageBrowseUrl : '../../../../../assets/ckfinder/ckfinder.html?type=Images',
 	filebrowserFlashBrowseUrl : '../../../../assets/ckfinder/ckfinder.html?type=Flash',
 	filebrowserUploadUrl : '../../../../assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
 	filebrowserImageUploadUrl : '../../../../assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
 	filebrowserFlashUploadUrl : '../../../../assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
	height: '350px',
	toolbar: [
		{ name: 'document', items: [ 'Source', '-', '-', 'Templates' ] },	// Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
		[ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],	
		{ name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },																				
		{ name: 'basicstyles', items: [ 'Bold', 'Italic' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
	{ name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
		{ name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
	{ name: 'colors', items: [ 'TextColor', 'BGColor' ] },
	{ name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
		
	]
 } 
 );


	// Just call CKFinder.setupCKEditor and pass the CKEditor instance as the first argument.
	// The second parameter (optional), is the path for the CKFinder installation (default = "/ckfinder/").
	CKFinder.setupCKEditor( editor, '../' ) ;
		CKFinder.setupCKEditor( editor2, '../' ) ;
	// It is also possible to pass an object with selected CKFinder properties as a second argument.
	// CKFinder.setupCKEditor( editor, { basePath : '../', skin : 'v1' } ) ;
}
	   
