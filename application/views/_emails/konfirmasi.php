
<p>Customer dengan nama <?php echo $data["nama"]; ?> telah melakukan konfirmasi pembayaran 
dengan rincian berikut : </p>

<table style='border-collapse: collapse;'>
<tr>
<td style='padding:10px;'>No Order</td>
<td style='padding:10px;'>: <?php echo $data["no_order"];?></td>
</tr>
<tr>
<td style='padding:10px;'>Email</td>
<td style='padding:10px;'>: <?php echo $data["email"];?></td>
</tr>
<tr>
<td style='padding:10px;'>Tanggal Transfer</td>
<td style='padding:10px;'>: <?php echo tgl_indo($data["tanggal"]);?></td>
</tr>
<tr>
<td style='padding:10px;'>Nilai Transfer</td>
<td style='padding:10px;'>: <?php echo format_rupiah($data["nilai"]);?></td>
</tr>
<tr>
<td style='padding:10px;'>Asal Bank</td>
<td style='padding:10px;'>: <?php echo $data["asal_bank"];?></td>
</tr>
<tr>
<td style='padding:10px;'>Tujuan Bank</td>
<td style='padding:10px;'>: <?php echo $data["tujuan_bank"];?></td>
</tr>
<tr>
<td style='padding:10px;'>Catatan</td>
<td style='padding:10px;'>: <?php echo $data["catatan"];?></td>
</tr>
</table>

