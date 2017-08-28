<?php /* /bonfire/modules/users/views/user_fields.php */

$currentMethod = $this->router->fetch_method();

$errorClass     = empty($errorClass) ? ' has-error' : $errorClass;
$controlClass   = empty($controlClass) ? 'form-control' : $controlClass;
$registerClass  = $currentMethod == 'register' ? ' required' : '';
$editSettings   = $currentMethod == 'edit';

?>
<div class="form-group">
    <span class="col-xs-2 text-right"><strong><?php echo lang('bf_email'); ?> :</strong></span>
    <div class="col-xs-5 ">
        <?php echo $user->email ?>
    </div>
</div>
<div class="form-group <?php echo iif(form_error('display_name'), $errorClass); ?>">
    <span class="col-xs-2 text-right"><strong><?php echo lang('bf_display_name'); ?> :</strong></span>
    <div class="col-xs-5">
        <?php echo $user->display_name;?>
    </div>
</div>

<div class="form-group">
    <label class="col-xs-2 text-right"><?php echo lang('bf_username'); ?> :</label>
    <div class="col-xs-5">
       <?php echo $user->username;?>
    </div>
</div>


<div class="form-group">
<label class="col-xs-2 text-right"><?php echo lang('user_meta_provinsi'); ?> :</label>
    <div class="col-xs-5">
<?php $prov= $this->db->query("select * from bf_provinsi where kode='".$user->provinsi."'")->row();?>    
<?php echo count($prov)>0?$prov->nama:""; ?>
</div>
</div>

<div class="form-group">
<label class="col-xs-2 text-right"><?php echo lang('user_meta_kota'); ?> :</label>
    <div class="col-xs-5">
<?php $kota= $this->db->query("select * from bf_kota where id_kota='".$user->kota."'")->row();?>	
<?php echo count($kota)>0?$kota->nama_kota:""; ?>
</div>
</div>


<div class="form-group">
<label class="col-xs-2 text-right">No. Rekening * :</label>
    <div class="col-xs-5">
<?php echo $user->no_rekening; ?>
</div>
</div>

<div class="form-group">
<label class="col-xs-2 text-right">Bank * :</label>
    <div class="col-xs-5">
<?php echo $user->bank; ?>
</div>
</div>


<div class="form-group">
<label class="col-xs-2 text-right">Nama Pemilik Bank * :</label>
    <div class="col-xs-5">
<?php echo $user->nama_pemilik_bank; ?>
</div>
</div>






