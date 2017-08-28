
$("#lokasi_menu").change(function(){
   var lokasi = $(this).val();
    $.ajax({
        type: "GET",
        url : "<?php echo site_url(SITE_AREA.'/theme/menuthemes/dependent_menu');?>/"+lokasi,
        success: function (msg){
            $("#menu_parent_id").html(msg);
        }
    });
});


	var updateOutput = function(e)
						{
							var list   = e.length ? e : $(e.target),
								output = list.data('output');
							 if (window.JSON) {
								output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
								get_ajax_update(window.JSON.stringify(list.nestable('serialize')));
							} else {
								output.val('JSON browser support required for this demo.');
							}
						};
                        
    function get_ajax_update(e){ 
 			 $.ajax({
				  type: "GET",
  				  url: "<?php echo site_url(SITE_AREA.'/theme/menuthemes/parsingjson');?>?jsonstring="+e,
				  dataType: "json",
				  success: function (msg) {
                  
					 if (msg) {
						 alert(msg);
					 }
					  
				  }  
				  
 			   });
			 
		}

    // activate Nestable for list menu
		
		$('#nestable-menu').on('click', function(e)
		{
			var target = $(e.target),
				action = target.data('action');
			if (action === 'expand-all') {
				$('.dd').nestable('expandAll');
			}
			if (action === 'collapse-all') {
				$('.dd').nestable('collapseAll');
			}
		});

		$('#nestable3').nestable();        
 
        
$(document).ready(function(){
  
//untuk kotak dialog post  
$('#menu_dialog').dialog({
        autoOpen: false,
        minWidth: 790,
        minHeight:450,
        title: 'Pilih Posts Yang Tersedia' 
});

//untuk kotak dialog page
$('#menu_dialog2').dialog({
        autoOpen: false,
        minWidth: 790,
        minHeight:450,
        title: 'Pilih Pages Yang Tersedia' 
});
								   
								   
pilih_menu = function(){
  $("#menu_dialog").load('<?php echo site_url('admin/theme/menuthemes/set_post_get')?>').dialog('open');
 
}
									
pilih_pages= function(){
  $("#menu_dialog2").load('<?php echo site_url('admin/theme/menuthemes/set_pages_get')?>').dialog('open');
}
									 
/* Posts*/
Pilih =function (nomor){
     var str = nomor;
     var res = str.split(',');
     //console.log(res);
     $("input[name=hideSetMenu]").val(res[0]);
     $("input[name=url_posts]").val(res[1]);
     $("#menu_dialog").dialog('close');
}
                                    
  /* Pages*/
  Pilihpage =function (nomor){
       var str = nomor;
       var res = str.split(',');
       //console.log(res);
       $("input[name=hideSetPages]").val(res[0]);
       $("input[name=url_pages]").val(res[1]);
       $("#myModalPages").modal('hide');
  }


});


pilih1 = function(){
   $("#pilihan1").show();
   $("#pilihan2").hide(); 
   $("#pilihan3").hide(); 
   $("#pilihan5").hide();
   $("#pilihan6").hide();
    $("#pilihan7").hide();
}

pilih2 = function(){
   $("#pilihan2").show();
   $("#pilihan1").hide(); 
   $("#pilihan3").hide();
   $("#pilihan5").hide();
   $("#pilihan6").hide();
   $("#pilihan7").hide();
}

pilih3 = function(){
   $("#pilihan3").show(); 
   $("#pilihan2").hide(); 
   $("#pilihan1").hide(); 
   $("#pilihan5").hide();
   $("#pilihan6").hide();   
   $("#pilihan7").hide();
}

pilih4 = function(){
   $("#pilihan1").hide(); 
   $("#pilihan2").hide(); 
   $("#pilihan3").hide(); 
   $("#pilihan4").show();
   $("#pilihan5").hide();
   $("#pilihan6").hide();
   $("#pilihan7").hide();
}

pilih5 = function(){
   $("#pilihan1").hide(); 
   $("#pilihan2").hide(); 
   $("#pilihan3").hide(); 
   $("#pilihan4").hide();
   $("#pilihan5").show();
   $("#pilihan6").hide();
   $("#pilihan7").hide();
}

pilih6 = function(){
   $("#pilihan1").hide(); 
   $("#pilihan2").hide(); 
   $("#pilihan3").hide(); 
   $("#pilihan4").hide();
   $("#pilihan5").hide();
   $("#pilihan6").show();
   $("#pilihan7").hide();
}

pilih7 = function(){
   $("#pilihan1").hide(); 
   $("#pilihan2").hide(); 
   $("#pilihan3").hide(); 
   $("#pilihan4").hide();
   $("#pilihan5").hide();
   $("#pilihan6").hide();
   $("#pilihan7").show();
}

$('.datatable').dataTable({
					"iDisplayLength":40,
					"sPaginationType": "full_numbers",
					"bInfo": false,
					"bPaginate": false,
					"bProcessing": false,
					"bServerSide": false,
					"bSortable": true,
					"bSort": false,
					"bLengthChange": false,
					"aoColumns": [
					{ "bSortable": false },
					{ "bSortable": false },
					{ "bSortable": false },
					]
					
				}); 


$("#contentLeft ul").sortable({
  update : function () {
      order = $(this).sortable('serialize');
      $.ajax({
          url: "<?php echo site_url(SITE_AREA.'/theme/menuthemes/parsingjsonurutan');?>?jsonstring="+order,
          type: "GET",
          dataType: "json",
          success: function(){
              //alert("success");
          }
      });
      
   
  }
							    
  }); 
						 	 