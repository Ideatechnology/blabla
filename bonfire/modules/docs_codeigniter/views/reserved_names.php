

<!-- START CONTENT -->
<div id="content">

<h1>Reserved Names</h1>

<p>In order to help out, CodeIgniter uses a series of functions and names in its operation. Because of this, some names cannot be used by a developer. Following is a list of reserved names that cannot be used.</p>
<h3>Controller names</h3>
<p>Since your controller classes will extend the main application controller you
must be careful not to name your functions identically to the ones used by that class, otherwise your local functions
will override them.  The following
is a list of reserved names.  Do not name your controller any of these:</p>
<ul>
	<li>Controller</li>
	<li>CI_Base</li>
	<li>_ci_initialize</li>
	<li>Default</li>
	<li>index</li>
</ul>
<h3>Functions</h3>
<ul>
	<li>is_really_writable()</li>
	<li>load_class()</li>
	<li>get_config()</li>
	<li>config_item()</li>
	<li>show_error()</li>
	<li>show_404()</li>
	<li>log_message()</li>
	<li>_exception_handler()</li>
	<li>get_instance()</li>
	</ul>
<h3>Variables</h3>
<ul>
	<li>$config</li>
	<li>$mimes</li>
	<li>$lang</li>
</ul>
<h3>Constants</h3>
<ul>
	<li>ENVIRONMENT</li>
	<li>EXT</li>
	<li>FCPATH</li>
	<li>SELF</li>
	<li>BASEPATH</li>
	<li>APPPATH</li>
	<li>CI_VERSION</li>
	<li>FILE_READ_MODE</li>
	<li>FILE_WRITE_MODE</li>
	<li>DIR_READ_MODE</li>
	<li>DIR_WRITE_MODE</li>
	<li>FOPEN_READ</li>
	<li>FOPEN_READ_WRITE</li>
	<li>FOPEN_WRITE_CREATE_DESTRUCTIVE</li>
	<li>FOPEN_READ_WRITE_CREATE_DESTRUCTIVE</li>
	<li>FOPEN_WRITE_CREATE</li>
	<li>FOPEN_READ_WRITE_CREATE</li>
	<li>FOPEN_WRITE_CREATE_STRICT</li>
	<li>FOPEN_READ_WRITE_CREATE_STRICT</li>
</ul>