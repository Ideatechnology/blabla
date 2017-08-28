

<h1>CAPTCHA Helper</h1>

<p>The CAPTCHA Helper file contains functions that assist in creating CAPTCHA images.</p>


<h2>Loading this Helper</h2>

<p>This helper is loaded using the following code:</p>
<code>$this->load->helper('captcha');</code>

<p>The following functions are available:</p>

<h2>create_captcha(<var>$data</var>)</h2>

<p>Takes an array of information to generate the CAPTCHA as input and creates the image to your specifications, returning an array of associative data about the image.</p>

<code>[array]<br />
(<br />
&nbsp;&nbsp;'image' => IMAGE TAG<br />
&nbsp;&nbsp;'time'	=> TIMESTAMP (in microtime)<br />
&nbsp;&nbsp;'word'	=> CAPTCHA WORD<br />
)</code>

	<p>The "image" is the actual image tag:
<code>&lt;img src=&quot;http://example.com/captcha/12345.jpg&quot; width=&quot;140&quot; height=&quot;50&quot; /&gt;</code></p>

	<p>The "time" is the micro timestamp used as the image name without the file
	extension.  It will be a number like this:  1139612155.3422</p>

	<p>The "word" is the word that appears in the captcha image, which if not
	supplied to the function, will be a random string.</p>

	<h3>Using the CAPTCHA helper</h3>

	<p>Once loaded you can generate a captcha like this:</p>

<code>$vals = array(<br />
&nbsp;&nbsp;&nbsp;&nbsp;'word'		 => 'Random word',<br />
&nbsp;&nbsp;&nbsp;&nbsp;'img_path'	 => './captcha/',<br />
&nbsp;&nbsp;&nbsp;&nbsp;'img_url'	 => 'http://example.com/captcha/',<br />
&nbsp;&nbsp;&nbsp;&nbsp;'font_path'	 => './path/to/fonts/texb.ttf',<br />
&nbsp;&nbsp;&nbsp;&nbsp;'img_width'	 => '150',<br />
&nbsp;&nbsp;&nbsp;&nbsp;'img_height' => 30,<br />
&nbsp;&nbsp;&nbsp;&nbsp;'expiration' => 7200<br />
&nbsp;&nbsp;&nbsp;&nbsp;);<br />
<br />
$cap = create_captcha($vals);<br />
echo $cap['image'];</code>

	<ul>
		<li>The captcha function requires the GD image library.</li>
		<li>Only the img_path and img_url are required.</li>
		<li>If a "word" is not supplied, the function will generate a random
		ASCII string.  You might put together your own word library that
		you can draw randomly from.</li>
		<li>If you do not specify a path to a TRUE TYPE font, the native ugly GD
		font will be used.</li>
		<li>The "captcha" folder must be writable (666, or 777)</li>
		<li>The "expiration" (in seconds) signifies how long an image will
		remain in the captcha folder before it will be deleted.  The default
		is two hours.</li>
	</ul>

	<h3>Adding a Database</h3>

	<p>In order for the captcha function to prevent someone from submitting, you will need
	to add the information returned from <kbd>create_captcha()</kbd> function to your database.
	Then, when the data from the form is submitted by the user you will need to verify
	that the data exists in the database and has not expired.</p>

	<p>Here is a table prototype:</p>

<code>CREATE TABLE captcha (<br />
&nbsp;captcha_id bigint(13) unsigned NOT NULL auto_increment,<br />
&nbsp;captcha_time int(10) unsigned NOT NULL,<br />
&nbsp;ip_address varchar(16) default '0' NOT NULL,<br />
&nbsp;word varchar(20) NOT NULL,<br />
&nbsp;PRIMARY KEY `captcha_id` (`captcha_id`),<br />
&nbsp;KEY `word` (`word`)<br />
);</code>

	<p>Here is an example of usage with a database.  On the page where the CAPTCHA will be shown you'll have something like this:</p>

<code>$this-&gt;load-&gt;helper(&#x27;captcha&#x27;);<br />
$vals = array(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#x27;img_path&#x27;	 =&gt; &#x27;./captcha/&#x27;,<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#x27;img_url&#x27;	 =&gt; &#x27;http://example.com/captcha/&#x27;<br />
&nbsp;&nbsp;&nbsp;&nbsp;);<br />
<br />
$cap = create_captcha($vals);<br />
<br />
$data = array(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#x27;captcha_time&#x27;	=&gt; $cap[&#x27;time&#x27;],<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#x27;ip_address&#x27;	=&gt; $this-&gt;input-&gt;ip_address(),<br />
&nbsp;&nbsp;&nbsp;&nbsp;&#x27;word&#x27;			=&gt; $cap[&#x27;word&#x27;]<br />
&nbsp;&nbsp;&nbsp;&nbsp;);<br />
<br />
$query = $this-&gt;db-&gt;insert_string(&#x27;captcha&#x27;, $data);<br />
$this-&gt;db-&gt;query($query);<br />
<br />
echo &#x27;Submit the word you see below:&#x27;;<br />
echo $cap[&#x27;image&#x27;];<br />
echo &#x27;&lt;input type=&quot;text&quot; name=&quot;captcha&quot; value=&quot;&quot; /&gt;&#x27;;</code>

	<p>Then, on the page that accepts the submission you'll have something like this:</p>

<code>// First, delete old captchas<br />
$expiration = time()-7200; // Two hour limit<br />
$this-&gt;db-&gt;query(&quot;DELETE FROM captcha WHERE captcha_time &lt; &quot;.$expiration);	<br />
<br />
// Then see if a captcha exists:<br />
$sql = &quot;SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time &gt; ?&quot;;<br />
$binds = array($_POST[&#x27;captcha&#x27;], $this-&gt;input-&gt;ip_address(), $expiration);<br />
$query = $this-&gt;db-&gt;query($sql, $binds);<br />
$row = $query-&gt;row();<br />
<br />
if ($row-&gt;count == 0)<br />
{<br />
&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;You must submit the word that appears in the image&quot;;<br />
}</code>