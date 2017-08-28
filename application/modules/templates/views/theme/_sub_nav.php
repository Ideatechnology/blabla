<!--<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/theme/templates') ?>" id="list"><?php echo lang('templates_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Templates.Theme.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/theme/templates/create') ?>" id="create_new"><?php echo lang('templates_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>
-->