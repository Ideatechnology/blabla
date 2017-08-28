<ol class="breadcrumb">
  <li><a href="<?php echo site_url();?>">Home</a></li>
  <li><a href="<?php echo site_url("search/index?search=search&keywords=".$this->input->get("keywords"));?>">Library</a></li>
  <li class="active">Detail</li>
</ol>

<div class="row">
<div class="col-xs-2">
<?php 
 if($query->image!=""): ?>
        <img class="media-object" src="<?php echo $this->config->item('base_url_config');?>/lib/phpthumb/phpThumb.php?src=../../images/docs/<?php echo $query->image;?>&w=90" style="width: 90px; height: 115px;">
      	<?php else: ?>
      	<img class="media-object" src="<?php echo $this->config->item('base_url_config');?>template/default/img/nobook.png" style="width: 90px; height: 115px;">	
      	<?php endif; ?>
   
</div>
<div class="col-xs-10">
<h2><?php echo $query->title;?></h2>


<p><?php echo $query->notes;?></p>

<p>Statement of Responsibility</p>

<table class="table table-bordered">
<tr>
  <td style="width:200px;">Author(s)</td>
  <td><?php
      echo @$this->model_search->getAuthor($query->biblio_id);
        ?>
        </td>
</tr>
<tr>
  <td>Edition</td>
  <td><?php echo $query->edition;?></td>
</tr>
<tr>
  <td>Call Number</td>
  <td><?php echo $query->call_number;?></td>
</tr>
<tr>
  <td>ISBN/ISSN</td>
  <td><?php echo $query->isbn_issn;?></td>
</tr>
<tr>
  <td>Subject(s)</td>
  <td><?php echo @$this->model_search->getTopik($query->biblio_id);?></td>
</tr>
<tr>
 <td>Classification</td>
  <td><?php echo $query->classification;?></td>
</tr>
<tr>
  <td>Series Title</td>
  <td><?php echo $query->series_title;?></td>
  </tr>
<tr>
  <td>GMD</td>
  <td><?php echo @$query->gmd_name;?></td>
  </tr>  
<tr>
  <td>Language</td>
  <td><?php echo $query->language_id=="en"?"English":"Indonesia";?></td>
  </tr> 
<tr>
  <td>Publisher</td>
  <td><?php echo $query->publisher_name;?></td>
  </tr> 
<tr>
  <td>Publishing Year
</td>
  <td><?php echo $query->publish_year;?></td>
  </tr>
<tr>
  <td>Publishing Place

</td>
  <td><?php echo $query->place_name;?></td>
  </tr>
  <tr>
  <td>Collation</td>
  <td><?php echo $query->collation;?></td>
  </tr>
    <tr>
  <td>Specific Detail Info</td>
  <td><?php echo $query->spec_detail_info;?></td>
  </tr>
    <tr>
  <td>File Attachment</td>
  <td>
    
    <?php 
foreach ($this->model_search->getAttachment($query->biblio_id) as $attach_row):
   ?>
  <a href="<?php echo $this->config->item('base_url_config');?>/index.php?p=fstream&fid=<?php echo $attach_row->file_id;?>&bid=<?php echo $query->biblio_id;?>&fname=<?php echo $attach_row->file_name;?>"><?php echo $attach_row->file_title;?></a>
   <?php endforeach; ?>

  </td>
  </tr>

</table>


    </div>
    </div>