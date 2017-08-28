   <table cellpadding='10' class='table' style='font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;
    border-collapse: collapse;'>
	<tr>
          <td>Tanggal</td> 
		  <td> : <?php echo tgl_indo(date("Y-m-d")); ?> Jam <?php echo date("H:i");?></td>
		  </tr>
		  	<tr>
          <td>Nama Lengkap</td> 
		  <td> : <?php echo $meta_current_user->display_name;?></td>
		  </tr>
		  		  	<tr>
          <td>No. Rekening</td> 
		  <td> : <?php echo $user->no_rekening;?></td>
		  </tr>
		  	  	<tr>
          <td>Email</td> 
		  <td> : <?php echo $user->email;?></td>
		  </tr>
		  <tr>
          <td>Phone</td> 
		  <td> : <?php echo $meta_current_user->phone;?></td>
		  </tr>
		  </table>
 
 <h2>Detail Pembayaran Affaliate</h2>
  <table style='font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;
    border-collapse: collapse;'>
        <tr>
		<th style=' font-size: 1.1em;
    text-align: left;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #A7C942;
    color: #ffffff;'>Total Pay Click</th>
		<th style=' font-size: 1.1em;
    text-align: left;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #A7C942;
    color: #ffffff;'>Total Pay Buy</th>
		<th style=' font-size: 1.1em;
    text-align: left;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #A7C942;
    color: #ffffff;'>Grand Total</th>
	
		</tr>
<tr>
				<td style='font-size: 1em;
    border: 1px solid #98bf21;
    padding: 3px 7px 2px 7px;'><?php echo format_rupiah($payclick);?></td>
				<td style='font-size: 1em;
    border: 1px solid #98bf21;
    padding: 3px 7px 2px 7px;'><?php echo format_rupiah($paybuy);?></td>
				<td style='font-size: 1em;
    border: 1px solid #98bf21;
    padding: 3px 7px 2px 7px;' align=center><?php echo format_rupiah($total);?></td>
				
		</table>