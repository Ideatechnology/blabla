
</div>
    <!-- /#wrapper -->

	<div id="debug"><!-- Stores the Profiler Results --></div>

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script>window.jQuery || document.write('<script src="<?php echo js_path(); ?>jquery-1.7.2.min.js"><\/script>')</script>
	
   <script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
	<script src="<?php echo base_url(); ?>assets/ckfinder/ckfinder.js"></script>
	
  <?php
	Assets::add_js( array( 'bootstrap.min.js', 'jwerty.js','plugins/metisMenu/jquery.metisMenu.js','plugins/morris/raphael-2.1.0.min.js'
	,'plugins/dataTables/jquery.dataTables.js','plugins/dataTables/dataTables.bootstrap.js','sb-admin.js'), 'external', true);
	
?>
  
	<?php echo Assets::js(); ?>
</body>
</html>
