<div style="padding:20px;">
<h4 class="judul_kotak_fullborder"><?php echo lang('bf_judul_agenda');?></h4><hr / style="border:solid 1px #FF3300">

<?php echo $notes?>
<br /><br />
<div class="event_detail">
			<h4 class="s_date judul_kotak_fullborder" style="text-align:left">Detail Agenda <?php echo "$day $month $year";?></h4><hr / style="border:solid 1px #FF3300">
			<div class="detail_event">
				<?php 
					if(isset($events)){
						$i = 1;
						foreach($events as $e){
					
						 if($i % 2 == 0){
								echo '<div class="info1">
								<h4>Jam :  '.$e['time'].' - '.$e['time_ends'].' | Author : '.$e['author'].' </h4>
								<p>'.$e['event'].'<br /><a href="'.site_url("agenda/detail/".$e['id']."/".date('d/m/Y',strtotime(str_replace(",", "",$e["tgl_agenda"])))).'">Selengkapnya..</a></p>
								
								</div>';
							}else{
								echo '<div class="info2"><h4>Jam : '.$e['time'].' - '.$e['time_ends'].' | Author : '.$e['author'].'</h4>
								<p>'.$e['event'].'<br /><a href="'.site_url("agenda/detail/".$e['id']."/".date('d/m/Y',strtotime(str_replace(",", "",$e["tgl_agenda"])))).'">Selengkapnya..</a></p>
								
								</div>';
							} 
							$i++;
						}
					}else{
						echo '<div class="message"><h4>Tidak ada Agenda</h4><p>Tidak ada Agenda di Tanggal ini</p></div>';
					}
				?>
				
			</div>
		</div>	
	
	<script>
	// parse a date in yyyy-mm-dd format
function parseDate(input) {
  var parts = input.split('-');
  // new Date(year, month [, date [, hours[, minutes[, seconds[, ms]]]]])
  return parts[2]+"/"+parts[1]+"/"+parts[0]; // months are 0-based
}
		$(".detail").on('click',function(){
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
								html = html+'<div class="info1"><h4>'+value.time+' - '+value.time_ends+' | Author : '+value.author+'</h4><p>'+value.event+' <br /><a href="<?php echo site_url();?>/agenda/detail/'+value.id+'/'+parseDate(value.tgl_agenda)+'">Selengkapnya..</a></p></div>';
							}else{
								html = html+'<div class="info2"><h4>'+value.time+' - '+value.time_ends+' | Author : '+value.author+'</h4><p>'+value.event+' <br /><a href="<?php echo site_url();?>/agenda/detail/'+value.id+'/'+parseDate(value.tgl_agenda)+'">Selengkapnya..</a></p></div>';
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
		
</script>

</div>



