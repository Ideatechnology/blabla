$('.polling_date').datepicker({ dateFormat: 'yy-mm-dd',changeYear:true,changeMonth:true});

     $(document).ready(function(){
 
 	$('#datatable').dataTable({"iDisplayLength": 15,
 							"sPaginationType": "full_numbers",
							"bInfo": false,
							"bPaginate": true,
							"bProcessing": false,
							"bServerSide": false,
							"bLengthChange": false});
		
	if($("#wysiwyg").length > 0){
                editor = $("#wysiwyg").cleditor({width:"320px", height:"260px"})[0].focus();                
            }  	
		 
     });