<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/plugin/arsip/kategori') ?>" id="list">Data</a>
	</li>

    <li <?php echo $this->uri->segment(4) == 'trash' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/plugin/arsip/trashkategori') ?>" id="create_new">Tempat sampah</a>
	</li>
</ul>