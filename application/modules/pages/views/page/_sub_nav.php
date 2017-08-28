<?php //if (has_permission('Company.Content.Create')):?>
<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/pages/create') ?>"><?php echo lang("page_create");?></a>
	</li>
    <li <?php echo $this->uri->segment(5) == 'trash' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/pages/index/trash') ?>" id="create_new"><?php echo lang("page_trash");?></a>
	</li>
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/pages/') ?>" id="create_new"><?php echo lang("page_list");?></a>
	</li>
    
</ul>
<?php //endif;?>