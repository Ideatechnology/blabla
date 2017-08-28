<h1>Output Class</h1>

<p>The Output class is a small class with one main function:  To send the finalized web page to the requesting browser.  It is
also responsible for <a href="../general/caching.html">caching</a> your web pages, if you use that feature.</p>

<p class="important"><strong>Note:</strong> This class is initialized automatically by the system so there is no need to do it manually.</p>

<p>Under normal circumstances you won't even notice the Output class since it works transparently without your intervention.
For example, when you use the <a href="../libraries/loader.html">Loader</a> class to load a view file, it's automatically
passed to the Output class, which will be called automatically by CodeIgniter at the end of system execution.
It is possible, however, for you to manually intervene with the output if you need to, using either of the two following functions:</p>

<h2>$this->output->set_output();</h2>

<p>Permits you to manually set the final output string.  Usage example:</p>

<code>$this->output->set_output($data);</code>

<p><strong>Important:</strong> If you do set your output manually, it must be the last thing done in the function you call it from.
For example, if you build a page in one of your controller functions, don't set the output until the end.</p>


<h2>$this->output->set_content_type();</h2>

<p>Permits you to set the mime-type of your page so you can serve JSON data, JPEG's, XML, etc easily.</p>

<code>$this->output<br/>
&nbsp;&nbsp;&nbsp;&nbsp;->set_content_type('application/json')<br/>
&nbsp;&nbsp;&nbsp;&nbsp;->set_output(json_encode(array('foo' => 'bar')));<br/>
<br/>
$this->output<br/>
&nbsp;&nbsp;&nbsp;&nbsp;->set_content_type('jpeg') // You could also use ".jpeg" which will have the full stop removed before looking in config/mimes.php<br/>
&nbsp;&nbsp;&nbsp;&nbsp;->set_output(file_get_contents('files/something.jpg'));</code>

<p><strong>Important:</strong> Make sure any non-mime string you pass to this method exists in config/mimes.php or it will have no effect.</p>


<h2>$this->output->get_output();</h2>

<p>Permits you to manually retrieve any output that has been sent for storage in the output class.  Usage example:</p>
<code>$string = $this->output->get_output();</code>

<p>Note that data will only be retrievable from this function if it has been previously sent to the output class by one of the
CodeIgniter functions like <var>$this->load->view()</var>.</p>


<h2>$this->output->append_output();</h2>

<p>Appends data onto the output string.  Usage example:</p>

<code>$this->output->append_output($data);</code>



<h2>$this->output->set_header();</h2>

<p>Permits you to manually set server headers, which the output class will send for you when outputting the final rendered display.  Example:</p>

<code>
$this->output->set_header("HTTP/1.0 200 OK");<br />
$this->output->set_header("HTTP/1.1 200 OK");<br />
$this->output->set_header('Last-Modified: '.gmdate('D, d M Y H:i:s', $last_update).' GMT');<br />
$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");<br />
$this->output->set_header("Cache-Control: post-check=0, pre-check=0");<br />
$this->output->set_header("Pragma: no-cache");	</code>


<h2>$this->output->set_status_header(<var>code</var>, '<var>text</var>');</h2>

<p>Permits you to manually set a server status header.  Example:</p>

<code>$this->output->set_status_header('401');<br />
// Sets the header as:  Unauthorized</code>

<p><a href="http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html">See here</a> for a full list of headers.</p>

<h2>$this->output->enable_profiler();</h2>

<p>Permits you to enable/disable the <a href="../general/profiling.html">Profiler</a>, which will display benchmark and other data
at the bottom of your pages for debugging and optimization purposes.</p>

<p>To enable the profiler place the following function anywhere within your <a href="../general/controllers.html">Controller</a> functions:</p>
<code>$this->output->enable_profiler(TRUE);</code>

<p>When enabled a report will be generated and inserted at the bottom of your pages.</p>

<p>To disable the profiler you will use:</p>
<code>$this->output->enable_profiler(FALSE);</code>

<h2>$this->output->set_profiler_sections();</h2>

<p>Permits you to enable/disable specific sections of the Profiler when enabled.  Please refer to the <a href="../general/profiling.html">Profiler</a> documentation for further information.</p>

<h2>$this->output->cache();</h2>
<p>The CodeIgniter output library also controls caching.  For more information, please see the <a href="../general/caching.html">caching documentation</a>.</p>

<h2>Parsing Execution Variables</h2>

	<p>CodeIgniter will parse the pseudo-variables <var>{elapsed_time}</var> and <var>{memory_usage}</var> in your output by default.  To disable this, set the <var>$parse_exec_vars</var> class property to <var>FALSE</var> in your controller.

	<code>$this->output->parse_exec_vars = FALSE;</code>
