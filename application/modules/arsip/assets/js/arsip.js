
     $(document).ready(function(){
 	
	$('.arsip_date').datepicker({ dateFormat: 'yy-mm-dd',changeYear:true,changeMonth:true,yearRange: '1945:2030'});

	
	pilih_embed = function(){
  		 $(".embed").show();
   		$("#upload").hide(); 
	}
	 pilih_upload = function(){
  		 $(".embed").hide();
  		 $("#upload").show(); 
	}
	
	
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
			
		if($("#wysiwyg2").length > 0){
                editor = $("#wysiwyg2").cleditor({width:"320px", height:"260px"})[0].focus();                
            }  	
				
	select_file=function (){
			document.getElementById('image').click();
			return false;
		}		
		
	/* variables */
	var preview = $('#imgtarget');
	var status = $('.status');
	var percent = $('.percent');
	var bar = $('.bar');
	var progres = $('.progress');
	//var fileSize = 0;
	
	humanFileSize = function(size) {
    var i = Math.floor( Math.log(size) / Math.log(1024) );
    return ( size / Math.pow(1024, i) ).toFixed(2) * 1 + ' ' + ['B', 'kB', 'MB', 'GB', 'TB'][i];
	}
	
	/* only for image preview */
	$("#image").change(function(){
		preview.fadeOut();
		
		var ext = $('#image').val().split('.').pop().toLowerCase();
		
		if($.inArray(ext, ['gif','png','jpg','jpeg']) != -1) {
    	
		/* html FileRender Api */
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("image").files[0]);

		oFReader.onload = function (oFREvent) {
			preview.attr('src', oFREvent.target.result).fadeIn();
			
		};
		
		}
		
		//getfile name
		fileSize =humanFileSize(this.files[0].size);  //size in kb
		$("#name_file").html("File Name : <strong>"+$("#image").val()+"</strong><br /> File size: <strong>"+fileSize+"</strong>").fadeIn();

	});
	
	//$.ajaxSetup({ scriptCharset: "utf-8" , contentType: "application/json; charset=utf-8"});
	
	/* submit form with ajax request */
	$('#upload_form_arsip').ajaxForm({

		/* set data type json */
		//dataType:  'json',

		/* reset before submitting */
		beforeSend: function() {
			progres.fadeIn();
			status.fadeOut();
			bar.width('0%');
			percent.html('0%');
		},

		/* progress bar call back*/
		uploadProgress: function(event, position, total, percentComplete) {
			var pVel = percentComplete + '%';
			bar.width(pVel);
			percent.html(pVel);
		},

		/* complete call back */
		complete: function(data) {
			preview.fadeOut(800);
			
			progres.fadeOut();
			
			if(data.responseText=="file successfully created" || data.responseText=="file sukses dibuat"){
				$('.form_arsip').attr("value", "");
			$('#name_file').hide();
			$("#wysiwyg").cleditor()[0].clear();
				window.location.href = window.location.pathname;
			}else{
				status.html(data.responseText).fadeIn();	
				
			}
			
		}

	});	
		 
     });