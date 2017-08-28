
 
 $('form#pagepost').submit(function() {
			  $.ajax({
						  type: "POST",
						  data : $(this).serialize(),
						  url: "<?php echo site_url(SITE_AREA.'/transaksi/widget/post_submit_panel');?>",
						  success: function (response) {
							 
							 if(response =="success"){
								$("#console").html('<div class="alert alert-success fade in notification">Saved...</div>');
								setTimeout(function(){
									$('#console .alert').fadeOut(1000);
									window.location.reload();
  								}, 2000);
							 } 
						  }  
					   });	
			  return false;
		  });
 
 $('form#lastpost').submit(function() {
 	  $.ajax({
				  type: "POST",
				  data : $(this).serialize(),
   				  url: "<?php echo site_url(SITE_AREA.'/transaksi/widget/last_post_submit_panel');?>",
 				  success: function (response) {
  					 
					 if(response =="success"){
 						$("#console").html('<div class="alert alert-success fade in notification">Saved...</div>');
						setTimeout(function(){
							$('#console .alert').fadeOut(1000);
							window.location.reload();
						}, 2000);
					 } 
   				  }  
  			   });	
	  return false;
  });
 
 $('form#pagetext').submit(function() {
 	  $.ajax({
				  type: "POST",
				  data : $(this).serialize(),
   				  url: "<?php echo site_url(SITE_AREA.'/transaksi/widget/text_submit_panel');?>",
 				  success: function (response) {
  					 
					 if(response =="success"){
 						$("#console").html('<div class="alert alert-success fade in notification">Saved...</div>');
						setTimeout(function(){
							$('#console .alert').fadeOut(1000);
							window.location.reload();
						}, 2000);
					 } 
   				  }  
  			   });	
	  return false;
  });
 
  $('form#pagetabs').submit(function() {
 	  $.ajax({
				  type: "POST",
				  data : $(this).serialize(),
   				  url: "<?php echo site_url(SITE_AREA.'/transaksi/widget/tabs_submit_panel');?>",
 				  success: function (response) {
  					 
					 if(response =="success"){
 						$("#console").html('<div class="alert alert-success fade in notification">Saved...</div>');
						setTimeout(function(){
							$('#console .alert').fadeOut(1000);
							 window.location.reload();
						}, 2000);
					 } 
   				  }  
  			   });	
	  return false;
  });
  
  $('form#pageblogroll').submit(function() {
 	  $.ajax({
				  type: "POST",
				  data : $(this).serialize(),
   				  url: "<?php echo site_url(SITE_AREA.'/transaksi/widget/blogroll_submit_panel');?>",
 				  success: function (response) {
  					 
					 if(response =="success"){
 						$("#console").html('<div class="alert alert-success fade in notification">Saved...</div>');
						setTimeout(function(){
							$('#console .alert').fadeOut(1000);
							 window.location.reload();
						}, 2000);
					 } 
   				  }  
  			   });	
	  return false;
  });
  
  
    $('form#pageagenda').submit(function() {
 	  $.ajax({
				  type: "POST",
				  data : $(this).serialize(),
   				  url: "<?php echo site_url(SITE_AREA.'/transaksi/widget/agenda_submit_panel');?>",
 				  success: function (response) {
  					 
					 if(response =="success"){
 						$("#console").html('<div class="alert alert-success fade in notification">Saved...</div>');
						setTimeout(function(){
							$('#console .alert').fadeOut(1000);
							 window.location.reload();
						}, 2000);
					 } 
   				  }  
  			   });	
	  return false;
  });
	
	$('form#pagearsip').submit(function() {
			 console.log($(this).serialize());
 	  $.ajax({
				  type: "POST",
				  data : $(this).serialize(),
   				  url: "<?php echo site_url(SITE_AREA.'/transaksi/widget/arsip_submit_panel');?>",
 				  success: function (response) {
  					 
					 if(response =="success"){
 						$("#console").html('<div class="alert alert-success fade in notification">Saved...</div>');
						setTimeout(function(){
							$('#console .alert').fadeOut(1000);
							 window.location.reload();
						}, 2000);
					 } 
   				  }  
  			   });	
	  return false;
  });
	
	$('form#pagefoto').submit(function() {
			 console.log($(this).serialize());
 	  $.ajax({
				  type: "POST",
				  data : $(this).serialize(),
   				  url: "<?php echo site_url(SITE_AREA.'/transaksi/widget/foto_submit_panel');?>",
 				  success: function (response) {
  					 
					 if(response =="success"){
 						$("#console").html('<div class="alert alert-success fade in notification">Saved...</div>');
						setTimeout(function(){
							$('#console .alert').fadeOut(1000);
							 window.location.reload();
						}, 2000);
					 } 
   				  }  
  			   });	
	  return false;
  });
	
	
	$('form#pagekontak').submit(function() {
			 console.log($(this).serialize());
 	  $.ajax({
				  type: "POST",
				  data : $(this).serialize(),
   				  url: "<?php echo site_url(SITE_AREA.'/transaksi/widget/kontak_submit_panel');?>",
 				  success: function (response) {
  					 
					 if(response =="success"){
 						$("#console").html('<div class="alert alert-success fade in notification">Saved...</div>');
						setTimeout(function(){
							$('#console .alert').fadeOut(1000);
							 window.location.reload();
						}, 2000);
					 } 
   				  }  
  			   });	
	  return false;
  });
	
  $('form#pagebanners').submit(function() {
			 console.log($(this).serialize());
 	  $.ajax({
				  type: "POST",
				  data : $(this).serialize(),
   				  url: "<?php echo site_url(SITE_AREA.'/transaksi/widget/banners_submit_panel');?>",
 				  success: function (response) {
  					 
					 if(response =="success"){
 						$("#console").html('<div class="alert alert-success fade in notification">Saved...</div>');
						setTimeout(function(){
							$('#console .alert').fadeOut(1000);
							 window.location.reload();
						}, 2000);
					 } 
   				  }  
  			   });	
	  return false;
  });
  
  $('form#pagescrolltext').submit(function() {
			 console.log($(this).serialize());
 	  $.ajax({
				  type: "POST",
				  data : $(this).serialize(),
   				  url: "<?php echo site_url(SITE_AREA.'/transaksi/widget/scrolltext_submit_panel');?>",
 				  success: function (response) {
  					 
					 if(response =="success"){
 						$("#console").html('<div class="alert alert-success fade in notification">Saved...</div>');
						setTimeout(function(){
							$('#console .alert').fadeOut(1000);
							 window.location.reload();
						}, 2000);
					 } 
   				  }  
  			   });	
	  return false;
  });
 
  $('form#pagepolling').submit(function() {
			 console.log($(this).serialize());
 	  $.ajax({
				  type: "POST",
				  data : $(this).serialize(),
   				  url: "<?php echo site_url(SITE_AREA.'/transaksi/widget/polling_submit_panel');?>",
 				  success: function (response) {
  					 
					 if(response =="success"){
 						$("#console").html('<div class="alert alert-success fade in notification">Saved...</div>');
						setTimeout(function(){
							$('#console .alert').fadeOut(1000);
							 window.location.reload();
						}, 2000);
					 } 
   				  }  
  			   });	
	  return false;
  });
  
  $('form#page_multimedia').submit(function() {
			 console.log($(this).serialize());
 	  $.ajax({
				  type: "POST",
				  data : $(this).serialize(),
   				  url: "<?php echo site_url(SITE_AREA.'/transaksi/widget/multimedia_submit_panel');?>",
 				  success: function (response) {
  					 
					 if(response =="success"){
 						$("#console").html('<div class="alert alert-success fade in notification">Saved...</div>');
						setTimeout(function(){
							$('#console .alert').fadeOut(1000);
							 window.location.reload();
						}, 2000);
					 } 
   				  }  
  			   });	
	  return false;
  });
  
  $('form#page_social').submit(function() {
			 console.log($(this).serialize());
 	  $.ajax({
				  type: "POST",
				  data : $(this).serialize(),
   				  url: "<?php echo site_url(SITE_AREA.'/transaksi/widget/social_submit_panel');?>",
 				  success: function (response) {
  					 
					 if(response =="success"){
 						$("#console").html('<div class="alert alert-success fade in notification">Saved...</div>');
						setTimeout(function(){
							$('#console .alert').fadeOut(1000);
							 window.location.reload();
						}, 2000);
					 } 
   				  }  
  			   });	
	  return false;
  });
  
  	$('form#pagebuletin').submit(function() {
			 console.log($(this).serialize());
 	  $.ajax({
				  type: "POST",
				  data : $(this).serialize(),
   				  url: "<?php echo site_url(SITE_AREA.'/transaksi/widget/buletin_submit_panel');?>",
 				  success: function (response) {
  					 
					 if(response =="success"){
 						$("#console").html('<div class="alert alert-success fade in notification">Saved...</div>');
						setTimeout(function(){
							$('#console .alert').fadeOut(1000);
							 window.location.reload();
						}, 2000);
					 } 
   				  }  
  			   });	
	  return false;
  });
  
  
        
    $(".dragbox-content").css('display', 'none');
    $('.dragbox')
	.each(function(){
 		$(this).find('h2').hover(function(){
			 $(this).find('.configure').css('visibility', 'visible');
		}, function(){
			$(this).find('.configure').css('visibility', 'hidden');
		})
		.click(function(){
 			//console.log($(this).parent().parent().attr('id'));
			     if($(this).parent().parent().attr('id') != 'columnindex'){
				 	$(this).siblings('.dragbox-content').toggle();
				 }
 		})
		.end();
		//.find('.configure').css('visibility', 'hidden');
	}); 
	
	
	
	$('.column').sortable({
		connectWith: '.column',
		handle: 'h2',
		cursor: 'move',
		placeholder: 'placeholder',
		forcePlaceholderSize: false,
		removable: true,  
		opacity: 0.4,
		stop: function(event, ui){
			  $(this).find('h2').click();
		 	
		      var bb =$(ui.item).parent().attr('id'); // return coloumn 2...dst.
 			  
			  if(bb != 'columnindex'){
				 $(ui.item).clone(true).appendTo(event.target);
				 $('.control', $(ui.item).parent() ).css('display', 'none');
  		      }
  		      
		   //console.log($(ui.item));
		   
		   $(event.target).each(function(){
 			  $(this).find('.dragbox-content').css('display', 'none');
           }); 
		  
			
			var sortorder='';
			$('.column').each(function(){
				var itemorder=$(this).sortable('toArray');
				var columnId=$(this).attr('id');
				sortorder+=columnId+'='+itemorder.toString()+'&';
			});
			 //alert('SortOrder: '+sortorder);
			 console.log(event.target);
			 updateWidgetData();
			 
 		} 
	});
	//.disableSelection();
	
	function updateWidgetData(){
	var items=[];
	$('.column').each(function(){
  		 
		//var columnId=$(this).attr('id');
		$('.dragbox', this).each(function(i){
			var collapsed=0;
			if($(this).find('.dragbox-content').css('display')=="none")
				collapsed=1;
 			
				if($(this).parent().attr('id') != 'columnindex'){
					if($(this).attr('id') !='item10009'){
						var columnId = $(this).parent().attr('id'); //coloumn1 ...dst
						//Create Item object for current panel :)
						var item={
							id: $(this).attr('id'),
							referen: $(this).attr('reference'),
							collapsed: collapsed,
							order : i,
							column: columnId
						};
				   }
 			}
			
			
			//Push item object into items array
			items.push(item);
		});
	});
		//Assign items array to sortorder JSON variable
		var sortorder={ items: items };
				
		//Pass sortorder variable to server using ajax to save state
		$.ajax({
				  type: "POST",
   				  url: "<?php echo site_url(SITE_AREA.'/transaksi/widget/updatePanels');?>?data="+JSON.stringify(sortorder),
				  dataType: "json",
				  success: function (msg) {
					 window.location.reload();
    			 }  
  		});
		
		
	}
	
	
	$('.column').each(function(){
	$('.dragbox', this).each(function(i){
		var winpanel = $(this);
		var sortNo = $(this).attr('parentlog'); //parent ini untuk identitas Sidebar coloumn mana yang mau didelete.
	    var columnId = $(this).parent().attr('id'); //coloumn1 ...dst

		$('a.delete', this).click(
						function(){
							var items=[];
							var sel = confirm('do you want to delete the widget?');
							if(sel)
							{
 								 $.ajax({
									  type: "GET",
 									  url: "<?php echo site_url(SITE_AREA.'/transaksi/widget/delete_panel');?>?sortNo="+sortNo+"&columnId="+columnId,
									  success: function (msg) {
									    if(msg){
											if(sortNo == msg){
											   console.log(winpanel.attr('style','display:none'));
											   window.location.reload();
 											}
										}
									  }
								   });	
							}
		     }
		    );	
	    });
    });
	
	
    $("H3 > .cool").each(function(){
 		$(this).click(function(){
			 var duty = $(this).parent().parent();
 			 
  			 if ($('.column:first',duty).is(":hidden")) {
			    $(".column",duty).show(500);	 
			 }else{
				$(".column",duty).hide(500);  
			 }
			 
         })
									  
	});
	
	
  
 
