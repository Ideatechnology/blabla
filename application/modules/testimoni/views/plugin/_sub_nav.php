<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) =="" ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/plugin/testimoni') ?>" id="create_new"><?php echo lang('guesbook_new'); ?></a>
	</li>
    <li <?php echo $this->uri->segment(4) == 'approve' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/plugin/testimoni/approve') ?>" id="create_new"><?php echo lang('guesbook_approve'); ?></a>
	</li>
</ul>