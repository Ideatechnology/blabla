
<?php echo theme_view('partials/_header'); ?>

  <nav class="navbar-default  navbar-static-side" role="navigation" style="background-color: #fff;" >
            <div class="sidebar-collapse">

				<?php echo Contexts::render_menu('text', 'normal'); ?>
				
			
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->
		
				<div style="position: inherit;
margin: 0 0 0 250px;
">
		<?php echo theme_view('partials/_subnav'); ?>
	
		
		</div>
		
	 <div id="page-wrapper">
	<div class="row">
		<?php echo form_open_multipart($this->uri->uri_string(), 'class="form-vertical"'); ?>
       <div class="col-lg-9" style="margin-top:10px;">
			<?php echo Template::message(); ?>

			 <?php echo isset($content) ? $content : Template::content(); ?>

		</div>

		<div class="col-lg-3" style="margin-top:10px;">
        <?php echo Template::block('sidebar'); ?>
			
		</div>
        
	<?php echo form_close(); ?>
	</div>
	</div>

<?php echo theme_view('partials/_footer'); ?>