
function submit_form(form){

document.getElementById(form).submit();	
		
}

$(document).ready(function(){
	     $('#datatable').dataTable({"iDisplayLength": 15,
 							"sPaginationType": "full_numbers",
							"bInfo": false,
							"bPaginate": true,
							"bProcessing": false,
							"bServerSide": false,
							"bLengthChange": false});
							
	});
	   