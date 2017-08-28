<?php /* /bonfire/modules/users/views/user_fields.php */

$currentMethod = $this->router->fetch_method();

$errorClass     = empty($errorClass) ? ' has-error' : $errorClass;
$controlClass   = empty($controlClass) ? 'form-control' : $controlClass;
$registerClass  = $currentMethod == 'register' ? ' required' : '';
$editSettings   = $currentMethod == 'edit';

$defaultLanguage = isset($user->language) ? $user->language : strtolower(settings_item('language'));
$defaultTimezone = isset($current_user) ? $current_user->timezone : strtoupper(settings_item('site.default_user_timezone'));

?>
<div class="form-group <?php echo iif(form_error('email'), $errorClass); ?>">
    <label class="control-label required" for="email"><?php echo lang('bf_email'); ?> *</label>
    <div >
        <input class="<?php echo $controlClass; ?>" required type="email" id="email" name="email" value="<?php echo set_value('email', isset($user) ? $user->email : ''); ?>" />
        <span class="hash-error"><?php echo form_error('email'); ?></span>
    </div>
</div>
<?php if (settings_item('auth.login_type') !== 'email' OR settings_item('auth.use_usernames')) : ?>
<div class="form-group <?php echo iif(form_error('username'), $errorClass); ?>">
    <label class="control-label required" for="username"><?php echo lang('bf_username'); ?> *</label>
    <div class="">
        <input class="<?php echo $controlClass; ?>" required type="text" id="username" name="username" value="<?php echo set_value('username', isset($user) ? $user->username : ''); ?>" />
        <span class="hash-error"><?php echo form_error('username'); ?></span>
    </div>
</div>
<?php endif; ?>

<div class="form-group <?php echo iif(form_error('display_name'), $errorClass); ?>">
    <label class="control-label" for="display_name"><?php echo lang('bf_display_name'); ?> *</label>
    <div class="">
        <input class="<?php echo $controlClass; ?>" required type="text" id="display_name" name="display_name" value="<?php echo set_value('display_name', isset($user) ? $user->display_name : ''); ?>" />
        <span class="hash-error"><?php echo form_error('display_name'); ?></span>
    </div>
</div>
<div class="form-group <?php echo iif(form_error('password'), $errorClass); ?>">
    <label class="control-label<?php echo $registerClass; ?>" for="password"><?php echo lang('bf_password'); ?> *</label>
    <div class="">
        <input class="<?php echo $controlClass; ?>" required type="password" id="password" name="password" value="" />
        <span class="hash-error"><?php echo form_error('password'); ?></span>

    </div>
</div>
<div class="form-group <?php echo iif(form_error('pass_confirm'), $errorClass); ?>">
    <label class=" control-label<?php echo $registerClass; ?>" for="pass_confirm"><?php echo lang('bf_password_confirm'); ?> *</label>
    <div class="">
        <input class="<?php echo $controlClass; ?>" required type="password" id="pass_confirm" name="pass_confirm" value="" />
        <span class="hash-error"><?php echo form_error('pass_confirm'); ?></span>
    </div>
</div>


<input type="hidden" id="language" name="language" value="english" />
<input type="hidden" id="timezones" name="timezones" value="UM8" />


