<?php

$validation_errors = validation_errors();
$show_extended_settings = ! empty($extended_settings);

if ($validation_errors) :
?>
<div class="alert alert-block alert-error fade in">
	<a class="close" data-dismiss="alert">&times;</a>
	<?php echo $validation_errors." ".$this->session->userdata("upload_session_image"); ?>
</div>
<?php
endif;
?>
<div class="admin-box">

	<?php echo form_open_multipart($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<div class="tabbable">
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#main-settings" data-toggle="tab"><?php echo lang('set_tab_settings') ?></a>
				</li>

				<li class="">
					<a href="#security" data-toggle="tab">Keamanan</a>
				</li>

				
				
			</ul>
			<br /><br />
			<div class="tab-content" style="padding-bottom: 1px; border-bottom: 1px solid #ddd;margin-bottom:15px;">
				<!-- Start of Main Settings Tab Pane -->
				<div class="tab-pane active" id="main-settings">
					<fieldset>
						<legend><?php echo lang('bf_site_information') ?></legend>

									<input type="hidden" name="kode_desa" id="kode_desa" class="form-control" value="<?php echo set_value('kode_desa', isset($settings['site.kode_desa']) ? $settings['site.kode_desa'] : '') ?>" />
						

						<div class="form-group">
							<label class="col-xs-2 control-label" for="title"><?php echo lang('bf_site_name') ?></label>
							<div class="col-xs-5">
								<input type="text" name="title" id="title" class="form-control" value="<?php echo set_value('site.title', isset($settings['site.title']) ? $settings['site.title'] : '') ?>" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-2 control-label" for="system_email"><?php echo lang('bf_site_email') ?></label>
							<div class="col-xs-5">
								<input type="text" name="system_email" id="system_email" class="form-control" value="<?php echo set_value('site.system_email', isset($settings['site.system_email']) ? $settings['site.system_email'] : '') ?>" />
								<p class="help-inline"><?php echo lang('bf_site_email_help') ?></p>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-xs-2 control-label" for="list_limit"><?php echo lang('bf_top_number') ?></label>
							<div class="col-xs-5">
								<input type="text" name="list_limit" id="list_limit" value="<?php echo set_value('list_limit', isset($settings['site.list_limit']) ? $settings['site.list_limit'] : '')  ?>" class="form-control" />
								<p class="help-inline"><?php echo lang('bf_top_number_help') ?></p>
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-2 control-label" for="facebook">Link Facebook</label>
							<div class="col-xs-5">
								<input type="text" name="facebook" id="facebook" class="form-control" value="<?php echo set_value('site.facebook', isset($settings['site.facebook']) ? $settings['site.facebook'] : '') ?>" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-2 control-label" for="twitter">Link Twitter</label>
							<div class="col-xs-5">
								<input type="text" name="twitter" id="twitter" class="form-control" value="<?php echo set_value('site.twitter', isset($settings['site.twitter']) ? $settings['site.twitter'] : '') ?>" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-2 control-label" for="googleplus">Link Google PLus</label>
							<div class="col-xs-5">
								<input type="text" name="googleplus" id="twitter" class="form-control" value="<?php echo set_value('site.googleplus', isset($settings['site.googleplus']) ? $settings['site.googleplus'] : '') ?>" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-2 control-label" for="cse">Alamat</label>
							<div class="col-xs-5">
								<input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo set_value('site.alamat', isset($settings['site.alamat']) ? $settings['site.alamat'] : '') ?>" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-2 control-label" for="cse">Telp/Fax</label>
							<div class="col-xs-5">
								<input type="text" name="telpfax" id="telpfax" class="form-control" value="<?php echo set_value('site.telpfax', isset($settings['site.telpfax']) ? $settings['site.telpfax'] : '') ?>" />
							</div>
						</div>


						
								<input type="hidden" name="cse" id="cse" class="form-control" value="<?php echo set_value('site.cse', isset($settings['site.cse']) ? $settings['site.cse'] : '') ?>" />
						
						<div class="form-group">
							<label class="col-xs-2 control-label" for="seo_keyword">SEO Meta Keyword</label>
							<div class="col-xs-5">
								<input type="text" name="seo_keyword" id="seo_keyword" class="form-control" value="<?php echo set_value('site.keyword', isset($settings['site.keyword']) ? $settings['site.keyword'] : '') ?>" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-2 control-label" for="seo_description">SEO Meta Description</label>
							<div class="col-xs-5">
								<input type="text" name="seo_description" id="seo_description" class="form-control" value="<?php echo set_value('site.description', isset($settings['site.description']) ? $settings['site.description'] : '') ?>" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-2 control-label" for="seo_description">Logo</label>
							<div class="col-xs-5">
								<input type="file" name="logo" accept="image/*">
								<input type="hidden" name="logo_hidden" value="<?php echo set_value('site.logo', isset($settings['site.logo']) ? $settings['site.logo'] : '') ?>">
								<p>
								<br />
									<?php if($settings['site.logo']!=""): ?>
										<img src="<?php echo base_url()."bonfire/modules/settings/images/".image_thumb($settings['site.logo'],2);?>">
									<?php endif; ?>
								</p>
							</div>
						</div>
						
					</fieldset>
				</div>
				<!-- Start of Security Settings Tab Pane -->
				<div class="tab-pane" id="security">
					<fieldset>
						<legend><?php echo lang('bf_security') ?></legend>

						<div class="form-group">
							<div class="col-xs-5">
								<label for="allow_register">
									<input type="checkbox" name="allow_register" id="allow_register" value="1" <?php echo $settings['auth.allow_register'] == 1 ? 'checked="checked"' : set_checkbox('auth.allow_register', 1); ?> />
									<span><?php echo lang('bf_allow_register') ?></span>
								</label>
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-2 control-label" for="user_activation_method"><?php echo lang('bf_activate_method') ?></label>
							<div class="col-xs-5">
								<select name="user_activation_method" class="form-control" id="user_activation_method">
									<option value="0" <?php echo $settings['auth.user_activation_method'] == 0 ? 'selected="selected"' : ''; ?>><?php echo lang('bf_activate_none') ?></option>
									<option value="1" <?php echo $settings['auth.user_activation_method'] == 1 ? 'selected="selected"' : ''; ?>><?php echo lang('bf_activate_email') ?></option>
									<option value="2" <?php echo $settings['auth.user_activation_method'] == 2 ? 'selected="selected"' : ''; ?>><?php echo lang('bf_activate_admin') ?></option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-2 control-label" for="login_type"><?php echo lang('bf_login_type') ?></label>
							<div class="col-xs-5">
								<select name="login_type" id="login_type" class="form-control">
									<option value="email" <?php echo $settings['auth.login_type'] == 'email' ? 'selected="selected"' : ''; ?>><?php echo lang('bf_login_type_email') ?></option>
									<option value="username" <?php echo $settings['auth.login_type'] == 'username' ? 'selected="selected"' : ''; ?>><?php echo lang('bf_login_type_username') ?></option>
									<option value="both" <?php echo $settings['auth.login_type'] == 'both' ? 'selected="selected"' : ''; ?>><?php echo lang('bf_login_type_both') ?></option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-2 control-label" id="use_usernames_label"><?php echo lang('bf_use_usernames') ?></label>
							<div class="col-xs-5" aria-labelledby="use_usernames_label" role="group">
								<label class="radio" for="use_username">
									<input type="radio" id="use_username" name="use_usernames" value="1" <?php echo $settings['auth.use_usernames'] == 1 ? 'checked="checked"' : set_radio('auth.use_usernames', 1); ?> />
									<span><?php echo lang('bf_username') ?></span>
								</label>
								<label class="radio" for="use_email">
									<input type="radio" id="use_email" name="use_usernames" value="0" <?php echo $settings['auth.use_usernames'] == 0 ? 'checked="checked"' : set_radio('auth.use_usernames', 0); ?> />
									<span><?php echo lang('bf_email') ?></span>
								</label>
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-2 control-label"><?php echo lang('bf_display_name'); ?></label>
							<div class="col-xs-5">
								<label class="checkbox" for="allow_name_change">
									<input type="checkbox" name="allow_name_change" id="allow_name_change" <?php echo isset($settings['auth.allow_name_change']) && $settings['auth.allow_name_change'] == 1 ? 'checked="checked"' : set_checkbox('auth.allow_remember', 1); ?> >
									<?php echo lang('set_allow_name_change_note'); ?>
								</label>

								<div id="name-change-settings" style="<?php if (!$settings['auth.allow_name_change']) echo 'display: none'; ?>">
									<input type="text" name="name_change_frequency" style="width: 2em;" value="<?php echo $settings['auth.name_change_frequency'] ?>">
									<?php echo lang('set_name_change_frequency') ?>

									<input type="text" name="name_change_limit" style="width: 2em;" value="<?php echo $settings['auth.name_change_limit'] ?>">
									<?php echo lang('set_days') ?>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-5">
								<label class="checkbox" for="allow_remember">
									<input type="checkbox" name="allow_remember" id="allow_remember" value="1" <?php echo $settings['auth.allow_remember'] == 1 ? 'checked="checked"' : set_checkbox('auth.allow_remember', 1); ?> />
									<span><?php echo lang('bf_allow_remember') ?></span>
								</label>
							</div>
						</div>

						<div class="form-group" id="remember-length" style="<?php if (!$settings['auth.allow_remember']) echo 'display: none'; ?>">
							<label class="col-xs-2 control-label" for="remember_length"><?php echo lang('bf_remember_time') ?></label>
							<div class="col-xs-5">
								<select name="remember_length" id="remember_length" class="form-control">
									<option value="604800"  <?php echo $settings['auth.remember_length'] == '604800' ?  'selected="selected"' : '' ?>>1 <?php echo lang('bf_week') ?></option>
									<option value="1209600" <?php echo $settings['auth.remember_length'] == '1209600' ? 'selected="selected"' : '' ?>>2 <?php echo lang('bf_weeks') ?></option>
									<option value="1814400" <?php echo $settings['auth.remember_length']== '1814400' ? 'selected="selected"' : '' ?>>3 <?php echo lang('bf_weeks') ?></option>
									<option value="2592000" <?php echo $settings['auth.remember_length'] == '2592000' ? 'selected="selected"' : '' ?>>30 <?php echo lang('bf_days') ?></option>
								</select>
							</div>
						</div>

						<div class="form-group" id="password-strength">
							<label class="col-xs-2 control-label" for="password_min_length"><?php echo lang('bf_password_strength') ?></label>
							<div class="col-xs-5">
								<input type="text" name="password_min_length" class="form-control" id="password_min_length" value="<?php echo set_value('password_min_length', isset($settings['auth.password_min_length']) ? $settings['auth.password_min_length'] : '') ?>" class="span1" />
								<p class="help-inline"><?php echo lang('bf_password_length_help') ?></p>
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-2 control-label"><?php echo lang('set_option_password'); ?></label>
							<div class="col-xs-5">
								<label class="checkbox" for="password_force_numbers">
									<input type="checkbox" name="password_force_numbers" id="password_force_numbers" value="1" <?php echo set_checkbox('password_force_numbers', 1, isset($settings['auth.password_force_numbers']) && $settings['auth.password_force_numbers'] == 1 ? TRUE : FALSE); ?> />
									<?php echo lang('bf_password_force_numbers') ?>
								</label>
								<label class="checkbox" for="password_force_symbols">
									<input type="checkbox" name="password_force_symbols" id="password_force_symbols" value="1" <?php echo set_checkbox('password_force_symbols', 1, isset($settings['auth.password_force_symbols']) && $settings['auth.password_force_symbols'] == 1 ? TRUE : FALSE); ?> />
									<?php echo lang('bf_password_force_symbols') ?>
								</label>
								<label class="checkbox" for="password_force_mixed_case">
									<input type="checkbox" name="password_force_mixed_case" id="password_force_mixed_case" value="1" <?php echo set_checkbox('password_force_mixed_case', 1, isset($settings['auth.password_force_mixed_case']) && $settings['auth.password_force_mixed_case'] == 1 ? TRUE : FALSE); ?> />
									<?php echo lang('bf_password_force_mixed_case') ?>
								</label>
								<label class="checkbox" for="password_show_labels">
									<input type="checkbox" name="password_show_labels" id="password_show_labels" value="1" <?php echo set_checkbox('password_show_labels', 1, isset($settings['auth.password_show_labels']) && $settings['auth.password_show_labels'] == 1 ? TRUE : FALSE); ?> />
									<?php echo lang('bf_password_show_labels') ?>
								</label>
							</div>
						</div>

						<div class="form-group">
							<label for="password_iterations" class="col-xs-2 control-label"><?php echo lang('set_password_iterations') ?></label>
							<div class="col-xs-5">
								<select name="password_iterations" style="width: auto" class="form-control">
									<option <?php echo set_select('password_iterations', 2, $settings['password_iterations'] == 2) ?>>2</option>
									<option <?php echo set_select('password_iterations', 4, $settings['password_iterations'] == 4) ?>>4</option>
									<option <?php echo set_select('password_iterations', 8, $settings['password_iterations'] == 8) ?>>8</option>
									<option <?php echo set_select('password_iterations', 16, $settings['password_iterations'] == 16) ?>>16</option>
									<option <?php echo set_select('password_iterations', 31, $settings['password_iterations'] == 31) ?>>31</option>
								</select>
								<span class="help-inline"><?php echo lang('bf_password_iterations_note'); ?></span>
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-2 control-label" for="force_pass_reset"><?php echo lang('set_force_reset') ?></label>
							<div class="col-xs-5">
								<a href="<?php echo site_url(SITE_AREA .'/settings/users/force_password_reset_all'); ?>" class="btn btn-danger" onclick="return confirm('<?php echo lang('set_password_reset_confirm') ?>');">
									<?php echo lang('set_reset'); ?>
								</a>
								<span class="help-inline"><?php echo lang('set_reset_note'); ?></span>
							</div>
						</div>
					</fieldset>
				</div>
			<?php if (has_permission('Site.Developer.View')) : ?>
				<!-- Start of Developer Settings Tab Pane -->
				<div class="tab-pane" id="developer">
					<fieldset>
						<legend><?php echo lang('set_option_developer'); ?></legend>

						<div class="form-group">
							<div class="col-xs-5">
								<label class="checkbox" for="show_profiler">
									<input type="checkbox" name="show_profiler" id="show_profiler" value="1" <?php echo  $settings['site.show_profiler'] == 1 ? 'checked="checked"' : set_checkbox('auth.use_extended_profile', 1); ?> />
									<span><?php echo lang('bf_show_profiler') ?></span>
								</label>
								<label class="checkbox" for="show_front_profiler">
									<input type="checkbox" name="show_front_profiler" id="show_front_profiler" value="1" <?php echo  $settings['site.show_front_profiler'] == 1 ? 'checked="checked"' : set_checkbox('site.show_front_profiler', 1); ?> />
									<span><?php echo lang('bf_show_front_profiler') ?></span>
								</label>
								<label class="checkbox" for="do_check">
									<input type="checkbox" name="do_check" id="do_check" value="1" <?php echo $settings['updates.do_check'] == 1 ? 'checked="checked"' : set_checkbox('updates.do_check', 1); ?> />
									<span><?php echo lang('bf_do_check') ?></span>
									<p class="help-block"><?php echo lang('bf_do_check_edge') ?></p>
								</label>
								<label class="checkbox" for="bleeding_edge">
									<input type="checkbox" name="bleeding_edge" id="bleeding_edge" value="1" <?php echo $settings['updates.bleeding_edge'] == 1 ? 'checked="checked"' : set_checkbox('updates.bleeding_edge', 1); ?> />
									<span><?php echo lang('bf_update_show_edge') ?></span>
									<p class="help-block"><?php echo lang('bf_update_info_edge') ?></p>
								</label>
							</div>
						</div>

					</fieldset>
				</div>
				<!-- End of Developer Tab Options Pane -->
			<?php endif;
				if ($show_extended_settings) :
			?>
				<!-- Start of Extended Settings Tab Pane -->
				<div class='tab-pane' id='extended'>
					<fieldset>
						<legend><?php echo lang('set_option_extended'); ?></legend>
				<?php
					foreach ($extended_settings as $field)
					{
						if ( empty($field['permission'])
							|| $field['permission'] === FALSE
							|| ( ! empty($field['permission']) && has_permission($field['permission']))
							)
						{
							$form_error_class = form_error($field['name']) ? ' error' : '';
							$field_control = '';

							if ($field['form_detail']['type'] == 'dropdown')
							{
								echo form_dropdown($field['form_detail']['settings'], $field['form_detail']['options'], set_value($field['name'], isset($settings['ext.' . $field['name']]) ? $settings['ext.' . $field['name']] : ''), $field['label']);
							}
							elseif ($field['form_detail']['type'] == 'checkbox')
							{
								$field_control = form_checkbox($field['form_detail']['settings'], $field['form_detail']['value'], isset($settings['ext.' . $field['name']]) && $field['form_detail']['value'] == $settings['ext.' . $field['name']] ? TRUE : FALSE);
							}
							elseif ($field['form_detail']['type'] == 'state_select')
							{
								if ( ! is_callable('state_select'))
								{
									$this->load->config('address');
									$this->load->helper('address');
								}
								$field_control = state_select(isset($settings['ext.' . $field['name']]) ? $settings['ext.' . $field['name']] : 'CA', 'CA', 'US', $field['name'], 'form-control chzn-select');
							}
							elseif ($field['form_detail']['type'] == 'country_select')
							{
								if ( ! is_callable('country_select'))
								{
									$this->load->config('address');
									$this->load->helper('address');
								}
								$field_control = country_select(set_value($field['name'], isset($settings['ext.' . $field['name']]) ? $settings['ext.' . $field['name']] : 'US'), 'US', $field['name'], 'form-control chzn-select');
							}
							else
							{
								$form_method = 'form_' . $field['form_detail']['type'];
								if (is_callable($form_method))
								{
									echo $form_method($field['form_detail']['settings'], set_value($field['name'], isset($settings['ext.' . $field['name']]) ? $settings['ext.' . $field['name']] : ''), $field['label']);
								}
							}

							if ( ! empty($field_control)) :
						?>
								<div class="form-group<?php echo $form_error_class; ?>">
									<label class="col-xs-2 control-label" for="<?php echo $field['name']; ?>"><?php echo $field['label']; ?></label>
									<div class="col-xs-5">
										<?php echo $field_control; ?>
									</div>
								</div>
						<?php
							endif;
						}
					}
				?>
					</fieldset>
				</div>
			<?php endif; ?>
			</div>
		</div>

		<div class="form-actions">
			<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('bf_action_save') . ' ' . lang('bf_context_settings'); ?>" />
		</div>

	<?php echo form_close(); ?>
</div><!-- /admin-box -->