<?php

$inline  = '$(".alternativeRow").btnAddRow({maxRow:5});
		$(".delRow").btnDelRow();';
  
Assets::add_js( $inline, 'inline' );

?>

<?php echo form_open($this->uri->uri_string(),"id='pagetabs'"); ?>
   <?php
       $ff = array();
       if(isset($sort_no)){
         $ff = $this->db->query('select * from bf_widget where column_sidebar ='.$column_sidebar.' and sort_no ='.$sort_no.' ')->row();
       }
      
     ?>    
               
               <input name="sort_no_identity" type="hidden" value="<?php echo (isset($sort_no) ? $sort_no : '');?>" />
                   
                   <table border="0">
                        <tr>
                        <td colspan="3">
                          <span class="alternativeRow btn">Tambah Panel</span>
                          <hr />
                          </td>
                        </tr>
                         <?php
						  $jmlRow=0;
						  if(isset($ff->id_widget)){
 						     $id_wg = explode( ',' , $ff->id_widget );
 						     $jmlRow = count($id_wg);
						   }
						    if($jmlRow > 0){ 
						    for($c=0; $c<$jmlRow; $c++){
							     
							  $Sq = $this->db->query("select title_tabs,post_category,colomn_tabs,limit_p 
													 from bf_widget_tabs where id ='".$id_wg[$c]."' ")->row(); 
 							  //echo $this->db->last_query();
							  
						?>
                         <tr>
                          <td>
                            <input name="post_idx[]" type="hidden" value="<?php echo $id_wg[$c];?>" />
                            <input name="colomn_tabs[]" type="hidden" value="<?php echo isset($Sq->colomn_tabs) ? $Sq->colomn_tabs : '';?>" />
                            Title :
						    <input name="title[]" type="text" value="<?php  echo (isset( $Sq->title_tabs ) ?  $Sq->title_tabs : '');?>" maxlength="12" />
                            <br />
                             Category
						   <?php echo form_dropdown('category[]', $optCategory['category'], (isset($Sq->post_category) ? $Sq->post_category : ''));?>
                             
                             Limit<br />
                             <select name="limit_p[]" id="limit_p" class="span5">
                               <option value="5" <?php echo (isset($Sq->limit_p) && $Sq->limit_p==5 ? 'selected' : '');?>>5</option>
                               <option value="10" <?php echo (isset($Sq->limit_p) && $Sq->limit_p==10 ? 'selected' : '');?>>10</option>
                               <option value="15" <?php echo (isset($Sq->limit_p) && $Sq->limit_p==15 ? 'selected' : '');?>>15</option>
                               <option value="20" <?php echo (isset($Sq->limit_p) && $Sq->limit_p==20 ? 'selected' : '');?>>20</option>
                               <option value="25" <?php echo (isset($Sq->limit_p) && $Sq->limit_p==25 ? 'selected' : '');?>>25</option>
                               <option value="30" <?php echo (isset($Sq->limit_p) && $Sq->limit_p==30 ? 'selected' : '');?>>30</option>
                             </select>
<span class="delRow">Hapus</span>
                           <hr />
                          </td>
                         </tr>
                        <?php
						   }
							}else{
						 ?>
                         
                        <tr>
                          <td>
                             Title :
						    <input name="title[]" type="text" maxlength="12" />
                            <br />
                             Category
						   <?php echo form_dropdown('category[]', $optCategory['category'],'');?>
                           Limit
                             <select name="limit_p[]" id="limit_p" class="span5">
                               <option value="5">5</option>
                               <option value="10">10</option>
                               <option value="15">15</option>
                               <option value="20">20</option>
                               <option value="25">25</option>
                               <option value="30">30</option>
                             </select>
                           <span class="delRow">Hapus</span>
                          </td>
                         </tr>
                        <tr>
                          <td>&nbsp;</td>
                        </tr>
                         
                         <?php } ?>
                         </table>
           <hr />
                        <a href="#" class="delete">Delete</a> &nbsp; &nbsp;
                        
<input type="submit" name="button" class="btn btn-primary" value="<?php echo isset($ff->id_widget) ? 'update' : 'simpan';?>" />
                        <input name="post_tipe" type="hidden" value="<?php echo isset($ff->id_widget) ? 'update' : 'simpan';?>" />
                        
                        <input name="coloumn_sidebar" type="hidden" value="<?php echo isset($column_sidebar) ? $column_sidebar :'';?>" />
                        
                        
                  
<?php echo form_close(); ?>

