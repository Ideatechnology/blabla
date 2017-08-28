<?php echo form_open($this->uri->uri_string()."", 'class="form-horizontal"'); ?>
 
 <div style="padding-left:5px; padding-right:5px; padding-top:6px;">
   <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="30%">Categorie Name</td>
        <td width="70%"> 
          <input type="text" name="kategori" id="kategori" value="<?php echo isset($value->kategori) ? $value->kategori :'' ; ?>" style="height:23px;">
        </td>
      </tr>
      <tr>
        <td colspan="2"><em>Masukkan "kategori" yang anda inginkan</em></td>
      </tr>
      <tr>
        <td>Description</td>
        <td><textarea name="ket" id="ket" style="height:73px;"><?php echo isset($value->ket) ? $value->ket :'' ; ?></textarea></td>
      </tr>
      <tr>
        <td colspan="2"><em> Deskripsikan Kategori Yang anda miliki (Optional)</em>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input name="newKategory" type="submit" class="btn btn-primary" value="<?php echo isset($value->id) ? 'Update Categories' :'Add New Categories' ; ?>" /></td>
      </tr>
    </table>
 <?php echo form_close();?>