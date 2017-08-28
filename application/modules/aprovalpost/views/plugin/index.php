<table class="table table-striped table-bordered">
<thead>
  <tr>
      <th>Judul</th>
       <th>Tanggal</th>
      <th>SKPD</th>
      <th>Aksi</th>

  </tr>
</thead>

<?php if($resultberita):
         ?>
        <tbody>
        <?php foreach($resultberita as $resultberita_row): ?>
        <tr>
          <td>
            <a target="_blank" href="<?php echo $resultberita_row["url"].'/blog/'.$resultberita_row["id"].'-'.url_title($resultberita_row["judul"],'dash');?>">
            <?php echo $resultberita_row["judul"];?>
          </a>
          </td>
          <td><?php echo date("d M Y",strtotime($resultberita_row["created_on"]));?> Jam <?php echo date("H:i",strtotime($resultberita_row["created_on"]));?></td>
          <td><?php echo $resultberita_row["nama_situs"];?></td>
         <td><a href="<?php echo site_url("admin/plugin/aprovalpost/edit?id=".$resultberita_row["id"]."&database=".$resultberita_row["nama_db"]);?>" class="btn btn-primary" onclick="return confirm('apakah yakin akan diapprove?')">Approve</a></td>
        </tr>
         
        <?php endforeach; ?>
</tbody>
</table>
      <?php endif; ?>
