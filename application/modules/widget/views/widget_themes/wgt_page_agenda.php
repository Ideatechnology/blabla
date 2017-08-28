   <?php 
   $this->load->library('widget/widget_custom');
   $temp = $this->widget_custom->widget_agenda($widgets->id_widget,$widgets->column_sidebar,$widgets->sort_no);
   
   $CheckValids = $this->db->query('select * from bf_widget_agenda order by id desc limit 5')->row();
   
  ?>



 <h2 class="judul_kotak"><?php echo lang('bf_judul_agenda');?></h2>
<div class="kotak_box">
<ul class="nav nav-pills nav-stacked">
        <?php if($temp){ 
		foreach($temp as $rows){?>
            <li>
            <i class="icon-calendar"></i>
				<?php echo date("d/M/y", strtotime($rows->tgl_agenda));?> &nbsp; 
                <a href="<?php echo site_url('agenda/detail/'.$rows->id)?>" style="color:#06F;text-shadow: 0 0px 0px rgba(0,0,0,.4);"><?php echo $rows->judul_agenda;?></a>
            </li>
    <?php } }?>
</ul>  
</div>

