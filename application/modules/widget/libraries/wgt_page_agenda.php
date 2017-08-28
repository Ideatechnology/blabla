<?php 
   $this->load->library('widget/widget_custom');
   $temp = $this->widget_custom->widget_agenda($widgets->id_widget,$widgets->column_sidebar,$widgets->sort_no);
   if(@$temp['modes'] == 0){
 ?>

<div class="grid_4 omega">
    
        <div class="title_agenda"></div>
    	<div id="eventCalendarNoCache"></div>
     
</div>
  <script>
	 $(document).ready(function() {
			 $("#eventCalendarNoCache").eventCalendar({
				 eventsjson: '<?php echo site_url('widget/agenda/index/'. $widgets->id_widget .'/'. $widgets->column_sidebar .'/'. $widgets->sort_no );?>',
			 	 cacheJson: false,
				 txt_GoToEventUrl :'Lihat Events',
				 txt_noEvents :'Silahkan Klik Tanggal?'
		 } );
			 
		 
			  
    });
</script>

<?php 
  }elseif($temp['modes']==1){
?>
<div class="grid_4 omega">
    
   <div class="title_agenda"><?php echo $temp['title'];?></div>
     <ul>
        <?php if($temp){ foreach($temp['data'] as $rows){?>
            <li>
				<?php echo date("d/M/y", strtotime($rows->tgl_agenda));?> &nbsp; 
                <a href="<?php echo site_url('subblog/agenda/'.$rows->id.'/'.date("d", strtotime($rows->tgl_agenda)).'/'.date("m", strtotime($rows->tgl_agenda)).'/'.date("Y", strtotime($rows->tgl_agenda)).'/'.url_title($rows->judul_agenda,'dash').'');?>"><?php echo $rows->judul_agenda;?></a>
            </li>
    <?php } }?>
    
    </ul>
</div>
<?php } ?>