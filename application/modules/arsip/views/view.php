<html>
<head>
<title><?php echo lang('file_judulundang');?></title>
</head>
<body>

<object data="<?php echo base_url();?>dmdocuments/<?php echo $arsip->file_data;?>" type="application/pdf" width="100%" height="100%">
  <p>Alternative text - include a link <a href="<?php echo base_url();?>dmdocuments/<?php echo $arsip->file_data;?>">to the PDF!</a></p>
</object>
</body>
</html>
				  