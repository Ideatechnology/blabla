
<h1>Common Functions</h1>

<p>CodeIgniter uses a few functions for its operation that are globally defined, and are available to you at any point. These do not require loading any libraries or helpers.</p>

<h2>is_php('<var>version_number</var>')</h2>

<p>is_php() determines of the PHP version being used is greater than the supplied <var>version_number</var>.</p>

<code>if (is_php('5.3.0'))<br />
{<br />
&nbsp;&nbsp;&nbsp;&nbsp;$str = quoted_printable_encode($str);<br />
}</code>

<p>Returns boolean <kbd>TRUE</kbd> if the installed version of PHP is equal to or greater than the supplied version number.  Returns  <kbd>FALSE</kbd> if the installed version of PHP is lower than the supplied version number.</p>


<h2>is_really_writable('<var>path/to/file</var>')</h2>

<p>is_writable() returns TRUE on Windows servers when you really can't write to the file as the OS reports to PHP as FALSE only if the read-only attribute is marked. This function determines if a file is actually writable by attempting to write to it first. Generally only recommended on platforms where this information may be unreliable.</p>

<code>if (is_really_writable('file.txt'))<br />
{<br />
&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;I could write to this if I wanted to&quot;;<br />
}<br />
else<br />
{<br />
&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;File is not writable&quot;;<br />
}</code>

<h2>config_item('<var>item_key</var>')</h2>
<p>The <a href="../libraries/config.html">Config library</a> is the preferred way of accessing configuration information, however config_item() can be used to retrieve single keys. See Config library documentation for more information.</p>

<h2>show_error('<var>message</var>'), show_404('<var>page</var>'), log_message('<var>level</var>', '<samp>message</samp>')</h2>
<p>These are each outlined on the <a href="errors.html">Error Handling</a> page.</p>

<h2>set_status_header(<var>code</var>, '<var>text</var>');</h2>

<p>Permits you to manually set a server status header.  Example:</p>

<code>set_status_header(401);<br />
// Sets the header as:  Unauthorized</code>

<p><a href="http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html">See here</a> for a full list of headers.</p>


<h2>remove_invisible_characters(<var>$str</var>)</h2>
<p>This function prevents inserting null characters between ascii characters, like Java\0script.</p>


<h2>html_escape(<var>$mixed</var>)</h2>
<p>This function provides short cut for htmlspecialchars() function. It accepts string and array. To prevent Cross Site Scripting (XSS), it is very useful.</p>
