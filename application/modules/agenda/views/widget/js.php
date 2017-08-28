	// parse a date in yyyy-mm-dd format
function parseDate(input) {
  var parts = input.split('-');
  // new Date(year, month [, date [, hours[, minutes[, seconds[, ms]]]]])
  return parts[2]+"/"+parts[1]+"/"+parts[0]; // months are 0-based
}
		$(".detail").live('click',function(){
			$(".s_date").html("Detail Agenda for "+$(this).attr('val')+" <?php echo "$month $year";?>");
			var day = $(this).attr('val');
			$.ajax({
				type: 'post',
				dataType: 'json',
				url: "<?php echo site_url("agenda/detail_event");?>",
				data:{<?php echo "year: $year, mon: $mon";?>, day: day},
				success: function( data ) {
					var html = '';
					if(data.status){
						var i = 1;
						$.each(data.data, function(index, value) {
						    if(i % 2 == 0){
								html = html+'<div class="info1"><h4>'+value.time+' - '+value.time_ends+' | Author : '+value.author+'</h4><p>'+value.event+' <br /><a href="<?php echo site_url();?>/subblog/agenda/'+value.id">Selengkapnya..</a></p></div>';
							}else{
								html = html+'<div class="info2"><h4>'+value.time+' - '+value.time_ends+' | Author : '+value.author+'</h4><p>'+value.event+' <br /><a href="<?php echo site_url();?>/subblog/agenda/'+value.id'">Selengkapnya..</a></p></div>';
							} 
							i++;
						});
					}else{
						html = '<div class="message"><h4>'+data.title_msg+'</h4><p>'+data.msg+'</p></div>';
					}
					html = html;
					$( ".detail_event" ).fadeOut("slow").fadeIn("slow").html(html);
				} 
			});
		});