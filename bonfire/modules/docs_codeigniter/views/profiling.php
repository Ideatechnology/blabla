ng Your Application</h1>

<p>The Profiler Class will display benchmark results, queries you have run, and $_POST data at the bottom of your pages.
This information can be useful during development in order to help with debugging and optimization.</p>


<h2>Initializing the Class</h2>

<p class="important"><strong>Important:</strong>&nbsp; This class does <kbd>NOT</kbd> need to be initialized. It is loaded automatically by the
<a href="../libraries/output.html">Output Class</a> if profiling is enabled as shown below.</p>

<h2>Enabling the Profiler</h2>

	<p>To enable the profiler place the following function anywhere within your <a href="controllers.html">Controller</a> functions:</p>
	<code>$this->output->enable_profiler(TRUE);</code>

	<p>When enabled a report will be generated and inserted at the bottom of your pages.</p>

	<p>To disable the profiler you will use:</p>
	<code>$this->output->enable_profiler(FALSE);</code>


<h2>Setting Benchmark Points</h2>

	<p>In order for the Profiler to compile and display your benchmark data you must name your mark points using specific syntax.</p>

	<p>Please read the information on setting Benchmark points in <a href="../libraries/benchmark.html">Benchmark Class</a> page.</p>


<h2>Enabling and Disabling Profiler Sections</h2>

	<p>Each section of Profiler data can be enabled or disabled by setting a corresponding config variable to <var>TRUE</var> or <var>FALSE</var>.  This can be done one of two ways.  First, you can set application wide defaults with the <dfn>application/config/profiler.php</dfn> config file.</p>

	<code>$config['config']&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= FALSE;<br />
	$config['queries']&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= FALSE;<br /></code>

	<p>In your controllers, you can override the defaults and config file values by calling the <kbd>set_profiler_sections()</kbd> method of the <a href="../libraries/output.html">Output class</a>:</p>

	<code>$sections = array(<br />
	&nbsp;&nbsp;&nbsp;&nbsp;'config' &nbsp;=> TRUE,<br />
	&nbsp;&nbsp;&nbsp;&nbsp;'queries' => TRUE<br />
	&nbsp;&nbsp;&nbsp;&nbsp;);<br />
	<br />
	$this->output->set_profiler_sections($sections);</code>

	<p>Available sections and the array key used to access them are described in the table below.</p>

	<table cellpadding="0" cellspacing="1" border="0" style="width:100%" class="tableborder">
		<tr>
			<th>Key</th>
			<th>Description</th>
			<th>Default</th>
		</tr>
		<tr>
			<td class="td"><strong>benchmarks</strong></td>
			<td class="td">Elapsed time of Benchmark points and total execution time</td>
			<td class="td">TRUE</td>
		</tr>
		<tr>
			<td class="td"><strong>config</strong></td>
			<td class="td">CodeIgniter Config variables</td>
			<td class="td">TRUE</td>
		</tr>
		<tr>
			<td class="td"><strong>controller_info</strong></td>
			<td class="td">The Controller class and method requested</td>
			<td class="td">TRUE</td>
		</tr>
		<tr>
			<td class="td"><strong>get</strong></td>
			<td class="td">Any GET data passed in the request</td>
			<td class="td">TRUE</td>
		</tr>
		<tr>
			<td class="td"><strong>http_headers</strong></td>
			<td class="td">The HTTP headers for the current request</td>
			<td class="td">TRUE</td>
		</tr>
		<tr>
			<td class="td"><strong>memory_usage</strong></td>
			<td class="td">Amount of memory consumed by the current request, in bytes</td>
			<td class="td">TRUE</td>
		</tr>
		<tr>
			<td class="td"><strong>post</strong></td>
			<td class="td">Any POST data passed in the request</td>
			<td class="td">TRUE</td>
		</tr>
		<tr>
			<td class="td"><strong>queries</strong></td>
			<td class="td">Listing of all database queries executed, including execution time</td>
			<td class="td">TRUE</td>
		</tr>
		<tr>
			<td class="td"><strong>uri_string</strong></td>
			<td class="td">The URI of the current request</td>
			<td class="td">TRUE</td>
		</tr>
		<tr>
			<td class="td"><strong>query_toggle_count</strong></td>
			<td class="td">The number of queries after which the query block will default to hidden.</td>
			<td class="td">25</td>
		</tr>
	</table>

