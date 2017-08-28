
<h1>Application Flow Chart</h1>

<p>The following graphic illustrates how data flows throughout the system:</p>

<div><img src="<?php echo Template::theme_url('images/appflowchart.gif');?>" width="769" height="212" alt="CodeIgniter application flow"></div>


<ol>
<li>The index.php serves as the front controller, initializing the base resources needed to run CodeIgniter.</li>
<li>The Router examines the HTTP request to determine what should be done with it.</li>
<li>If a cache file exists, it is sent directly to the browser, bypassing the normal system execution.</li>
<li>Security.  Before the application controller is loaded, the HTTP request and any user submitted data is filtered for security.</li>
<li>The Controller loads the model, core libraries, helpers, and any other resources needed to process the specific request.</li>
<li>The finalized View is rendered then sent to the web browser to be seen. If caching is enabled, the view is cached first so
that on subsequent requests it can be served.</li>
</ol>