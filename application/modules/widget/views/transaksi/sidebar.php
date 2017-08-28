	
  <?php 
   $inline  = '$(document).ready(function(){
   $("#contentbar").mCustomScrollbar({
					scrollButtons:{
						enable:true
					}
				})
				});';
    Assets::add_js( $inline, 'inline' );
   ?>
   
<div class="admin-box">
<h3>Referensi Widgets</h3>
<fieldset>
<legend>Available Widgets For Webpages Layout</legend>
<em>&nbsp;Drag dan Drop widget dibawah ini, untuk melakukan setting layout yang anda inginkan</em>
 
<div id="contentbar2" style="height:246px;overflow: auto;"> 
 
<div class="column" id="columnindex">
         
        <div class="dragbox" id="item1" reference="page_post" >
            <h2>Page Post</h2>
			<div class="dragbox-content" style="display:none;" reference="page_post">
                  <?php  $this->widget_get->widget_forms('page_post'); ?>
	        </div>
            <span class="control">Widget ini untuk menampilkan Post Berita, Artikel, Agenda dll.</span>
		</div>
         
		<div class="dragbox" id="item2" reference="page_tabs">
			<h2>Tabs Panel</h2>
			<div class="dragbox-content" style="display:none;">
				<?php  $this->widget_get->widget_forms('page_tabs'); ?>
			</div>
            <span class="control">Widget ini untuk menampilkan Postingan berbentuk Tabs Panel.</span>
		</div>
        
		<div class="dragbox" id="item3"  reference="page_multimedia">
			<h2>Multimedia</h2>
			<div class="dragbox-content" style="display:none;">
				Form disini
			</div>
            <span class="control">Widget ini untuk menampilkan Multimedia.</span>
		</div>
        
        
        <div class="dragbox" id="item4" reference="page_polling">
			<h2>Polling</h2>
			<div class="dragbox-content"  style="display:none;">
				<?php $this->widget_get->widget_forms('page_polling'); ?>
			</div>
            <span class="control">Widget ini untuk menampilkan Polling di layout page.</span>
		</div>
        
        <div class="dragbox" id="item5" reference="page_agenda">
			<h2>Agenda</h2>
			<div class="dragbox-content" style="display:none;">
				Form disini
			</div>
            <span class="control">Widget Ini akan menambahkan Fitur Agenda.</span>
		</div>
        
        
         <div class="dragbox" id="item6" reference="page_text">
			<h2>Text</h2>
			<div class="dragbox-content"  style="display:none;">
				<?php $this->widget_get->widget_forms('page_text'); ?>
			</div>
            <span class="control">Tambahkan Tulisan atau text Non HTML.</span>
		</div>
        
        
         <div class="dragbox" id="item7" reference="page_social">
			<h2>Social Media</h2>
			<div class="dragbox-content"  style="display:none;">
				Form disini
			</div>
            <span class="control">Widget ini untuk menampilkan Social Media </span>
		</div>
        
        <div class="dragbox" id="item8" reference="page_blogroll">
			<h2>Blogroll</h2>
			<div class="dragbox-content"  style="display:none;">
				 <?php $this->widget_get->widget_forms('page_blogroll'); ?>
			</div>
            <span class="control">Widget ini akan menampilkan daftar link Blogroll.</span>
		</div>
        
         <div class="dragbox" id="item9"  reference="last_googlescript">
			<h2>Google Script</h2>
			<div class="dragbox-content"  style="display:none;">
				Form disini
			</div>
            <span class="control">Widget Ini akan menambahkan Fitur Google i.e(Search, Language) dll.</span>
		</div>
        
        <div class="dragbox" id="item10" reference="last_post">
			<h2>Last News</h2>
			<div class="dragbox-content"   style="display:none;" >
				<?php  $this->widget_get->widget_forms('last_post'); ?>
			</div>
            <span class="control">Widget Ini akan menambahkan Archive Post. </span>
		</div>
       
         <div class="dragbox" id="item11" reference="page_arsip">
			<h2>Arsip</h2>
			<div class="dragbox-content"   style="display:none;" >
				<?php  $this->widget_get->widget_forms('page_arsip'); ?>
			</div>
            <span class="control">Widget Ini akan menambahkan Arsip. </span>
		</div>
        
        <div class="dragbox" id="item12" reference="page_foto">
			<h2>Galeri Foto</h2>
			<div class="dragbox-content"   style="display:none;" >
				<?php  $this->widget_get->widget_forms('page_foto'); ?>
			</div>
            <span class="control">Widget Ini akan menambahkan Galeri Foto. </span>
		</div>
        
        <div class="dragbox" id="item13" reference="page_kontak">
			<h2>Contact Us</h2>
			<div class="dragbox-content"  style="display:none;" >
				<?php  $this->widget_get->widget_forms('page_kontak'); ?>
			</div>
            <span class="control">Widget Ini akan menambahkan Kontak web. </span>
		</div>
        
         <div class="dragbox" id="item14" reference="page_banners">
			<h2>Banners</h2>
			<div class="dragbox-content"  style="display:none;" >
				<?php  $this->widget_get->widget_forms('page_banners'); ?>
			</div>
            <span class="control">Widget Ini akan menambahkan galeri Banner. </span>
		</div>
        
         <div class="dragbox" id="item15" reference="page_scrolltext">
			<h2>ScrollText</h2>
			<div class="dragbox-content"  style="display:none;" >
				<?php  $this->widget_get->widget_forms('page_scrolltext'); ?>
			</div>
            <span class="control">Widget Ini akan menambahkan ScrollText. </span>
		</div>
        
        <div class="dragbox" id="item16" reference="page_buletin">
			<h2>Buletin Media</h2>
			<div class="dragbox-content"  style="display:none;" >
				<?php  $this->widget_get->widget_forms('page_buletin'); ?>
			</div>
            <span class="control">Widget Ini akan menambahkan Buletin Media. </span>
		</div>
        
	</div>
</div>

</fieldset>
</div>	
 