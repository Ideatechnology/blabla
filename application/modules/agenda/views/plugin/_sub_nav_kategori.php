<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/plugin/agenda/kategori') ?>" id="list"><?php echo lang('kategori_list'); ?></a>
	</li>

    <li <?php echo $this->uri->segment(4) == 'trash' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/plugin/agenda/trashkategori') ?>" id="create_new">Trash</a>
	</li>
</ul>