
<h1>Typography Helper</h1>

<p>The Typography Helper file contains functions that help your format text in semantically relevant ways.</p>


<h2>Loading this Helper</h2>

<p>This helper is loaded using the following code:</p>
<code>$this->load->helper('typography');</code>

<p>The following functions are available:</p>


<h2>auto_typography()</h2>

<p>Formats text so that it is semantically and typographically correct HTML.  Please see the <a href="../libraries/typography.html">Typography Class</a> for more info.</p>

<p>Usage example:</p>

<code>$string = auto_typography($string);</code>

<p><strong>Note:</strong> Typographic formatting can be processor intensive, particularly if you have a lot of content being formatted.
If you choose to use this function you may want to consider
<a href="../general/caching.html">caching</a> your pages.</p>


<h2>nl2br_except_pre()</h2>

<p>Converts newlines to &lt;br /&gt; tags unless they appear within &lt;pre&gt; tags.
This function is identical to the native PHP <dfn>nl2br()</dfn> function, except that it ignores &lt;pre&gt; tags.</p>

<p>Usage example:</p>

<code>$string = nl2br_except_pre($string);</code>

