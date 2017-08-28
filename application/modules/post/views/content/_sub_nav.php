<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/post') ?>" id="list"><?php echo lang('post_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Post.Content.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/content/post/create') ?>" id="create_new"><?php echo lang('post_new'); ?></a>
	</li>
    <li <?php echo $this->uri->segment(4) == 'trash' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/content/post/trash') ?>" id="create_new"><?php echo lang('post_trash'); ?></a>
	</li>
	<?php endif; ?>
</ul>