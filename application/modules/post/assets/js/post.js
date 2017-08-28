$('.post_date').datetimepicker({ dateFormat: 'yy-mm-dd',changeYear:true,changeMonth:true});

$(document).ready(function(){
	     $('#datatable').dataTable({"iDisplayLength": 15,
 							"sPaginationType": "full_numbers",
							"bInfo": false,
							"bPaginate": true,
							"bProcessing": false,
							"bServerSide": false,
							"bLengthChange": false});
							
			if($("#wysiwyg").length > 0){
                editor = $("#wysiwyg").cleditor({width:"800px", height:"450px"})[0].focus();                
            }  
			
			if($("#wysiwyg2").length > 0){
                editor = $("#wysiwyg2").cleditor({width:"800px", height:"450px"})[0].focus();                
            }  
			
	   } );
	   
function submit_form(form){

document.getElementById(form).submit();	
		
}

